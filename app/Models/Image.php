<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  use HasFactory;

  protected $fillable = ['client_id', 'note_id', 'img_path', 'img_name'];
  protected $guarded = [];



  public function client()
  {
    return $this->belongsTo(Client::class, 'client_id');
  }

  public function note()
  {
    return $this->belongsTo(Note::class, 'note_id');
  }
}
