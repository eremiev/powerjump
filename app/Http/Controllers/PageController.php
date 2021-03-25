<?php

namespace App\Http\Controllers;

use App\Event;
use App\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function home(){
        $projects = Project::with('images')->OrderBy('when', 'desc')->paginate(5);
        $events = Event::with('images')->OrderBy('when', 'desc')->paginate(3);

        return view('pages.home', compact(['projects', 'events']));
    }

    public function about(){
        return view('pages.about');
    }

    public function experiences(){

        $projects = Project::with('images')->OrderBy('when', 'desc')->paginate(5);

        return view('pages.experiences');
    }

    public function experience($category){

        $categories = [
            'physical_activity' => 'ФИЗИЧЕСКА АКТИВНОСТ',
            'culture_entertainment' => 'КУЛТУРА И ЗАБАВЛЕНИЯ',
            'social_projects' => 'СОЦИАЛНИ ПРОЕКТИ',
            'business_partnerships' => 'БИЗНЕС ПАРТНЬОРСТВА',
        ];
        $projects = Project::with('images')->where('category', $category)->OrderBy('when', 'desc')->paginate(5);

        $selectedCategory = $categories[$category];

        return view('pages.projects', compact(['projects', 'selectedCategory']));

    }

    public function events(){
        $events = Event::with('images')->OrderBy('when', 'desc')->paginate(5);

        return view('pages.events', compact('events'));
    }

    public function showProjects($id){

        $project = Project::find($id);

        return view('pages.projects_view', compact(['project'] ));
    }

    public function showEvents($id){

        $event = Event::find($id);

        return view('pages.events_view', compact(['event'] ));
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
