<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    return view('portfolio.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    return view('portfolio.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    if ($request->hasFile('portfolio_img')) {

      $file = $request->file('portfolio_img');

      $img_path =  "/uploads/portfolio/";
      $img_name = $file->hashName();
      $file->storeAs($img_path, $img_name, 'public');
    }
    $request->portfolio_img = $img_path . $img_name;

    // dd($request->portfolio_img);


    if ($file) {
      $create = Portfolio::create(
        [
          'portfolio_name' => $request->portfolio_name,
          'portfolio_url' => $request->portfolio_url,
          'portfolio_img' => $img_path . $img_name,
          'portfolio_text' => $request->portfolio_text,
        ]
      );
      if ($create) {
        return back()->withMessage('Tacos');
      } else {
        dd($create);
      }
    } else {
      dd($file);
    }
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
    $portfolio = Portfolio::findorFail($id);
    return view('portfolio.edit', ['portfolio' => $portfolio]);
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
