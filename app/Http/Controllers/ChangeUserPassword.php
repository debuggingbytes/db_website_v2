<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangeUserPassword extends Controller
{
  //


  public function changePassword(Request $request)
  {
    // dd($request);

    $request->validate([
      'current_password' => 'required',
      'password' => 'required|string|min:6|confirmed',
      'password_confirmation' => 'required',
    ]);

    $user = Auth::user();

    if (!Hash::check($request->current_password, $user->password)) {
      return back()->with('error', 'Current password does not match!');
    }

    $user->password = Hash::make($request->password);

    return back()->with('success', 'Password successfully changed!');
    // // dd($request->current_password);
  }
}
