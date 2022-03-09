<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
  use HasFactory;

  protected $fillable = [
    'content', 'client_id'
  ];


  //return users
  public function client()
  {
    return $this->belongsTo(Clients::class);
  }
}
