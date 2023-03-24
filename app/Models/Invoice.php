<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'total_price',
        'vat_number',
        'vat_amount',
        'progression_number',
        'sdi',
        'pec',
        'invoice_date',
        'created_at',
        'updated_at'
    ];

    public function getSales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }
}
