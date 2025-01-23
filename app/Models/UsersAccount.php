<?php

namespace App\Models;

/*use Illuminate\Database\Eloquent\Factories\HasFactory;*/
use Illuminate\Database\Eloquent\Model;

class UsersAccount extends Model
{
    /*use HasFactory;*/
    protected $table = 'users_account';
    protected $primaryKey = 'username';
    public $incrementing = false;
    protected $fillable = [
        'username', 'password', 'nama_lengkap', 'tanggal_lahir', 'alamat', 'negara', 'kota'
    ];
}
