<?php


namespace App\Http\Controllers\Api\V1;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;


class EventsController extends Controller
{

    /**
     * Display a listing of the Events.
     *
     * @param EventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(EventRequest $request)
    {
        $relations = $this->prepareRelations($request->get('with'));

        $events = Event::withRelations($relations)
            ->paginate(getPerPage());

        return $this->response->ok($events);
    }

    /**
     * Store a newly created Member in Database.
     *
     * @param EventRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(EventRequest $request)
    {
        $inputs = $request->only([
            'when',
            'image',
            'title',
            'description'
        ]);
        $event = Event::create($inputs);

        return $this->response->created();
    }

    /**
     * Display the specified resource.
     *
     * @param EventRequest $request
     * @param $eventId
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(EventRequest $request, $eventId)
    {
        $event = Event::findOrFail($eventId);

        return $this->response->ok($event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EventRequest $request
     * @param $eventId
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(EventRequest $request, $eventId)
    {

        return $this->response->noContent();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param EventRequest $request
     * @param $eventId
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(EventRequest $request, $eventId)
    {
        Event::findOrFail($eventId)->delete();

        return $this->response->noContent();
    }
}