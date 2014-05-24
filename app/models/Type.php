<?php

class Type extends Eloquent {

    public $timestamps = false;

    public function events()
    {
        return $this->hasMany('Event');
    }

}

