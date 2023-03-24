<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServicePoint extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $fillable = [
        'service_point_price',
        'active_status',
        'active_status_datetime',
        'created_at',
        'updated_at',
    ];

    public function getService(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function getPoint(): BelongsTo
    {
        return $this->belongsTo(Point::class);
    }
}
