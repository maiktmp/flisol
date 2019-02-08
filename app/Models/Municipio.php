<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 08/02/2019
 * Time: 09:25 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * App\Models\Municipio
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Municipio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Municipio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Municipio query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $nombre
 * @property int $fk_id_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Municipio whereFkIdEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Municipio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Municipio whereNombre($value)
 */
class Municipio extends Model
{

    protected $table = "municipio";

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function asMap($stateId)
    {
        if ($stateId === 0) {
            return new Collection();
        }
        return self::whereFkIdEstado($stateId)->get()->pluck('nombre', 'id');
    }
}
