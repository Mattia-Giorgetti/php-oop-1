<?php

class Movie
{
    public $pic;
    public $title;
    public $duration;
    public $year;
    public $genres;
    private $rentPrice;
    public static $startingPrice = 2;

    function __construct($_pic, $_title, $_duration, $_year, $_genres = [])
    {
        $this->pic = $_pic;
        $this->title = $_title;
        $this->duration = $_duration;
        $this->year = $_year;
        $this->genres = $_genres;

        $this->setPrice($this->year);
    }

    public function setPrice($_year)
    {
        if ($_year >= 2020) {
            return $this->rentPrice = self::$startingPrice + 2;
        } elseif ($_year < 2020 && $_year >= 2000) {
            return $this->rentPrice = self::$startingPrice + 1;
        } else {
            return $this->rentPrice = self::$startingPrice;
        }
    }

}