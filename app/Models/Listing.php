<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];
    

    public function scopeFilter($query, array $filters) {
        //In the model a query (like SQL but here with the Syntax from the Eloquentmodel) 
        // dd($filters['tag']);
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag'). '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }

    }

    //Relationship To User
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
