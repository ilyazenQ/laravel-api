<?php

namespace App\Models;

use App\Observers\EquipmentObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    const FILLABLE = ['title','amount'];

    const CACHE_TIME = 3600;
    const CACHE_KEY_FOR_ALL = 'equipments';

    protected $fillable = self::FILLABLE;

    protected array $observers = [
        Equipment::class => [EquipmentObserver::class],
    ];
}
