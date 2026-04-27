<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    private $title;
    private $date;
    private $attendeeCount;
    private $maxAttendeeCount;

    public function __construct($title, $date, $attendeeCount)
    {
        $this->title = $title;
        $this->date = $date;
        $this->attendeeCount = $attendeeCount;
    }

    public function showAttendeeCount()
    {
        return $this->attendeeCount;
    }

    public function showDate()
    {
        return $this->date;
    }

    public function showTitle()
    {
        return $this->title;
    }

    public function addAttendee($count)
    {
        if ($this->maxAttendeeCount == null) {
            $this->attendeeCount = $this->attendeeCount + $count;
        } else {
            if ($this->maxAttendeeCount >= $count) {
                $this->attendeeCount = $this->attendeeCount + $count;
            } else {
                echo "ERROR! Attendee count over the max limit!" . "\n";
            }
        }
    }

    public function setMaxAttendeeCount($count)
    {
        $this->maxAttendeeCount = $count;
    }

    public function getMaxAttendeeCount()
    {
        return $this->maxAttendeeCount;
    }

    static function create($name, $title, $date, $attendeeCount)
    {
        $name = new Event($title, $date, $attendeeCount);

        echo "Name: " . $name->showTitle() . "; Date: " . $name->showDate() . "; Attendee count: " . $name->showAttendeeCount() . "\n";
    }
}
