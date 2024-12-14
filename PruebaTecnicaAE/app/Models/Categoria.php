<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $id
 * @property $nom_categoria
 * @property $ind_activo
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleCategoria[] $detalleCategorias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nom_categoria', 'ind_activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleCategorias()
    {
        return $this->hasMany(\App\Models\DetalleCategoria::class, 'id', 'categoria_id');
    }
    
}
