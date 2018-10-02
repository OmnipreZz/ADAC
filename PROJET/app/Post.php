<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Post extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'author', 'content','category_id','user_id'
    ];

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function subcategories()
    {
    	return $this->belongsToMany('App\Subcategory');
    }

    public function favorites()
    {
    	return $this->hasMany('App\Favorite');
    }

    public function getFavoriteListAttribute()
    {
        return $this->favorites->pluck('user_id')->all();
    }

    
}
