<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function show () {
        $pasakums1 = new Event("Summer Fest", "2027-08-24", 5000);

        echo "Name: " . $pasakums1->showTitle() . "; Date: " . $pasakums1->showDate() . "; Attendee count: " . $pasakums1->showAttendeeCount() . "\n";
    }

    public function index () {
        $events =
        [
        $pasakums2 = new Event("Burning Castle", "2027-02-22", 2500),
        $pasakums3 = new Event("Rīgas Maratons", "2027-06-23", 4100),
        $pasakums4 = new Event("Eating comp", "2028-01-11", 6700),
        ];



        return view("events.index", ["events" => $events]);
    }
}
