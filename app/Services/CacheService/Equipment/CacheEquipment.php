<?php

namespace App\Services\CacheService\Equipment;

use App\Models\Equipment;
use Illuminate\Support\Facades\Cache;

class CacheEquipment
{
    public function cacheAll(Equipment $equipment)
    {
        return Cache::remember($equipment::CACHE_KEY_FOR_ALL, $equipment::CACHE_TIME,
            function () use ($equipment) {
                return $equipment->paginate();
            });
    }

    public function clearAllEquipmentsFromCache(Equipment $equipment)
    {
        if(Cache::has($equipment::CACHE_KEY_FOR_ALL)) {
            Cache::forget($equipment::CACHE_KEY_FOR_ALL);
        }
    }
}
