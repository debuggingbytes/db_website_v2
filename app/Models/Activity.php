<?php

namespace App\Models;

use App\Http\Controllers\ActivityController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Activity extends Model
{
  use HasFactory;
  protected $fillable = ['action', 'details'];



  public function user()
  {
    return $this->belongsToMany(User::class);
  }

  public function setActivity($user_id, $action, $details)
  {

    $activity = DB::table('activities')->insert([
      'user_id' => $user_id,
      'action' => $action,
      'details' => $details,
    ]);

    if ($activity) {
      return "Success";
    } else {
      return "Something went wrong";
    }
  }
}
