<?php

namespace App\Http\Controllers;

use App\Models\Menulangs;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Menu;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
//       $data['menus'] = Menu::where('id','=',3)->get();                                 //Bununla birlikte ilişkisel tablo bilgileri gelmiiyor
//       $data['menus'] = Menu::where('id','=',3)->with('getParents')->get();                 //Bununla birlikte ilişkisel tablo bilgileri geliyor
//       $data['menus'] = Menu::whereMenu_id(null)->get();
//       dump($data["menus"]);

//        $data['menus'] = Menu::with(['getMenulang','getParent'])->get();  //Bununla birlikte ilişkisel tablo bilgileri gelmiyor
//
       $data['menulangs'] = Menulangs::all();
        return view('welcome',$data);

    }
}
