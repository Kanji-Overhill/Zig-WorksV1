<?php

namespace App\Http\Controllers;
use App\Models\Candidates;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Exports\CandidatesExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Http;


class CandidateController extends Controller
{
    public function insert(Request $request){
        $validator = $request->validate([
            'email' => 'required|string|email|unique:candidates|max:255'
        ]);
        $password = bcrypt($request->password);
        $date = date('Y-m-d H:i:s');
        $register = Candidates::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => $password,
            'password' => $request->password,
            'email' => $request->email,
            'created_at' => $date,
            'updated_at' => $date
        ]);
        $register_user = User::create([
            'name' => $request->first_name,
            'password' => $password,
            'type' => "talent",
            'email' => $request->email,
            'created_at' => $date,
            'updated_at' => $date
        ]);
        $fullname = $request->first_name." ".$request->last_name;

        $email_message = "Link para confirmar registro \n";

        $email_message .= "https://kanjicode.com.mx/websites/zig-works/public/candidate-confirmed/".$register->id;

        $urlConfirmation =  "https://kanjicode.com.mx/websites/zig-works/public/candidate-confirmed/".$register->id;

        $email_from = "info@zig-works.com";
        $headers = 'From: '.$email_from."\r\n" .

        'Reply-To: '.$email_from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

        mail($request->email, "Verificacion de Email", $email_message, $headers);
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

    public function getCandidates(Request $request)
    {
        $candidates = Candidates::all();
        return view('admin-candidates',['candidates'=>$candidates]);
    }

    public function insertCandidates(Request $request){
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

        $email_message .= "https://kanjicode.com.mx/websites/zig-works/public/candidate-confirmed/".$register->id;

        $urlConfirmation =  "https://kanjicode.com.mx/websites/zig-works/public/candidate-confirmed/".$register->id;

        $email_from = "info@zig-works.com";
        $headers = 'From: '.$email_from."\r\n" .

        'Reply-To: '.$email_from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

        mail($request->email, "Verificacion de Email", $email_message, $headers);
        return view('admin-candidates', ['registro'=>"confirmado"]);
    }

    public function export() 
    {
        return Excel::download(new CandidatesExport, 'candidates.xlsx');
    }
}
