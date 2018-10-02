<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Favorite extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id', 'user_id'
    ];

    public function posts()
    {
    	return $this->belongsTo('App\Post');
    }

    public function users()
    {
    	return $this->belongsTo('App\User');
    }
}
