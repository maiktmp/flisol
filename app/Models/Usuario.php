<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 08/02/2019
 * Time: 09:38 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Usuario
 *
 * @property-read \App\Models\Estado $estado
 * @property-read \App\Models\Institucion $institucion
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $nombre
 * @property int $edad
 * @property string $correo
 * @property string $QR
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $fk_id_municipio
 * @property int|null $fk_id_institucion
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereCorreo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereEdad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereFkIdInstitucion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereFkIdMunicipio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereQR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereUpdatedAt($value)
 * @property string|null $QR_url
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereQRUrl($value)
 * @property string|null $app
 * @property string|null $apm
 * @property string|null $sexo
 * @property int|null $fk_id_discapacidad
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereApm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereApp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereFkIdDiscapacidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Usuario whereSexo($value)
 */
class Usuario extends Model
{
    protected $table = "usuario";

    protected $appends = ["full_name"];

    protected $fillable = [
        'nombre',
        'edad',
        'correo',
        'fk_id_municipio',
        'sexo',
        'app',
        'apm',
    ];

    public function estado()
    {
        return $this->belongsTo(
            Estado::class,
            'fk_id_estado',
            'id'
        );
    }

    public function institucion()
    {
        return $this->belongsTo(
            Institucion::class,
            'fk_id_institucion',
            'id'
        );
    }

    public function getFullNameAttribute()
    {
        return $this->nombre . " " . $this->app . " " . $this->apm;
    }

}
