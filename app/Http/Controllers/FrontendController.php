<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pricelist;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function event(){
        return view('frontend.event');
    }

    public function schedule(){
        return view('frontend.schedule');
    }

    public function gallery(){
        return view('frontend.gallery');
    }

    public function pricing_plan(){
        $pricelist = pricelist::all();
        return view('frontend.pricing_plan', ['pricelist'=>$pricelist]);
    }

    public function faqs(){
        return view('frontend.faqs');
    }
    public function sponsors(){
        return view('frontend.sponsors');
    }
    public function contact(){
        return view('frontend.contact');
    }
}
