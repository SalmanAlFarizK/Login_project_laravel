<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_table extends Authenticatable
{
     public $table = 'Login_users';
     public $primarykey='id';
     public $incrementing= true;
}
