<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 08/02/2019
 * Time: 09:38 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * App\Models\Institucion
 *
 * @property-read \App\Models\Estado $estado
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Usuario[] $usuarios
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Institucion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Institucion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Institucion query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $nombre
 * @property string $nom_contacto
 * @property string $correo
 * @property string $telefono
 * @property int $fk_id_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Institucion whereCorreo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Institucion whereFkIdEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Institucion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Institucion whereNomContacto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Institucion whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Institucion whereTelefono($value)
 * @property int $fk_id_municipio
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Institucion whereFkIdMunicipio($value)
 * @property-read \App\Models\Municipio $municipio
 */
class Institucion extends Model
{
    protected $table = "institucion";
    public $timestamps = false;

    public function municipio()
    {
        return $this->belongsTo(
            Municipio::class,
            'fk_id_municipio',
            'id'
        );
    }

    public function usuarios()
    {
        return $this->hasMany(
            Usuario::class,
            'fk_id_estado',
            'id'
        );
    }


    public static function asMap($cityId)
    {
        if ($cityId === 0) {
            return new Collection();
        }
        $institutes = self::whereFkIdMunicipio($cityId)
            ->get()
            ->pluck('nombre', 'id');
        $institutes[-1] = "No encuentro mi institución";
        $institutes[0] = "No vengo de ninguna institución";
        return $institutes;
    }

}
