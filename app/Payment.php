<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Payment extends Model {

    public $table = 'payments';

    const PAYMENT_METHOD_SELECT = [
        'Paystack' => 'Paystack',
    ];

    protected $dates = [
        'paid_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'amount',
        'status',
        'loan_id',
        'user_id',
        'paid_at',
        'reference',
        'created_at',
        'updated_at',
        'deleted_at',
        'payment_type',
        'loan_amount_id',
        'payment_method',
    ];

    protected function serializeDate(DateTimeInterface $date) {
        return $date->format('Y-m-d H:i:s');
    }

    public function loan() {
        return $this->belongsTo(Loan::class, 'loan_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getPaidAtAttribute($value) {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setPaidAtAttribute($value) {
        $this->attributes['paid_at'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}