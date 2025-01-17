<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class CargoBooking extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'booking_cargo';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['departure', 'destination', 'contact_person', 'date', 'width', 'height','depth', 'weight', 'is_danger', 'company', 'phone', 'email', 'status', 'payment_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
