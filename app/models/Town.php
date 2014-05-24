<?php

class Town {

    public $timestamps = false;

    public function events()
    {
        return $this->hasMany('Event');
    }

}

