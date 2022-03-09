<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Server;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    if (!Auth::user()->is_admin) {
      return redirect('/dashboard');
    }
    return view('clients');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    return view('client.add_client');
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
    $client = Client::create($request->all());

    $client_id = $client->id;

    User::create([
      'name' => $request->fullName,
      'email' => $request->email,
      'password' => Hash::make('db_user'),
      'is_admin' => false,
      'client_id' => $client_id,
    ]);
    return redirect(route('client.create'))->with(['message' => 'Successfully added new client.']);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Client  $client
   * @return \Illuminate\Http\Response
   */
  public function show(Client $client)
  {
    //
    if (!Auth::user()->is_admin) {
      return redirect(route('dashboard'));
    }
    return view('client', ['id' => $client->id]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Client  $client
   * @return \Illuminate\Http\Response
   */
  public function edit(Client $client)
  {
    $server = Server::findOrFail(1);
    if ($server->twitch) {
      return redirect("/dashboard")->withMessage("Cannot edit users when streaming");
    }
    return view('client.edit_client', ['client' => $client]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Client  $client
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Client $client)
  {
    //
    //
    // echo $id;
    $client->update($request->all());
    // dd($request->all());
    // dd($client);
    return redirect(route('client.edit', $client->id))->with(['message' => 'Successfully modified client']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Client  $client
   * @return \Illuminate\Http\Response
   */
  public function destroy(Client $client)
  {
    $client->delete();
    return redirect(route('client.index'))->with(['message' => 'Deleted client from system']);
    // dd($client->findOrFail($id));
  }
}
