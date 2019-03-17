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
 * App\Models\Evento
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $nombre
 * @property int $cupo
 * @property int $inscritos
 * @property string $hora_inicio
 * @property string $duracion
 * @property string|null $requisitos
 * @property string $descripcion
 * @property int $fk_id_tipo_evento
 * @property int $fk_id_ubicacion
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereCupo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereDuracion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereFkIdTipoEvento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereFkIdUbicacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereHoraInicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereInscritos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Evento whereRequisitos($value)
 */
class Evento extends Model
{
    protected $table = "evento";
    public $timestamps = false;
    protected $fillable = [
        "nombre",
        "cupo",
        "inscritos",
        "duracion",
        "requisitos",
        "descripcion",
        "fk_id_tipo_evento",
        "fk_id_ubicacion",
    ];
    protected $dates = [
        "hora_inicio"
    ];

    public static function rules()
    {
        return [
            'nombre' => "required",
            'cupo' => "required|integer",
            'hora_inicio' => "required",
            'duracion' => "required|date_format:H:i",
            'fk_id_ponente' => "required|integer|min:1",
            'fk_id_ubicacion' => "required|integer|min:1",
            'fk_id_tipo_evento' => "required|integer|min:1",
        ];
    }

    public static function messages()
    {
        return [
            '*.required' => "El campo es requerido",
            '*.min' => "El campo es requerido",
            'duracion.date_format' => "Especifique el tiempo en el formato Horas:Minutos ejem. 01:00 ",
            'cupo.integer' => "El valor debe ser entero",
        ];
    }

    public function tienePonentes()
    {
        return $this->belongsToMany(
            Ponente::class,
            'evento_tiene_ponente',
            'fk_id_evento',
            'fk_id_ponente'
        );
    }

    public function ubicacion()
    {
        return $this->belongsTo(
            Ubicacion::class,
            'fk_id_ubicacion',
            'id'
        );
    }

    public function tipoEvento()
    {
        return $this->belongsTo(
            TipoEvento::class,
            'fk_id_tipo_evento',
            'id'
        );
    }
}
