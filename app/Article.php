<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
   
            protected $fillable = [
        'title','qizi', 'artnav', 'content','img','tag','created_at'
    ];

    
    public function setPublicedAtAttribute($img)
    {
    	# code...
    	$this->attributes['img']=$img->store('images/uploads/article');

    }
}
