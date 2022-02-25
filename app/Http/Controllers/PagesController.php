<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employers_Page;
use App\Models\Talents_Page;
use App\Models\Homes;
use App\Models\Speakers;

class PagesController extends Controller
{
    public function dashboard(Request $request)
    {
        $home = Homes::first();
        return view('dashboard',['home' => $home]);
    }
    public function home(Request $request)
    {
        $home = Homes::first();
        return view('home',['home' => $home]);
    }
    public function saveHome(Request $request)
    {
        $home = Homes::find(1);

        $home->home_1_title = $request->home_1_title;
        $home->home_1_text = $request->home_1_text;
        if($request->hasfile('home_1_img'))
        {
            $home_1_img = rand().time().'.'.$request->file('home_1_img')->extension();
            $request->file('home_1_img')->move(public_path().'/images/', $home_1_img);
            $home->home_1_img = $home_1_img;  
        }

        $home->home_2_title = $request->home_2_title;
        $home->home_2_text = $request->home_2_text;
        if($request->hasfile('home_2_img'))
        {
            $home_2_img = rand().time().'.'.$request->file('home_2_img')->extension();
            $request->file('home_2_img')->move(public_path().'/images/', $home_2_img);
            $home->home_2_img = $home_2_img;  
        }

        $home->home_3_title = $request->home_3_title;
        $home->home_3_text = $request->home_3_text;
        if($request->hasfile('home_3_img'))
        {
            $home_3_img = rand().time().'.'.$request->file('home_3_img')->extension();
            $request->file('home_3_img')->move(public_path().'/images/', $home_3_img);
            $home->home_3_img = $home_3_img;  
        }

        $home->slider_home_1_active = $request->slider_home_1_active;
        $home->slider_home_1_video = $request->slider_home_1_video;
        if($request->hasfile('slider_home_1_image'))
        {
            $slider_home_1_image = rand().time().'.'.$request->file('slider_home_1_image')->extension();
            $request->file('slider_home_1_image')->move(public_path().'/images/', $slider_home_1_image);
            $home->slider_home_1_image = $slider_home_1_image;  
        }
        $home->slider_home_2_video = $request->slider_home_2_video;
        if($request->hasfile('slider_home_2_image'))
        {
            $slider_home_2_image = rand().time().'.'.$request->file('slider_home_2_image')->extension();
            $request->file('slider_home_2_image')->move(public_path().'/images/', $slider_home_2_image);
            $home->slider_home_2_image = $slider_home_2_image;  
        }
        $home->slider_home_3_video = $request->slider_home_3_video;
        if($request->hasfile('slider_home_3_image'))
        {
            $slider_home_3_image = rand().time().'.'.$request->file('slider_home_3_image')->extension();
            $request->file('slider_home_3_image')->move(public_path().'/images/', $slider_home_3_image);
            $home->slider_home_3_image = $slider_home_3_image;  
        }

        $home->home_5_title = $request->home_5_title;
        $home->home_5_text = $request->home_5_text;

        $home->home_4_title = $request->home_4_title;
        $home->home_4_text = $request->home_4_text;
        if($request->hasfile('home_4_img'))
        {
            $home_4_img = rand().time().'.'.$request->file('home_4_img')->extension();
            $request->file('home_4_img')->move(public_path().'/images/', $home_4_img);
            $home->home_4_img = $home_4_img;  
        }

        $home->slider_home_2_active = $request->slider_home_2_active;
        $home->slider_home_4_video = $request->slider_home_4_video;
        if($request->hasfile('slider_home_4_image'))
        {
            $slider_home_4_image = rand().time().'.'.$request->file('slider_home_4_image')->extension();
            $request->file('slider_home_4_image')->move(public_path().'/images/', $slider_home_4_image);
            $home->slider_home_4_image = $slider_home_4_image;  
        }
        $home->slider_home_5_video = $request->slider_home_5_video;
        if($request->hasfile('slider_home_5_image'))
        {
            $slider_home_5_image = rand().time().'.'.$request->file('slider_home_5_image')->extension();
            $request->file('slider_home_5_image')->move(public_path().'/images/', $slider_home_5_image);
            $home->slider_home_5_image = $slider_home_5_image;  
        }
        $home->slider_home_6_video = $request->slider_home_6_video;
        if($request->hasfile('slider_home_6_image'))
        {
            $slider_home_6_image = rand().time().'.'.$request->file('slider_home_6_image')->extension();
            $request->file('slider_home_6_image')->move(public_path().'/images/', $slider_home_6_image);
            $home->slider_home_6_image = $slider_home_6_image;  
        }

        $home->counter_active = $request->counter_active;
        $home->counter_number_1 = $request->counter_number_1;
        $home->counter_text_1 = $request->counter_text_1;
        $home->counter_number_2 = $request->counter_number_2;
        $home->counter_text_2 = $request->counter_text_2;
        $home->counter_number_3 = $request->counter_number_3;
        $home->counter_text_3 = $request->counter_text_3;
        $home->counter_description = $request->counter_description;

        $home->slider_home_3_active = $request->slider_home_3_active;
        $home->slider_home_7_video = $request->slider_home_7_video;
        if($request->hasfile('slider_home_7_image'))
        {
            $slider_home_7_image = rand().time().'.'.$request->file('slider_home_7_image')->extension();
            $request->file('slider_home_7_image')->move(public_path().'/images/', $slider_home_7_image);
            $home->slider_home_7_image = $slider_home_7_image;  
        }
        $home->slider_home_8_video = $request->slider_home_8_video;
        if($request->hasfile('slider_home_8_image'))
        {
            $slider_home_8_image = rand().time().'.'.$request->file('slider_home_8_image')->extension();
            $request->file('slider_home_8_image')->move(public_path().'/images/', $slider_home_8_image);
            $home->slider_home_8_image = $slider_home_8_image;  
        }
        $home->slider_home_9_video = $request->slider_home_9_video;
        if($request->hasfile('slider_home_9_image'))
        {
            $slider_home_9_image = rand().time().'.'.$request->file('slider_home_9_image')->extension();
            $request->file('slider_home_9_image')->move(public_path().'/images/', $slider_home_9_image);
            $home->slider_home_9_image = $slider_home_9_image;  
        }


        $home->save();

        $home = Homes::first();
        return view('dashboard',['home' => $home]);
    }

    public function talents_page(Request $request)
    {
        $talents = Talents_Page::first();
        return view('talents-page',['talents' => $talents]);
    }
    public function talents(Request $request)
    {
        $talents = Talents_Page::first();
        return view('talents',['talents' => $talents]);
    }
    public function saveTalents(Request $request)
    {
        $talents = Talents_Page::find(1);

        $talents->banner_link = $request->banner_link;
        if($request->hasfile('banner_image'))
        {
            $banner_image = rand().time().'.'.$request->file('banner_image')->extension();
            $request->file('banner_image')->move(public_path().'/images/', $banner_image);
            $talents->banner_image = $banner_image;  
        }

        $talents->title_1 = $request->title_1;
        if($request->hasfile('image_1'))
        {
            $image_1 = rand().time().'.'.$request->file('image_1')->extension();
            $request->file('image_1')->move(public_path().'/images/', $image_1);
            $talents->image_1 = $image_1;  
        }

        $talents->title_2 = $request->title_2;
        $talents->text_2 = $request->text_2;
        $talents->title_3 = $request->title_3;
        $talents->text_3 = $request->text_3;
        if($request->hasfile('image_3'))
        {
            $image_3 = rand().time().'.'.$request->file('image_3')->extension();
            $request->file('image_3')->move(public_path().'/images/', $image_3);
            $talents->image_3 = $image_3;  
        }

        $talents->title_4 = $request->title_4;
        $talents->text_4 = $request->text_4;
        $talents->title_6 = $request->title_6;
        $talents->text_6 = $request->text_6;

        $talents->slider_active = $request->slider_active;
        $talents->slider_1_video = $request->slider_1_video;
        if($request->hasfile('slider_1_image'))
        {
            $slider_1_image = rand().time().'.'.$request->file('slider_1_image')->extension();
            $request->file('slider_1_image')->move(public_path().'/images/', $slider_1_image);
            $talents->slider_1_image = $slider_1_image;  
        }
        $talents->slider_2_video = $request->slider_2_video;
        if($request->hasfile('slider_2_image'))
        {
            $slider_2_image = rand().time().'.'.$request->file('slider_2_image')->extension();
            $request->file('slider_2_image')->move(public_path().'/images/', $slider_2_image);
            $talents->slider_2_image = $slider_2_image;  
        }
        $talents->slider_3_video = $request->slider_3_video;
        if($request->hasfile('slider_3_image'))
        {
            $slider_3_image = rand().time().'.'.$request->file('slider_3_image')->extension();
            $request->file('slider_3_image')->move(public_path().'/images/', $slider_3_image);
            $talents->slider_3_image = $slider_3_image;  
        }

        $talents->save();

        $talents = Talents_Page::first();
        return view('talents-page',['talents' => $talents]);
    }

    public function employers(Request $request)
    {
        $employers = Employers_Page::first();
        return view('employers',['employers' => $employers]);
    }

    public function employers_page(Request $request)
    {
        $employers = Employers_Page::first();
        return view('employers-page',['employers' => $employers]);
    }

    public function saveEmployers(Request $request)
    {
        $employers = Employers_Page::find(1);

        $employers->banner_link = $request->banner_link;
        if($request->hasfile('banner_image'))
        {
            $banner_image = rand().time().'.'.$request->file('banner_image')->extension();
            $request->file('banner_image')->move(public_path().'/images/', $banner_image);
            $employers->banner_image = $banner_image;  
        }

        $employers->title_1 = $request->title_1;
        $employers->title_2 = $request->title_2;
        $employers->text_2 = $request->text_2;
        if($request->hasfile('image_2'))
        {
            $image_2 = rand().time().'.'.$request->file('image_2')->extension();
            $request->file('image_2')->move(public_path().'/images/', $image_2);
            $employers->image_2 = $image_2;  
        }

        $employers->title_3 = $request->title_3;
        $employers->text_3 = $request->text_3;
        if($request->hasfile('image_3'))
        {
            $image_3 = rand().time().'.'.$request->file('image_3')->extension();
            $request->file('image_3')->move(public_path().'/images/', $image_3);
            $employers->image_3 = $image_3;  
        }
        
        $employers->title_4 = $request->title_4;
        $employers->text_4 = $request->text_4;

        $employers->slider_active = $request->slider_active;
        $employers->slider_1_video = $request->slider_1_video;
        if($request->hasfile('slider_1_image'))
        {
            $slider_1_image = rand().time().'.'.$request->file('slider_1_image')->extension();
            $request->file('slider_1_image')->move(public_path().'/images/', $slider_1_image);
            $employers->slider_1_image = $slider_1_image;  
        }
        $employers->slider_2_video = $request->slider_2_video;
        if($request->hasfile('slider_2_image'))
        {
            $slider_2_image = rand().time().'.'.$request->file('slider_2_image')->extension();
            $request->file('slider_2_image')->move(public_path().'/images/', $slider_2_image);
            $employers->slider_2_image = $slider_2_image;  
        }
        $employers->slider_3_video = $request->slider_3_video;
        if($request->hasfile('slider_3_image'))
        {
            $slider_3_image = rand().time().'.'.$request->file('slider_3_image')->extension();
            $request->file('slider_3_image')->move(public_path().'/images/', $slider_3_image);
            $employers->slider_3_image = $slider_3_image;  
        }

        $employers->save();

        $employers = Employers_Page::first();
        return view('employers-page',['employers' => $employers]);
    }
  
}
