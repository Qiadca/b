<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
    	$sliders = DB::table('sliders')->get();
    	$page_home = DB::table('page_home_items')->where('id',1)->first();
    	$why_choose_items = DB::table('why_choose_items')->get();
    	$services = DB::table('services')->get();
    	$testimonials = DB::table('testimonials')->get();
    	$projects = DB::table('projects')->get();
    	$team_members = DB::table('team_members')->get();
    	$blogs = DB::table('blogs')->get();
		$photos = DB::table('photos')->get();
		$page_contact_items = DB::table('page_contact_items')->get();
        return view('pages.index', compact('sliders','page_home','photos','why_choose_items','page_contact_items','services', 'testimonials','projects','team_members','blogs'));
    }
}