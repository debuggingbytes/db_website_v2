<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SendMail extends Controller
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
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
  }
  public function sendMail(Request $request)
  {
    //
    // $valid = $this->validate($request, [
    //   'full_name' => 'required',
    //   'email' => 'required',
    //   'content' => 'required',
    // ]);

    $validator = Validator::make($request->all(), [
      'full_name' => 'required',
      'email' => 'required',
      'content' => 'required',
    ]);
    if ($validator->fails()) {
      return redirect("/#contactus")->withErrors($validator);
    }

    $to = "kris@debuggingbytes.com";
    $headers = "noreply@debuggingbytes.com";
    $headers .= "Reply-To: noreply@jacquelinekurmeychanneling.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $subject = "Yo, you got mail";
    $message = "You have a new email from $request->full_name their email is $request->email, and they said this $request->content";

    mail($to, $subject, $message, $headers);
    return redirect("/#contactus")->withMessage('yo');
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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
