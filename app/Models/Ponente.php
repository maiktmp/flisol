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
 * @property string|null $image_url
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente whereImageUrl($value)
 * @property int $fk_id_patrocinador
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ponente whereFkIdPatrocinador($value)
 * @property-read \App\Models\Patrocinador|null $patrocinador
 */
class Ponente extends Model
{

    protected $table = "ponente";
    protected $fillable = [
        "nombre",
        "correo",
        "telefono",
        "direccion",
        "descripcion",
        "image_url",
        "fk_id_estado",
    ];
    public $timestamps = false;

    public static function rules()
    {
        return [
            "nombre" => 'required',
            "correo" => 'required',
            "telefono" => 'required',
            "fk_id_estado" => 'required'
        ];
    }

    public static function messages()
    {
        return [
            "*.required" => 'El campo es requerido'
        ];
    }

    public function estado()
    {
        return $this->belongsTo(
            Estado::class,
            'fk_id_estado',
            'id'
        );
    }

    public function patrocinador()
    {
        return $this->belongsTo(
            Patrocinador::class,
            'fk_id_patrocinador',
            'id'
        );
    }
}
