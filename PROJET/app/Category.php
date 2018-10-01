<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Category extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function posts()
    {
    	return $this->hasMany('App\Post');
    }

    public function subcategories()
    {
    	return $this->hasMany('App\Subcategory');
    }

}
