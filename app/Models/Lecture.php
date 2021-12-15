<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'theme_id',
        'content'
    ];

    /** @return BelongsTo  */
    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
}
