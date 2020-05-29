<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = "contacts";

    protected $primaryKey= 'id';

    protected $fillable= ['name', 'email', 'subject', 'message'];
}
