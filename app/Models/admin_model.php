<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_model extends Model
{
    protected $table = 'tbl_admin';
    protected $primaryKey = 'id';
    protected $fillable = ['admin_email','admin_password','admin_name','admin_phone'];
    
}