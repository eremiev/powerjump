<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Project;
use App\Queries\Event\Store;
use App\Queries\Event\Update;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::OrderBy('when', 'desc')->paginate(10);

        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::pluck('title', 'id')->all();

        return view('admin.event.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inputs = $request->only(['title', 'description', 'when', 'project_id', 'image']);
        (new Store())->run($inputs);

        return redirect()->route('admin.events.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        $projects = Project::pluck('title', 'id')->all();

        return view('admin.event.edit', compact(['event', 'projects'] ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = $request->only(['title', 'description', 'when', 'project_id', 'image']);
        (new Update())->run($id, $inputs);

        return redirect()->route('admin.events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return redirect()->route('admin.events.index');
    }
}
