<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nom_producto
 * @property $precio
 * @property $stock
 * @property $ind_activo
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleCategoria[] $detalleCategorias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nom_producto', 'precio', 'stock', 'ind_activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleCategorias()
    {
        return $this->hasMany(\App\Models\DetalleCategoria::class, 'id', 'producto_id');
    }
    
}
