<?php

namespace App\Http\Controllers;

use App\Event;
use App\Partner;
use App\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function home(){
        $projects = Project::with('images')->OrderBy('when', 'desc')->paginate(6);
        $events = Event::with('images')->OrderBy('when', 'desc')->OrderBy('created_at', 'desc')->paginate(5);

        return view('pages.home', compact(['projects', 'events']));
    }

    public function about(){
        return view('pages.about');
    }

    public function team(){
        return view('pages.team');
    }

    public function activities(){

        $categories = [
            'physical_activity' => 'Физическа активност',
            'culture_entertainment' => 'Култура и забавления',
            'social_projects' => 'Социални проекти',
            'business_partnerships' => 'Бизнес партньорства',
            'volunteering' => 'Доброволчество',
        ];
        $projects = Project::with('images')->OrderBy('when', 'desc')->paginate(8);

        $selectedCategory = null;

        return view('pages.projects', compact(['projects', 'selectedCategory', 'categories']));
    }

    public function sports(){
        return view('pages.sports');
    }

    public function jumpingStilts(){
        return view('pages.jumping_stilts');
    }

    public function archery(){
        return view('pages.archery');
    }

    public function bike(){
        return view('pages.bike');
    }

    public function atv(){
        return view('pages.atv');
    }

    public function safari(){
        return view('pages.safari');
    }

    public function other(){
        return view('pages.other');
    }

    public function activity($category){

        $categories = [
            'physical_activity' => 'Физическа активност',
            'culture_entertainment' => 'Култура и забавления',
            'social_projects' => 'Социални проекти',
            'business_partnerships' => 'Бизнес партньорства',
            'volunteering' => 'Доброволчество',
        ];
        $projects = Project::with('images')->where('category', $category)->OrderBy('when', 'desc')->paginate(8);

        $selectedCategory = $categories[$category];

        return view('pages.projects', compact(['projects', 'selectedCategory', 'categories']));

    }

    public function events(){
        $events = Event::with('images')->OrderBy('when', 'desc')->OrderBy('created_at', 'desc')->paginate(8);

        return view('pages.events', compact('events'));
    }

    public function showActivity($id){

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
        $partners = Partner::with('images')->get();

        return view('pages.partners', compact(['partners'] ));
    }

    public function contacts(){
        return view('pages.contacts');
    }
}
