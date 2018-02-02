<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class monControleur extends Controller
{
  public function index()
  {
    return view('welcome');
  }
  public function ingredients()
  {
    return view('ingredients');
  }
  public function recettes()
  {
    return view('recettes');
  }
  public function materiel()
  {
    return view('materiel');
  }
  public function monnayeur()
  {
    return view('monnayeur');
  }

  public function store(Request $request)
  {
      // $data = [
      //     'user' => [
      //       'submit' => $request->input('submit'),
      //       'id' => $request->input('id'),
      //         'prix' => $request->input('prix'),
      //         'sucrePourPHP' => $request->input('sucrePourPHP'),
      //         'monnaieMise' => $request->input('monnaieMise'),
      //     ],
      // ];
//
      $boissons = DB::table('boissons')->get();

      return view('welcome', ["boissons" => $boissons]);
      // return view('welcome', []);
  }

}
