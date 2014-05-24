<?php

class EventModel extends Eloquent {

    protected $table = 'events';

    public function town()
    {
        return $this->belongsTo('Location');
    }

    public function type()
    {
        return $this->belongsTo('Type');
    }
}

