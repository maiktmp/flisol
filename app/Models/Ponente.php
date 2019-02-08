<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 08/02/2019
 * Time: 09:24 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Ponente
 *
 * @property-read \App\Models\Estado $estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $nombre
 * @property string $correo
 * @property string $telefono
 * @property string $direccion
 * @property string $descripcion
 * @property string $empresa
 * @property string $url
 * @property int $fk_id_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente whereCorreo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente whereEmpresa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente whereFkIdEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente whereUrl($value)
 */
class Ponente extends Model
{

    protected $table = "ponente";
    public $timestamps = false;

    public function estado()
    {
        return $this->belongsTo(
            Estado::class,
            'fk_id_estado',
            'id'
        );
    }
}
