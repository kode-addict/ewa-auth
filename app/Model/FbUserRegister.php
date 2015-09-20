<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FbUserRegister extends Model
{
    //
    protected $table = "fbusers";
    protected $fillable = [
	 'name',
	 'email',
	 'avatar'];
}
