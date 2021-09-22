<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = ['company_name','company_adrress',
                           'company_phone','company_email',
                           'company_fax'];
}
