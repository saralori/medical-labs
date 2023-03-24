<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Point extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'address',
        'civic_number',
        'city',
        'province',
        'region',
        'created_at',
        'updated_at'
    ];

    public function getPointType(): BelongsTo
    {
        return $this->belongsTo(PointType::class);
    }

    public function getServicePoints(): HasMany
    {
        return $this->hasMany(ServicePoint::class);
    }
}
