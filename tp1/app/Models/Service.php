<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Service
 *
 * @property int $id
 * @property string $name
 * @property string $short_description
 * @property string $description
 * @property string $price
 * @property string $image
 * @property string $image_alt
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereImageAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_description',
        'description',
        'price',
        'image',
        'image_alt'
    ];

    public const VALIDATE_RULES = [
        'name' => 'required',
        'short_description' => 'required',
        'description' => 'required',
        'price' => 'required',
    ];

    public const VALIDATE_MESSAGES = [
        'name.required' => 'El nombre es requerido',
        'short_description.required' => 'La descripción corta es requerida',
        'description.required' => 'La descripción es requerida',
        'price.required' => 'El precio es requerido',
    ];
}
