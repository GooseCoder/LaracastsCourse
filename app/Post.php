<?php

namespace App;

use Carbon\Carbon;

class Post extends Model 
{
	// No need to use guarded as we have that definded in the Model we now extending.
	public function comments() {
		return $this->hasMany(Comment::class);
	}

	public function addComment($body){
		$this->comments()->create(compact('body'));
	}

	// $posts->user; //a post belong to a user
    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters) {
        // where we have get request with parameters month
        if( isset($filters['month']) && $month = $filters['month'] ) {
            // Carbon::parse($month)->month  --> converts to month number.
            $query->whereMonth('created_at', Carbon::parse($month)->month );
        }

        if( isset($filters['year']) && $year = $filters['year'] ) {
            $query->whereYear('created_at', $year );
        }
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year , monthname(created_at) month , count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }
}
