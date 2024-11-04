<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseHistory extends Model
{
    use HasFactory;

    protected $table = 'warehouse_history';

    protected $fillable = [
        'warehouse_stocks_id ',
        'previous_value',
        'outbound_quantity',
        'warehouse_stocks_id',
    ];
}
