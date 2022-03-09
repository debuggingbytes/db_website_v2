<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  use HasFactory;

  protected $fillable = [
    'content', 'client_id', 'note_title'
  ];


  //return users
  public function client()
  {
    return $this->belongsTo(Client::class);
  }

  // images
  public function images()
  {
    return $this->hasMany(Image::class);
  }

  public function setImgPathAttribute($value)
  {

    $this->attributes['img_name'] = asset("/storage/$value");
  }
}
