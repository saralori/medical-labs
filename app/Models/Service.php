<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'customer_price',
        'notes',
        'created_at',
        'updated_at',
    ];

    public function getServicePoints(): HasMany
    {
        return $this->hasMany(ServicePoint::class);
    }
}
