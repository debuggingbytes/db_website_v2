<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PushAlerts extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id', 'details', 'icon_path'
  ];



  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
