<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb1_admin extends Model
{
    use HasFactory;
    public timestamp=>false;
    protected table=>tb1_admin;
    protected filllable=>['admin_id','admin_email','admin_password','adimn_name','admin_phone'];
}
