<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 08/02/2019
 * Time: 09:25 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Estado
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Institucion[] $instituciones
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Municipio[] $municipios
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Patrocinador[] $patrocinador
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Ponente[] $ponente
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Estado newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Estado newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Estado query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $nombre
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Estado whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Estado whereNombre($value)
 */
class Estado extends Model
{

    protected $table = "estado";

    public function municipios()
    {
        return $this->hasMany(
            Municipio::class,
            'fk_id_estado',
            'id'
        );
    }

    public function instituciones()
    {
        return $this->hasMany(
            Institucion::class,
            'fk_id_estado',
            'id'
        );
    }

    public function ponente()
    {
        return $this->hasMany(
            Ponente::class,
            'fk_id_estado',
            'id'
        );
    }

    public function patrocinador()
    {
        return $this->hasMany(
            Patrocinador::class,
            'fk_id_estado',
            'id'
        );
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public static  function asMap()
    {
        return self::all()->pluck('nombre', 'id');
    }
}
