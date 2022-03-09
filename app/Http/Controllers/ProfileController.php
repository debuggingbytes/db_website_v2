<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\PushAlerts;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {



    $uid = session('user_id');
    //
    $profile = User::findOrFail($uid);
    $projects = $profile->projects;

    //Change Name to First Intial + Last Name
    $name = explode(' ', $profile->name);
    $name = strtoupper(substr($name[0], 0, 1) . $name[1]);

    // $alerts = PushAlerts::whereUserId($uid)->where('is_read', '=', '0')->orderBy('id', 'desc')->get();

    return view('profile.index', compact('profile', 'projects', 'name'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Profile  $profile
   * @return \Illuminate\Http\Response
   */
  public function show(Profile $profile)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Profile  $profile
   * @return \Illuminate\Http\Response
   */
  public function edit(Profile $profile)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Profile  $profile
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Profile $profile)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Profile  $profile
   * @return \Illuminate\Http\Response
   */
  public function destroy(Profile $profile)
  {
    //
  }
}
