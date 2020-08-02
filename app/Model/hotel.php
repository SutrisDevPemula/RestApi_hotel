<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class hotel extends Model
{
    //

    use Notifiable;

    protected $fillable = [
        'hotelName', 'alamat', 'telp', 'email', 'fasilitas', 'bintang', 'jml_kamar', 'description'
    ];
}
