<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['name','menu_id'];

    public function getParent ()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }

    public function getMenulang()
    {
        return $this->hasMany(Menulangs::class,'menuid','id');
    }

}
