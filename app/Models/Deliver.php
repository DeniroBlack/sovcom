<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Deliver
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Deliver newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Deliver newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Deliver query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name Название доставки
 * @property string $point_start Пункт отправления
 * @property string $point_end Пункт назначения
 * @property int $type Тип перевозок: 0 - внутренние; 1 - международные
 * @property int $distance Расстояние в километрах
 * @property int $price Цена
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Deliver whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Deliver whereDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Deliver whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Deliver whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Deliver wherePointEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Deliver wherePointStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Deliver wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Deliver whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Deliver whereUpdatedAt($value)
 */
class Deliver extends Model
{
    /**
     * Идентификатор внутреннего типа
     */
    const INNER_TYPE = 0;

    /**
     * Идентификатор внешнего типа
     */
    const OUTSIDE_TYPE = 1;

    /**
     * Цена на внутренние перевозки
     */
    const INNER_PRICE = 3;

    /**
     * Цена на внешние перевозки
     */
    const OUTSIDE_PRICE = 5;


    /**
     * @var string Название таблицы
     */
    protected $table = 'deliver';
}
