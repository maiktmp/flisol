<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 08/02/2019
 * Time: 09:22 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TipoEvento
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TipoEvento newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TipoEvento newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TipoEvento query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $nombre
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TipoEvento whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TipoEvento whereNombre($value)
 */
class TipoEvento extends Model
{

    protected $table = "tipo_evento";
    public $timestamps = false;

    public static function asMap()
    {
        return self::pluck("nombre", "id");
    }
}
