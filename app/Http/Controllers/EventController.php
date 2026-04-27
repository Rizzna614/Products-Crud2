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
}
