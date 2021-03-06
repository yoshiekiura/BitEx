<?php

namespace App\Http\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
// Borrar coins, este es el modelo bueno
class Pair extends Model
{
    use Notifiable;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'symbol', 'name', 'min_deposit', 'min_withdrawal', 'fee_withdrawal'
    ];
}
