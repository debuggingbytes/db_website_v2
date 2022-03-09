<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NotesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    $id = (int) filter_input(INPUT_GET, 'id', FILTER_DEFAULT);

    $client = Clients::findOrFail($id);
    return view('notes.create', ['client' => $client]);
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
    $this->validate($request, [
      'content' => 'required',
    ]);

    Notes::create([
      'content' => $request->content,
      'client_id' => $request->client_id
    ]);
    return redirect('/client/' . $request->client_id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */



  public function show($id)
  {
    //
    $note = Notes::findOrFail($id);

    return view('notes', ['note' => $note]);
  }




  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */




  public function edit($id)
  {
    //
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */



  public function update(Request $request, $id)
  {
    // Update note based off ID
    $note = Notes::findOrFail($id);
    $note->update($request->all());

    Session::flash('message', 'Successfully saved note');

    return redirect('/notes/' . $id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */



  public function destroy(Request $request, $id)
  {
    //
    Notes::findOrFail($id)->delete();
    Session::flash('message', 'Successfully deleted note ' . $id . ' from database');
    return redirect('/client/' . $request->client_id);
  }
}
