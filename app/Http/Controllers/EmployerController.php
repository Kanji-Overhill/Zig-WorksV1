<?php

namespace App\Http\Controllers;
use App\Models\Employers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployerController extends Controller
{
    public function insert(Request $request){
        $validator = $request->validate([
            'email' => 'required|string|email|unique:candidates|max:255'
        ]);
        $password_save = Str::random(8);
        $password = Hash::make($password_save);
        $date = date('Y-m-d H:i:s');
        $register = Candidates::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => $password,
            'password_save' => $password_save,
            'email' => $request->email,
            'created_at' => $date,
            'updated_at' => $date
        ]);
        $fullname = $request->first_name." ".$request->last_name;

        $email_message = "Link para confirmar registro \n";

        $email_message .= "https://zig-works.com/candidate-confirmed/".$register->id;

        $urlConfirmation =  "https://zig-works.com/candidate-confirmed/".$register->id;

        $email_from = "ingluisfelipe07@gmail.com";
        $headers = 'From: '.$email_from."\r\n" .

        'Reply-To: '.$email_from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

        mail("ingluisfelipe07@gmail.com", "Verificacion de Email", $email_message, $headers);
        return view('register/candidate', ['registro'=>$urlConfirmation, 'name'=>$fullname]);
    }
    public function confirmedEmail($id){
        $candidate = Candidates::find($id);
        if($candidate->email_verified_at != null && $candidate->country != null){
            return view('register/candidate', ['confirmado'=>false, 'id'=>$id]);
        }else{
            $date = date('Y-m-d H:i:s');
            $candidate->email_verified_at = $date;
            $candidate->updated_at = $date;

            $candidate->save();
            return view('register/candidate', ['confirmado'=>true, 'id'=>$id]);
        }
    }

    public function confirmed(Request $request){
        $candidate = Candidates::find($request->id);
        $date = date('Y-m-d H:i:s');
        $country_legal = implode(',', $request->country_legal);

        $candidate->school = $request->school;
        $candidate->phone = $request->phone;
        $candidate->country = $request->country;
        $candidate->country_legal = $country_legal;
        $candidate->country_geo_location = $request->country_geo_location;
        $candidate->linkedin = $request->linkedin;
        $candidate->experience = $request->experience;
        $candidate->updated_at = $date;
        $candidate->save();

        return view('register/candidate', ['autentificado'=>true]);
    }

    public function getEmployers(Request $request)
    {
        $employers = Employers::all();
        return view('admin-employers',['employers'=>$employers]);
    }


    public function insertEmployers(Request $request){
        $validator = $request->validate([
            'email' => 'required|string|email|unique:employers|max:255'
        ]);
        $password_save = Str::random(8);
        $password = Hash::make($password_save);
        $date = date('Y-m-d H:i:s');
        $register = Employers::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => $password,
            'password_save' => $password_save,
            'email' => $request->email,
            'created_at' => $date,
            'updated_at' => $date
        ]);
        $fullname = $request->first_name." ".$request->last_name;

        $email_message = "Link para confirmar registro \n";

        $email_message .= "https://zig-works.com/candidate-confirmed/".$register->id;

        $urlConfirmation =  "https://zig-works.com/candidate-confirmed/".$register->id;

        $email_from = "ingluisfelipe07@gmail.com";
        $headers = 'From: '.$email_from."\r\n" .

        'Reply-To: '.$email_from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

        mail("ingluisfelipe07@gmail.com", "Verificacion de Email", $email_message, $headers);
        return view('admin-employers', ['registro'=>"confirmado"]);
    }
    public function export() 
    {
        return Excel::download(new EmployersExport, 'employers.xlsx');
    }
}
