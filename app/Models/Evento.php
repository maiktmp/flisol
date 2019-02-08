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
    protected $table="evento";
}
