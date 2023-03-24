<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PointType extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];

    public function getPoints(): HasMany
    {
        return $this->hasMany(Point::class);
    }
}
