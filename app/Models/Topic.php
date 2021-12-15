<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
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
        'icon',
        'course_id'
    ];

    /** @return BelongsTo  */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function themes()
    {
        return $this->hasMany(Theme::class);
    }
}
