<?php

namespace App\Http\Controllers;

use App\Actions\CreateEquipmentAction;
use App\Actions\UpdateEquipmentAction;
use App\Http\Requests\EquipmentRequest;
use App\Http\Resources\EquipmentResource;
use App\Models\Equipment;
use App\Services\CacheService\Equipment\CacheEquipment;

class EquipmentController extends Controller
{

    public function index(Equipment $equipment, CacheEquipment $cache)
    {
        return new EquipmentResource($cache->cacheAll($equipment));
    }

    public function store(EquipmentRequest $request,
                          CreateEquipmentAction $action)
    {
        return new EquipmentResource($action->execute($request->validated()));
    }

    public function show(Equipment $equipment)
    {
        return new EquipmentResource($equipment);
    }

    public function update(EquipmentRequest $request,
                           UpdateEquipmentAction $action,
                           Equipment $equipment)
    {
        return new EquipmentResource($action->execute($equipment, $request->validated()));
    }

    public function destroy(Equipment $equipment)
    {
        $equipment->destroy($equipment->id);
        return new EquipmentResource($equipment);
    }
}
