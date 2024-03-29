<?php

namespace App\Models;

use App\Models\User;
use App\Models\subscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subs_transaction extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;
    protected $fillable = ['user_id', 'subs_id', 'start_date', 'end_date', 'payment_method', 'amount_paid', 'transaction_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subscription()
    {
        return $this->belongsTo(subscription::class);
    }
}
