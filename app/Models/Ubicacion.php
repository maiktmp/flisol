<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 08/02/2019
 * Time: 09:21 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Ubicacion
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ubicacion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ubicacion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ubicacion query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $edificio
 * @property string $aula
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ubicacion whereAula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ubicacion whereEdificio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ubicacion whereId($value)
 */
class Ubicacion extends Model
{
    protected $table = "ubicacion";
    public $timestamps = false;

}
