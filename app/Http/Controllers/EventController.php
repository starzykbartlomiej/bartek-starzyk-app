<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('event.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('event.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->saveDataFromRequestAsEvent($request, new Event());
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('event.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $categories = Category::all();
        return view('event.edit', ['event' => $event, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        return $this->saveDataFromRequestAsEvent($request, $event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }

    private function saveDataFromRequestAsEvent(Request $request, Event $event)
    {
        $form_parameters = $request->all();
        $event->name = $form_parameters['name'];
        $event->description = $form_parameters['description'];
        $event->start_date = $form_parameters['start_date'];
        $event->end_date = $form_parameters['end_date'];
        $event->image_link = $form_parameters['image_link'];
        $event->category_id = $form_parameters['category_id'];
        $event->user_id = $request->user()->id;
        $event->save();
        return Redirect::to('/event');
    }
}
