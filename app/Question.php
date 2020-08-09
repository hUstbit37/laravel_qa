<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function setTitleAttribute($value) //define the default values for some of your model's attributes
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value); //Str::slug('My slug Go', '-'); output: my-slug-go
    }
}
