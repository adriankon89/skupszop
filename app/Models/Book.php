<?php

namespace App\Models;

use App\Enums\BookBindingEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'isbn',
        'title',
        'author_id',
        'binding',
        'released_at',
    ];

    protected $casts = [
        'binding' => BookBindingEnum::class,
        'release_at' => 'date',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
