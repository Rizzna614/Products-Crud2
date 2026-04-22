<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $name;
    public $year;
    public $totalDistance;

    function __construct($name, $year, $totalDistance)
    {
        $this->name = $name;
        $this->year = $year;
        $this->totalDistance = $totalDistance;
    }


    public function showTotalDistance()
    {
        return $this->totalDistance;
    }

    public function drive($distance)
    {
        $this->totalDistance = $this->totalDistance + $distance;
    }

    static function create($data)
    {
        new Car($data[0], $data[1], $data[2]);
    }
}

