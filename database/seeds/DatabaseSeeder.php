<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->seedStates();
        $this->seedDiscapacidades();
        $this->call(MunicipiosTableSeeder::class);
    }

    public function seedDiscapacidades()
    {
        DB::table('discapacidad')->insert([
            ['nombre' => 'Autismo'],
            ['nombre' => 'Sordera'],
            ['nombre' => 'Intelectuales o mentales'],
            ['nombre' => 'Ceguera'],
            ['nombre' => 'Transtorno del lenguaje'],
            ['nombre' => 'Discapacidad fisica'],
        ]);
    }

    public function seedStates()
    {
        DB::table('estado')->insert([
            ["id" => '1', "nombre" => 'Aguascalientes'],
            ["id" => '2', "nombre" => 'Baja California'],
            ["id" => '3', "nombre" => 'Baja California Sur'],
            ["id" => '4', "nombre" => 'Campeche'],
            ["id" => '5', "nombre" => 'Coahuila de Zaragoza'],
            ["id" => '6', "nombre" => 'Colima'],
            ["id" => '7', "nombre" => 'Chiapas'],
            ["id" => '8', "nombre" => 'Chihuahua'],
            ["id" => '9', "nombre" => 'Distrito Federal'],
            ["id" => '10', "nombre" => 'Durango'],
            ["id" => '11', "nombre" => 'Guanajuato'],
            ["id" => '12', "nombre" => 'Guerrero'],
            ["id" => '13', "nombre" => 'Hidalgo'],
            ["id" => '14', "nombre" => 'Jalisco'],
            ["id" => '15', "nombre" => 'México'],
            ["id" => '16', "nombre" => 'Michoacán de Ocampo'],
            ["id" => '17', "nombre" => 'Morelos'],
            ["id" => '18', "nombre" => 'Nayarit'],
            ["id" => '19', "nombre" => 'Nuevo León'],
            ["id" => '20', "nombre" => 'Oaxaca'],
            ["id" => '21', "nombre" => 'Puebla'],
            ["id" => '22', "nombre" => 'Querétaro'],
            ["id" => '23', "nombre" => 'Quintana Roo'],
            ["id" => '24', "nombre" => 'San Luis Potosí'],
            ["id" => '25', "nombre" => 'Sinaloa'],
            ["id" => '26', "nombre" => 'Sonora'],
            ["id" => '27', "nombre" => 'Tabasco'],
            ["id" => '28', "nombre" => 'Tamaulipas'],
            ["id" => '29', "nombre" => 'Tlaxcala'],
            ["id" => '30', "nombre" => 'Veracruz de Ignacio de la Llave'],
            ["id" => '31', "nombre" => 'Yucatán'],
            ["id" => '32', "nombre" => 'Zacatecas'],
        ]);
    }
}
