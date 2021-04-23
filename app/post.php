<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['email','username','password','confirm_password','first_name','last_name',
    'gender','birthday','marital_status','position','about','mobile_no','website','facebook','twitter','file'];
}
