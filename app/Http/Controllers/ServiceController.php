<?php

namespace App\Http\Controllers;

use App\Models\Server;
use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // Pull information from 'server' settings
    $server = Server::findOrFail(1);
    $services = Service::all();

    return view('layouts.service.index', ['server' => $server, 'services' => $services]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    return view('layouts.service.create');
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
    $request->validate([
      'title' => 'required',
      'content' => 'required',
      'link' => 'required',
      'icon' => 'required',
      'is_available' => 'required',
    ]);

    if ($request) {
      $message = service::create($request->all());
      if ($message) {
        return redirect(route('service.store'))->with(['message' => '']);
      }
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\service  $service
   * @return \Illuminate\Http\Response
   */
  public function show(service $service)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\service  $service
   * @return \Illuminate\Http\Response
   */
  public function edit(service $service)
  {
    // print "hi";
    //
    // $service = service::findOrFail($id);
    // dd($service);


    return view('layouts.service.edit', ['service' => $service]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\service  $service
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, service $service)
  {
    //
    $request->validate([
      'title' => 'required',
      'content' => 'required',
      'link' => 'required',
      'icon' => 'required',
      'is_available' => 'required',
    ]);


    $service = service::findOrFail($service->id);
    $service->update($request->all());
    if ($service) {
      return back()->with(['message' => 'Successfully updated service.']);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\service  $service
   * @return \Illuminate\Http\Response
   */
  public function destroy(service $service)
  {
    //
    // dd($service);
    $service->delete();
    return redirect(route('service.index'))->with(['message' => 'Note was deleted']);
  }
}
