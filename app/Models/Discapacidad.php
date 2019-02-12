<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 11/02/2019
 * Time: 09:48 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Discapacidad
 *
 * @property int $id
 * @property string $nombre
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discapacidad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discapacidad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discapacidad query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discapacidad whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discapacidad whereNombre($value)
 * @mixin \Eloquent
 */
class Discapacidad extends Model
{

    protected $table = "discapacidad";

    public static function asMap()
    {
        return self::pluck('nombre', 'id');
    }

}
