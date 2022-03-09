<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Image;
use App\Models\Note;
use Carbon\Carbon;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

use function PHPSTORM_META\map;

class NoteController extends Controller
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
    if (!Auth::user()->is_admin) {
      return redirect('/dashboard');
    }
    $id = (int) filter_input(INPUT_GET, 'id', FILTER_DEFAULT);

    $client = Client::findOrFail($id);
    // dd($client);
    return view('client.notes.create', ['client' => $client]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  public function store(Request $request)
  {

    // dd(Storage::files());
    // dd($request->all());

    $this->validate($request, [
      'content' => 'required',
      'note_title' => 'required'
    ]);

    // Create Note first, then do images
    Note::create([
      'note_title' => $request->note_title,
      'content' => $request->content,
      'client_id' => $request->client_id
    ]);

    $note = Note::where('client_id', '=', $request->client_id)->latest()->first();

    $date = Carbon::now()->format('m-Y');

    // // File Validations
    if ($request->hasFile('file')) {

      foreach ($request->file('file') as $file) {
        // Create database entry per file uploaded
        $img_path =  "client/$request->client_id/$date/";
        $img_name =  $file->hashName();

        // dd($img_path);
        $image = new Image;

        // dd($test);
        $image->client_id = $request->client_id;
        $image->note_id = $note->id;
        $image->img_name = $img_name;
        $image->img_path = $img_path;
        // $image->img_path = "Hello?";

        // dd($image);
        $image->save();

        $file->storeAs($img_path, $img_name);
      }
    } // end if files



    // All is good, redirect ->withTacos('🌮')
    return redirect()->route('note.create', ['id' => $request->client_id])->withMessage('Successfully added note to client.');
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
    $note = Note::findOrFail($id);

    return view('client.notes.show', ['note' => $note]);
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
    $note = Note::findOrFail($id);
    $note->update($request->all());

    return redirect('dashboard/clients/note/' . $id)->with(['message' => 'Successfully modified note', 'alert-class' => 'alert-info']);

    // dd($request->all());
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
    Note::findOrFail($id)->delete();
    Session::flash('message', 'Successfully deleted note ' . $id . ' from database');
    return redirect('/dashboard/client/' . $request->client_id)->with(['message' => 'Successfully deleted note', 'alert-class' => 'alert-success']);
  }
}
