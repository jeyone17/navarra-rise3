<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $table = 'warehouse_stocks';

    protected $fillable = [
        'rice_type',
        'arrival_date',
        'unit',
        'batch_code',
        'product_code',
        'quantity',
        'qr_code',
    ];
}
