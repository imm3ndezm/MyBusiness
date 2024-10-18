<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar en masa.
     *
     * @var array
     */
    protected $fillable = [
        'photo',
        'banner',
        'name',
        'nickname',
        'owner_id',
        'email',
        'description',
        'location',
        'phone',
        'url',
        'tags',
        'status',
    ];

    /**
     * Los atributos que deben ser tratados como fechas.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * El valor predeterminado del atributo 'status'.
     *
     * @var string
     */
    protected $attributes = [
        'status' => 'Pending',
    ];

    /**
     * Convertir 'tags' en un array al acceder.
     *
     * @param  string|null  $value
     * @return array
     */
    public function getTagsAttribute($value)
    {
        return $value ? explode(',', $value) : [];
    }

    /**
     * Convertir un array de 'tags' a string al guardar.
     *
     * @param  array  $value
     * @return void
     */
    public function setTagsAttribute($value)
    {
        $this->attributes['tags'] = implode(',', $value);
    }
}
