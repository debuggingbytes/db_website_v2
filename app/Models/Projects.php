<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
  use HasFactory;


  public $timestamps = false;

  protected $fillable = [
    'title',
    'details',
    'sent_time',
    'due_date',
    'user_id',
    'from_id'
  ];
}
