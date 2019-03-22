<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 08/02/2019
 * Time: 09:23 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Patrocinador
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Patrocinador newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Patrocinador newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Patrocinador query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $r_social
 * @property string $nom_contacto
 * @property string $correo
 * @property string $telefono
 * @property string $image_url
 * @property string $descripcion
 * @property string $url
 * @property int $fk_id_estado
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Patrocinador whereCorreo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Patrocinador whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Patrocinador whereFkIdEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Patrocinador whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Patrocinador whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Patrocinador whereNomContacto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Patrocinador whereRSocial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Patrocinador whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Patrocinador whereUrl($value)
 * @property-read mixed $absolute_image_url
 */
class Patrocinador extends Model
{
    protected $table = "patrocinador";
    public $timestamps = false;
    protected $appends = [
        "absolute_image_url"
    ];

    protected $fillable = [
        "r_social",
        "nom_contacto",
        "correo",
        "telefono",
        "descripcion",
        "url",
        "fk_id_estado",
    ];

    public static function rules()
    {
        return [
            "r_social" => "required",
            "correo" => "required|email",
            "descripcion" => "required",
            "url" => "required",
            "fk_id_estado" => "required",
        ];
    }

    public static function messages()
    {
        return [
            "r_social.required" => "El nombre es requerido",
            "correo.required" => "El correo es requerido",
            "correo.email" => "Imgrese un email válido",
            "image_url.required" => "Ingrese la imágen",
            "image_url.file" => "Imgrese un archivo válido",
            "descripcion.required" => "La descripción es requerida",
            "url.required" => "La url es requerida",
            "fk_id_estado.required" => "El estado es requerido",
        ];
    }

    public static function asMap()
    {
        return self::pluck("r_social", 'id');
    }

    public function getAbsoluteImageUrlAttribute()
    {
        return asset($this->image_url);
    }
}
