<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;
use App\CateTender;
use App\User;

class PagesController extends Controller
{

          public function index()
          {

              return view('pages.website.welcome');

          }

          public function blog()
          {

              return view('pages.website.blog.index');

          }

          public function contact()
          {

              return view('pages.website.contact');

          }

          public function tenders()
          {

            $tenders = Tender::orderBy('id', 'desc')->paginate(20);
            return view('pages.website.tenders')->withTenders($tenders);

          }

          public function downloads()
          {

              return view('pages.website.downloads');

          }

          public function jobs()
          {

              return view('pages.website.jobs');

          }
}
