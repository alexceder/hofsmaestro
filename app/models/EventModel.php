<?php

class EventModel extends Eloquent {

    protected $table = 'events';

    protected $guarded = ['id'];

    public function town()
    {
        return $this->belongsTo('Location');
    }

    public function type()
    {
        return $this->belongsTo('Type');
    }

    public function getNiceTimeAttribute()
    {
        $time = new \Carbon\Carbon($this->time);
        return $time->format('H:i');
    }
}

