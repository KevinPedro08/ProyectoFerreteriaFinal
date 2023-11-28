<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Producto extends Model
{
    protected $fillable = ['nombre', 'cantidad', 'precio', 'marca', 'descripcion', 'user_id', 'imagen'];
    use HasFactory;
    use SoftDeletes;

    public function proveedores(){
        return $this->belongsToMany(Proveedor::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucfirst(strtolower($value));
    }
}
