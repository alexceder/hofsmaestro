<?php

class Event extends Eloquent {

    public function town()
    {
        return $this->belongsTo('Location');
    }

    public function type()
    {
        return $this->belongsTo('Type');
    }
}

