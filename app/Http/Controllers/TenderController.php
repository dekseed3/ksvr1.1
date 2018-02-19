<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;
use App\CateTender;
use App\User;
use DB;
use Session;
use Hash;
use Input;
use Storage;
use Illuminate\Foundation\Http\FormRequest;

class TenderController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tenders = Tender::orderBy('id', 'desc')->paginate(10);

      return view('manage_website.tender.index')->withTenders($tenders);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate_tenders = CateTender::all();

        return view('manage_website.tender.create')->withCate_tenders($cate_tenders);
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
        'name' => 'required|max:255',
        // 'description' => 'required|max:3000',
        'cate_tenders' => 'required|integer',
        'file' => 'required|mimes:pdf',
      ));


      if(!$request->hasFile('file') && !$request->file('file')->isValid()) {
            return abort(404, 'ไม่สามารถอัพโหลดไฟล์นี้ได้');
      }
      $file = $request->file('file');

      $filename = $file->getClientOriginalName();

      $extension = $file->getClientOriginalExtension();
      $fileName = rand(11111, 99999) . '.' . $extension;


      $request->file->move(base_path('../files'), $fileName);
      $tender = new Tender;

      $tender->name = $request->name;
      $tender->description = $request->name;
      $tender->cate_tender_id = $request->cate_tenders;
      $tender->user_id = $request->user()->id;
      $tender->filename = $filename;
      $tender->file = $fileName;

            $tender->save();
            return redirect()->route('tenders.index')->with(['message' => 'เพิ่มข้อมูลเรียบร้อย!']);
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
      $tenders = Tender::find($id);
      $cate_tenders = CateTender::all();

      return view('manage_website.tender.edit')->withTenders($tenders)->withCate_tenders($cate_tenders);
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

      $this->validate($request, array(
        'name' => 'required|max:255',
        // 'description' => 'required|max:3000',
        'cate_tenders' => 'required|integer'
      ));

      $tender = Tender::find($id);

      if($request->hasFile('file')) {

        $this->validate($request, array(
          'file' => 'required|mimes:pdf'
        ));
              $oldFile = $tender->file;
              Storage::delete($oldFile);



              $file = $request->file('file');

              $filename = $file->getClientOriginalName();

              $extension = $file->getClientOriginalExtension();
              $fileName = rand(11111, 99999) . '.' . $extension;
              $request->file->move(base_path('../files'), $fileName);

              $tender->filename = $filename;
              $tender->file = $fileName;
      }


      $tender->name = $request->name;
      $tender->description = $request->name;
      $tender->cate_tender_id = $request->cate_tenders;
      // $tender->user_id = $request->user()->id;



            $tender->save();
            return redirect()->route('tenders.index')->with(['message' => 'ปรับปรุงข้อมูลเรียบร้อย!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $tenders = Tender::find($id);
      $oldFile = $tenders->file;
      Storage::delete($oldFile);
    //  $ten = CateTender::findOrFail($id);
    //CateTender::where('id', $id)->forcedelete();
      $tenders->delete();

     return redirect()->route('tenders.index');
    }
}
