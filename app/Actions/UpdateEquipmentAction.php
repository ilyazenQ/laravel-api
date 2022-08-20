<?php

namespace App\Actions;

use App\Models\Equipment;
use Illuminate\Support\Arr;

class UpdateEquipmentAction
{
    public function execute(Equipment $equipment, array $fields)
    {
        $equipment->update(Arr::only($fields, Equipment::FILLABLE));
        return $equipment;
    }
}
