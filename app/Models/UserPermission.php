<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function fee(){
        return $this->hasOne('App\Models\FeeAnLicence', 'id', 'licence_id');
    }
}
