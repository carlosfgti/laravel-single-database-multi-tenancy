<?php

namespace App\Tenant\Observers;

use Illuminate\Database\Eloquent\Model;

class TenantObserver
{
    protected $tenant;

    
    public function __construct($tenant)
    {
        $this->tenant = $tenant;
    }

    
    public function creating(Model $model)
    {
        $foreignKey = $this->getForeignKey();

        if (!isset($model->{$foreignKey})) {
            $model->setAttribute($foreignKey, $this->tenant->id);
        }
    }

    
    protected function getForeignKey()
    {
        return $this->tenant->getForeignKey();
    }
}