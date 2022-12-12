<?php

class Genre
{
    public $fistGenre;
    public $secondGenre;

    function __construct(string $_firstGenre, string $_secondGenre)
    {
        $this->fistGenre = $_firstGenre;
        $this->secondGenre = $_secondGenre;
    }
}