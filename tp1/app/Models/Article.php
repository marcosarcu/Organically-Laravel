<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'image_alt',
        'category_id'
    ];

    public const VALIDATE_RULES = [
        'title' => 'required',
        'description' => 'required',
        // category_id is required and can't be 0
        'category_id' => 'required|not_in:0',
    ];

    public const VALIDATE_MESSAGES = [
        'title.required' => 'El título es requerido',
        'description.required' => 'El contenido es requerido',
        'category_id.required' => 'La categoría es requerida',
        'category_id.not_in' => 'La categoría es requerida',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}

