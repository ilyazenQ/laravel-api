<?php

namespace App\Actions;

use App\Models\Equipment;
use Illuminate\Support\Arr;

class CreateEquipmentAction
{
    public function execute(array $fields)
    {
        return Equipment::create(Arr::only($fields, Equipment::FILLABLE));
    }
}
