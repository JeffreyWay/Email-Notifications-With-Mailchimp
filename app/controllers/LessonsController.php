<?php

class LessonsController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $lesson = Lesson::create(Input::all());

        // Alternatively, fire and listen for an event
        // Then, call this from the listener.
        Notify::lessonSubscribers($lesson);

        return 'Success'; // or redirect or whatever
	}

}