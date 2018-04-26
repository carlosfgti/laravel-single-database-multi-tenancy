<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Tenant\Traits\TenantsTrait;

class Project extends Model
{
	use TenantsTrait;

    protected $fillable = [
        'name'
    ];
}
