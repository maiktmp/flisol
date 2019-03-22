<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 21/03/2019
 * Time: 09:38 PM
 */

namespace App\Models;


use BaconQrCode\Common\Mode;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EventoTieneUsuario
 *
 * @property int $fk_id_usuario
 * @property int $fk_id_evento
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventoTieneUsuario newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventoTieneUsuario newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventoTieneUsuario query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventoTieneUsuario whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventoTieneUsuario whereFkIdEvento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventoTieneUsuario whereFkIdUsuario($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EventoTieneUsuario whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EventoTieneUsuario extends Model
{
    protected $table = "evento_tiene_usuario";
}
