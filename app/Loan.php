<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Loan extends Model
{
    use Auditable;

    public $table = 'loans';

    const LOAN_EXIST_SELECT = [
        'Yes' => 'Yes',
        'No'  => 'No',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const REPAYMENT_OPTION_SELECT = [
        'Monthly' => 'Monthly',
        'Bullet'  => 'Bullet',
    ];

    const STATUS_SELECT = [
        'Due'                   => 'Due',
        'Paid'                  => 'Paid',
        'Pending'               => 'Pending',
        'Expired'               => 'Expired',
        'Declined'              => 'Declined',
        'Approved'              => 'Approved',
        'Disbursed'             => 'Disbursed',
        'Fully Paid'            => 'Fully Paid',
        'Partially Paid'        => 'Partially Paid',
        'Awaiting Disbursment'  => 'Awaiting Disbursment',
    ];

    const CUSTOMER_TYPE_SELECT = [
        'New'   => 'New',
        'Old' => 'Old',
    ];

    protected $fillable = [
        'user_id',
        'loan_exist',
        'loan_exist_type',
        'loan_exist_amount',
        'purpose_of_loan',
        'repayment_option',
        'loan_amount',
        'loan_duration',
        'interest',
        'total',
        'viewed',
        'status',
        'customer_type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const LOAN_EXIST_TYPE_SELECT = [
        'Mortgage'      => 'Mortgage',
        'Overdraft'     => 'Overdraft',
        'Business'      => 'Business',
        'Car Loan'      => 'Car Loan',
        'Personal Loan' => 'Personal Loan',
        'Credit Card'   => 'Credit Card',
        'Others'        => 'Others',
    ];

    const PURPOSE_OF_LOAN_SELECT = [
        'Portable Goods'        => 'Portable Goods',
        'Travel/Holiday'        => 'Travel/Holiday',
        'School Fees'           => 'School Fees',
        'Rent'                  => 'Rent',
        'Household Maintenance' => 'Household Maintenance',
        'Fashion'               => 'Fashion',
        'Medical'               => 'Medical',
        'Wedding/Events'        => 'Wedding/Events',
        'Other Expenses'        => 'Other Expenses',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public static function boot()
    {
        parent::boot();
        Loan::observe(new \App\Observers\LoanActionObserver);
    }

    public function loanAmounts()
    {
        return $this->hasMany(LoanAmount::class, 'loan_id', 'id');
    }

    public function loanRepayments()
    {
        return $this->hasMany(LoanRepayment::class, 'loan_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}