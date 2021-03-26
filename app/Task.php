<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];

    protected static function boot()
    {
        parent::boot();
        self::created(function ($model) {
            $model->name = $model->id . '-labx';
            $model->save();
        });
    }
}
