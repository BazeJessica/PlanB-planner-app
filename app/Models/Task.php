<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
      protected $fillable = [
        "title",
        "description",
        "status",
        "board_id",
      ];

    public function Board(){
         return $this->belongsTo(Board::class);
    }
}
