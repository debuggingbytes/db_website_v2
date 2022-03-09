<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  use HasFactory;
  protected $fillable = ['fullName', 'email', 'phone', 'website', 'cost', 'responsive', 'tech_support', 'domain', 'due_date'];



  public function completed()
  {
    return Client::where('completed', '=', 1)->get();
  }
  public function incomplete()
  {
    return Client::where('completed', '=', 0)->get();
  }

  function getPhoneNumberAttribute()
  {
    $cleaned = preg_replace('/[^[:digit:]]/', '', $this->phone);
    preg_match('/(\d{3})(\d{3})(\d{4})/', $cleaned, $matches);
    return "({$matches[1]}) {$matches[2]}-{$matches[3]}";
  }
  /*
  
    Privacy settings if streaming is enabled, this will block out
    users names, emails, phone numbers
  
  */
  public function getTwitchNameAttribute()
  {
    $replace = "";

    $privacy = substr($this->fullName, 1, strlen($this->fullName));
    for ($i = 0; $i < strlen($privacy); $i++) {
      $replace .= "*";
    }
    $newName = str_replace($privacy, $replace, $this->fullName);
    return $newName;
  }

  public function getTwitchEmailAttribute()
  {
    $replace = "";
    $email = explode('@', $this->email);
    $first = substr($email[0], 1, strlen($email[0]));
    for ($i = 0; $i < strlen($first); $i++) {
      $replace .= "*";
    }
    return str_replace($first, $replace, $this->email);
  }

  public function getTwitchPhoneAttribute()
  {
    $privacy = substr($this->phone, 0, -4);
    return str_replace($privacy, "(***) ***-", $this->phone);
  }




  function notes()
  {
    return $this->hasMany(Note::class);
  }
}
