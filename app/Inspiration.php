<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspiration extends Model
{
    protected $fillable = ['image_url', "image_info", "project_id"];

    public function project()
   {
       return $this->belongsTo('App\Project');
   }
}
