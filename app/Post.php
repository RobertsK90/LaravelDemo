<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model {

    protected $fillable = ['title', 'slug', 'user_id', 'body'];

	public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug($value);
    }

}
