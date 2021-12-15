<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
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
        'topic_id'
    ];

    /** @return BelongsTo  */
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }
}
