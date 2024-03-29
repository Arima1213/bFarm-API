<?php

namespace App\Models;

use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class inventory extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;
    protected $fillable = [
        'product_id',
        'quantity',
        'location',
        'last_stocked',
        'minimum_stock',
    ];

    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
