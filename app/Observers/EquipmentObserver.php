<?php

namespace App\Observers;

use App\Models\Equipment;
use App\Services\CacheService\Equipment\CacheEquipment;

class EquipmentObserver
{
    /**
     * Handle the Equipment "created" event.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return void
     */
    public function created(Equipment $equipment)
    {
        (new CacheEquipment())->clearAllEquipmentsFromCache($equipment);
    }

    /**
     * Handle the Equipment "updated" event.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return void
     */
    public function updated(Equipment $equipment)
    {
        (new CacheEquipment())->clearAllEquipmentsFromCache($equipment);
    }

    /**
     * Handle the Equipment "deleted" event.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return void
     */
    public function deleted(Equipment $equipment)
    {
        (new CacheEquipment())->clearAllEquipmentsFromCache($equipment);
    }

    /**
     * Handle the Equipment "restored" event.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return void
     */
    public function restored(Equipment $equipment)
    {
        //
    }

    /**
     * Handle the Equipment "force deleted" event.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return void
     */
    public function forceDeleted(Equipment $equipment)
    {
        //
    }
}
