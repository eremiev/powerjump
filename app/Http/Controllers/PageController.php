<?php

namespace App\Http\Controllers;

use App\Event;
use App\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function about(){
        return view('pages.about');
    }

    public function projects(){

        $projects = Project::with('images')->OrderBy('when', 'desc')->paginate(5);

        return view('pages.projects', compact('projects'));
    }

    public function events(){
        $events = Event::with('images')->OrderBy('when', 'desc')->paginate(5);

        return view('pages.events', compact('events'));
    }

    public function products(){
        return view('pages.products');
    }

    public function partners(){
        return view('pages.partners');
    }

    public function contacts(){
        return view('pages.contacts');
    }
}