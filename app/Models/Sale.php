<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// Sale racchiude la vendita del singolo servizio,
// una fattura può essere associata a più sales

class Sale extends Model
{
    use HasFactory;
    use SoftDeletes; 
    
    protected $primaryKey = 'id';
    protected $fillable = [
        'service_amount',
        'created_at',
        'updated_at'
    ];

    public function getInvoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    public function getServicePoint(): BelongsTo
    {
        return $this->belongsTo(ServicePoint::class);
    }
}
