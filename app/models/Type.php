<?php

class Type {

    public $timestamps = false;

    public function events()
    {
        return $this->hasMany('Event');
    }

}

