<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    $server = Server::findOrFail(1);
    return view('layouts.server.index', ['server' => $server]);
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
   * @param  \App\Models\Server  $server
   * @return \Illuminate\Http\Response
   */
  public function show(Server $server)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Server  $server
   * @return \Illuminate\Http\Response
   */
  public function edit(Server $server)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Server  $server
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Server $server)
  {
    //
    // dd($request->all());
    $server->update($request->all());
    return back()->with(['message' => 'Successfully changed']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Server  $server
   * @return \Illuminate\Http\Response
   */
  public function destroy(Server $server)
  {
    //
  }
}
