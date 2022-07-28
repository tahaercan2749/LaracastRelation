<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Languages;
use App\Models\Menu;
use App\Models\Menulangs;
use App\Models\Menupages;

Route::get('/seed',function (){

    $langs=new Languages;$langs2=new Languages;
    $langs->name = "Türkçe";
    $langs->code = "tr";
    $langs->save();
    $langs2->name = "English";
    $langs2->code = "en";
    $langs2->save();

    $menu1=new Menu;
    $menu1->name="Ana Sayfa";
    $menu1->menu_id=null;

    $menu2=new Menu;
    $menu2->name="Medya";
    $menu2->menu_id=null;

    $menu3=new Menu;
    $menu3->name="Videolar";
    $menu3->menu_id=2;

    $menu1->save();
    $menu2->save();
    $menu3->save();


});

Route::controller(Controller::class)->group(function(){
    Route::get('/','index');
});
