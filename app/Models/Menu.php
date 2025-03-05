<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'icono', 'url', 'tipo', 'orden', 'parent_id', 'estado'];

    public function submenus()
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('orden');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
}
