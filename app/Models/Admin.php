<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 03/04/2019
 * Time: 10:09 AM
 */

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $table = "admin";
    public $timestamps = false;

}
