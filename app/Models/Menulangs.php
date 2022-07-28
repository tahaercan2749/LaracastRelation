<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menulangs extends Model
{
    use HasFactory,SoftDeletes;

    public function parentMenu()
    {
        return $this->belongsTo(Menu::class,'menuid','id');
    }

    public function getPage()
    {
        return $this->hasOne(Menupages::class,'menulangid','id');
    }

}
