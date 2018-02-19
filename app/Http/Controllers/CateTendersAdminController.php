<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CateTender;

class CateTendersAdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('role:superadministrator|administrator|editor|author|contributor');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // Display a view of all of our categories
    //it will also have a form to create a new category
    $cate_tenders = CateTender::orderBy('id', 'desc')->paginate(10);

    return view('manage.tender.cate_tender.index')->withCate_tenders($cate_tenders);
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
    $this->validate($request, array(
      'name' => 'required|max:255'
    ));

    $tender = new CateTender;

    $tender->name = $request->name;
    $tender->save();

    return redirect()->route('tenders-admin.index');
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
     $tenders = CateTender::find($id);
   //  $ten = CateTender::findOrFail($id);
   //CateTender::where('id', $id)->forcedelete();
     $tenders->delete();

    return redirect()->route('tenders-admin.index');
  }

}
