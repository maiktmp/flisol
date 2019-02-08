<?php

use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('municipio')->insert([
            'nombre' => 'Aguascalientes',
            'fk_id_estado' => '01',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Asientos',
            'fk_id_estado' => '01',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Calvillo',
            'fk_id_estado' => '01',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cosío',
            'fk_id_estado' => '01',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jesús María',
            'fk_id_estado' => '01',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pabellón de Arteaga',
            'fk_id_estado' => '01',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rincón de Romos',
            'fk_id_estado' => '01',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José de Gracia',
            'fk_id_estado' => '01',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepezalá',
            'fk_id_estado' => '01',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Llano',
            'fk_id_estado' => '01',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco de los Romo',
            'fk_id_estado' => '01',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ensenada',
            'fk_id_estado' => '02',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mexicali',
            'fk_id_estado' => '02',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecate',
            'fk_id_estado' => '02',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tijuana',
            'fk_id_estado' => '02',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Playas de Rosarito',
            'fk_id_estado' => '02',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Comondú',
            'fk_id_estado' => '03',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mulegé',
            'fk_id_estado' => '03',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Paz',
            'fk_id_estado' => '03',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Los Cabos',
            'fk_id_estado' => '03',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Loreto',
            'fk_id_estado' => '03',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Calkiní',
            'fk_id_estado' => '04',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Campeche',
            'fk_id_estado' => '04',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Carmen',
            'fk_id_estado' => '04',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Champotón',
            'fk_id_estado' => '04',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hecelchakán',
            'fk_id_estado' => '04',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hopelchén',
            'fk_id_estado' => '04',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Palizada',
            'fk_id_estado' => '04',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tenabo',
            'fk_id_estado' => '04',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Escárcega',
            'fk_id_estado' => '04',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Calakmul',
            'fk_id_estado' => '04',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Candelaria',
            'fk_id_estado' => '04',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Abasolo',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acuña',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Allende',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Arteaga',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Candela',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Castaños',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuatro Ciénegas',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Escobedo',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Francisco I. Madero',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Frontera',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Cepeda',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guerrero',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hidalgo',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jiménez',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juárez',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lamadrid',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Matamoros',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Monclova',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Morelos',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Múzquiz',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nadadores',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nava',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocampo',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Parras',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Piedras Negras',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Progreso',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ramos Arizpe',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sabinas',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sacramento',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Saltillo',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Buenaventura',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan de Sabinas',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sierra Mojada',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Torreón',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Viesca',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Unión',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zaragoza',
            'fk_id_estado' => '05',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Armería',
            'fk_id_estado' => '06',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Colima',
            'fk_id_estado' => '06',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Comala',
            'fk_id_estado' => '06',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coquimatlán',
            'fk_id_estado' => '06',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuauhtémoc',
            'fk_id_estado' => '06',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtlahuacán',
            'fk_id_estado' => '06',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Manzanillo',
            'fk_id_estado' => '06',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Minatitlán',
            'fk_id_estado' => '06',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecomán',
            'fk_id_estado' => '06',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Álvarez',
            'fk_id_estado' => '06',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acacoyagua',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acala',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acapetahua',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Altamirano',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amatán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amatenango de la Frontera',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amatenango del Valle',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Angel Albino Corzo',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Arriaga',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bejucal de Ocampo',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bella Vista',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Berriozábal',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bochil',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Bosque',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cacahoatán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Catazajá',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cintalapa',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coapilla',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Comitán de Domínguez',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Concordia',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Copainalá',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chalchihuitán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chamula',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chanal',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chapultenango',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chenalhó',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chiapa de Corzo',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chiapilla',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chicoasén',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chicomuselo',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chilón',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Escuintla',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Francisco León',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Frontera Comalapa',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Frontera Hidalgo',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Grandeza',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huehuetán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huixtán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huitiupán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huixtla',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Independencia',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixhuatán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtacomitán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtapa',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtapangajoya',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jiquipilas',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jitotol',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juárez',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Larráinzar',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Libertad',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mapastepec',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Las Margaritas',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mazapa de Madero',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mazatán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Metapa',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mitontic',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Motozintla',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nicolás Ruíz',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocosingo',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocotepec',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocozocoautla de Espinosa',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ostuacán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Osumacinta',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Oxchuc',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Palenque',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pantelhó',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pantepec',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pichucalco',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pijijiapan',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Porvenir',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Comaltitlán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pueblo Nuevo Solistahuacán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rayón',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Reforma',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Las Rosas',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sabanilla',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Salto de Agua',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Cristóbal de las Casas',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Fernando',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Siltepec',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Simojovel',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sitalá',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Socoltenango',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Solosuchiapa',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Soyaló',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Suchiapa',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Suchiate',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sunuapa',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tapachula',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tapalapa',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tapilula',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecpatán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tenejapa',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teopisca',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tila',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tonalá',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Totolapa',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Trinitaria',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tumbalá',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tuxtla Gutiérrez',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tuxtla Chico',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tuzantán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tzimol',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Unión Juárez',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Venustiano Carranza',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Corzo',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villaflores',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yajalón',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lucas',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zinacantán',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Cancuc',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aldama',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Benemérito de las Américas',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Maravilla Tenejapa',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Marqués de Comillas',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Montecristo de Guerrero',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Duraznal',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago el Pinar',
            'fk_id_estado' => '07',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ahumada',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aldama',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Allende',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aquiles Serdán',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ascensión',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bachíniva',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Balleza',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Batopilas',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bocoyna',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Buenaventura',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Camargo',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Carichí',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Casas Grandes',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coronado',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coyame del Sotol',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Cruz',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuauhtémoc',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cusihuiriachi',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chihuahua',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chínipas',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Delicias',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Dr. Belisario Domínguez',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Galeana',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Isabel',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Gómez Farías',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Gran Morelos',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guachochi',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guadalupe',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guadalupe y Calvo',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guazapares',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guerrero',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hidalgo del Parral',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huejotitán',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ignacio Zaragoza',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Janos',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jiménez',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juárez',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Julimes',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'López',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Madera',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Maguarichi',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Manuel Benavides',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Matachí',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Matamoros',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Meoqui',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Morelos',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Moris',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Namiquipa',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nonoava',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nuevo Casas Grandes',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocampo',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ojinaga',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Praxedis G. Guerrero',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Riva Palacio',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rosales',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rosario',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco de Borja',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco de Conchos',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco del Oro',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Bárbara',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Satevó',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Saucillo',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Temósachic',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Tule',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Urique',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Uruachi',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Valle de Zaragoza',
            'fk_id_estado' => '08',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Azcapotzalco',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coyoacán',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuajimalpa de Morelos',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Gustavo A. Madero',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Iztacalco',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Iztapalapa',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Magdalena Contreras',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Milpa Alta',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Álvaro Obregón',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tláhuac',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlalpan',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xochimilco',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Benito Juárez',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuauhtémoc',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Miguel Hidalgo',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Venustiano Carranza',
            'fk_id_estado' => '09',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Canatlán',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Canelas',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coneto de Comonfort',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuencamé',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Durango',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Simón Bolívar',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Gómez Palacio',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guadalupe Victoria',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guanaceví',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hidalgo',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Indé',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lerdo',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mapimí',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mezquital',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nazas',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nombre de Dios',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocampo',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Oro',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Otáez',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pánuco de Coronado',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Peñón Blanco',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Poanas',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pueblo Nuevo',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rodeo',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Bernardo',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Dimas',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan de Guadalupe',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan del Río',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Luis del Cordero',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro del Gallo',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Clara',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Papasquiaro',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Súchil',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tamazula',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepehuanes',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlahualilo',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Topia',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Vicente Guerrero',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nuevo Ideal',
            'fk_id_estado' => '10',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Abasolo',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acámbaro',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel de Allende',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Apaseo el Alto',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Apaseo el Grande',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atarjea',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Celaya',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Manuel Doblado',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Comonfort',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coroneo',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cortazar',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuerámaro',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Doctor Mora',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Dolores Hidalgo Cuna de la Independencia Nacional',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guanajuato',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huanímaro',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Irapuato',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jaral del Progreso',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jerécuaro',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'León',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Moroleón',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocampo',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pénjamo',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pueblo Nuevo',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Purísima del Rincón',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Romita',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Salamanca',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Salvatierra',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Diego de la Unión',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Felipe',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco del Rincón',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José Iturbide',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Luis de la Paz',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz de Juventino Rosas',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Maravatío',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Silao de la Victoria',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tarandacuao',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tarimoro',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tierra Blanca',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Uriangato',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Valle de Santiago',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Victoria',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villagrán',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xichú',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yuriria',
            'fk_id_estado' => '11',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acapulco de Juárez',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ahuacuotzingo',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ajuchitlán del Progreso',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Alcozauca de Guerrero',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Alpoyeca',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Apaxtla',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Arcelia',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atenango del Río',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atlamajalcingo del Monte',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atlixtac',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atoyac de Álvarez',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ayutla de los Libres',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Azoyú',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Benito Juárez',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Buenavista de Cuéllar',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coahuayutla de José María Izazaga',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cocula',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Copala',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Copalillo',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Copanatoyac',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coyuca de Benítez',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coyuca de Catalán',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuajinicuilapa',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cualác',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuautepec',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuetzala del Progreso',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cutzamala de Pinzón',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chilapa de Álvarez',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chilpancingo de los Bravo',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Florencio Villarreal',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Canuto A. Neri',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Heliodoro Castillo',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huamuxtitlán',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huitzuco de los Figueroa',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Iguala de la Independencia',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Igualapa',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixcateopan de Cuauhtémoc',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zihuatanejo de Azueta',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juan R. Escudero',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Leonardo Bravo',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Malinaltepec',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mártir de Cuilapan',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Metlatónoc',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mochitlán',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Olinalá',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ometepec',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pedro Ascencio Alquisiras',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Petatlán',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pilcaya',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pungarabato',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Quechultenango',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Luis Acatlán',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Marcos',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Totolapan',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Taxco de Alarcón',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecoanapa',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Técpan de Galeana',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teloloapan',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepecoacuilco de Trujano',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tetipac',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tixtla de Guerrero',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlacoachistlahuaca',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlacoapa',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlalchapa',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlalixtaquilla de Maldonado',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlapa de Comonfort',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlapehuala',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Unión de Isidoro Montes de Oca',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xalpatláhuac',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xochihuehuetlán',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xochistlahuaca',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zapotitlán Tablas',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zirándaro',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zitlala',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Eduardo Neri',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acatepec',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Marquelia',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cochoapa el Grande',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'José Joaquín de Herrera',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juchitán',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Iliatenco',
            'fk_id_estado' => '12',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acatlán',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acaxochitlán',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Actopan',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Agua Blanca de Iturbide',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ajacuba',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Alfajayucan',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Almoloya',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Apan',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Arenal',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atitalaquia',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atlapexco',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atotonilco el Grande',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atotonilco de Tula',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Calnali',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cardonal',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuautepec de Hinojosa',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chapantongo',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chapulhuacán',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chilcuautla',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Eloxochitlán',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Emiliano Zapata',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Epazoyucan',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Francisco I. Madero',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huasca de Ocampo',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huautla',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huazalingo',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huehuetla',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huejutla de Reyes',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huichapan',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixmiquilpan',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jacala de Ledezma',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jaltocán',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juárez Hidalgo',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lolotla',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Metepec',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Agustín Metzquititlán',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Metztitlán',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mineral del Chico',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mineral del Monte',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Misión',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mixquiahuala de Juárez',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Molango de Escamilla',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nicolás Flores',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nopala de Villagrán',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Omitlán de Juárez',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Felipe Orizatlán',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pacula',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pachuca de Soto',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pisaflores',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Progreso de Obregón',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mineral de la Reforma',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Agustín Tlaxiaca',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Bartolo Tutotepec',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Salvador',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago de Anaya',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Tulantepec de Lugo Guerrero',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Singuilucan',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tasquillo',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecozautla',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tenango de Doria',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepeapulco',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepehuacán de Guerrero',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepeji del Río de Ocampo',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepetitlán',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tetepango',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Tezontepec',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tezontepec de Aldama',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tianguistengo',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tizayuca',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlahuelilpan',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlahuiltepa',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlanalapa',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlanchinol',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlaxcoapan',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tolcayuca',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tula de Allende',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tulancingo de Bravo',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xochiatipan',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xochicoatlán',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yahualica',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacualtipán de Ángeles',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zapotlán de Juárez',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zempoala',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zimapán',
            'fk_id_estado' => '13',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acatic',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acatlán de Juárez',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ahualulco de Mercado',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amacueca',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amatitán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ameca',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juanito de Escobedo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Arandas',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Arenal',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atemajac de Brizuela',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atengo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atenguillo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atotonilco el Alto',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atoyac',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Autlán de Navarro',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ayotlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ayutla',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Barca',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bolaños',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cabo Corrientes',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Casimiro Castillo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cihuatlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zapotlán el Grande',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cocula',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Colotlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Concepción de Buenos Aires',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuautitlán de García Barragán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuautla',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuquío',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chapala',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chimaltitán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chiquilistlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Degollado',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ejutla',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Encarnación de Díaz',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Etzatlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Grullo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guachinango',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guadalajara',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hostotipaquillo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huejúcar',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huejuquilla el Alto',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Huerta',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtlahuacán de los Membrillos',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtlahuacán del Río',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jalostotitlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jamay',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jesús María',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jilotlán de los Dolores',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jocotepec',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juanacatlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juchitlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lagos de Moreno',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Limón',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María del Oro',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Manzanilla de la Paz',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mascota',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mazamitla',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mexticacán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mezquitic',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mixtlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocotlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ojuelos de Jalisco',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pihuamo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Poncitlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Puerto Vallarta',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Purificación',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Quitupan',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Salto',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Cristóbal de la Barranca',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Diego de Alejandría',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan de los Lagos',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Julián',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Marcos',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín de Bolaños',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín Hidalgo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel el Alto',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Gómez Farías',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Sebastián del Oeste',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María de los Ángeles',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sayula',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tala',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Talpa de Allende',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tamazula de Gordiano',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tapalpa',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecalitlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecolotlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Techaluta de Montenegro',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tenamaxtlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teocaltiche',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teocuitatlán de Corona',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepatitlán de Morelos',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tequila',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teuchitlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tizapán el Alto',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlajomulco de Zúñiga',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Tlaquepaque',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tolimán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tomatlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tonalá',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tonaya',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tonila',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Totatiche',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tototlán',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tuxcacuesco',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tuxcueca',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tuxpan',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Unión de San Antonio',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Unión de Tula',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Valle de Guadalupe',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Valle de Juárez',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Gabriel',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Corona',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Guerrero',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Hidalgo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cañadas de Obregón',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yahualica de González Gallo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacoalco de Torres',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zapopan',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zapotiltic',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zapotitlán de Vadillo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zapotlán del Rey',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zapotlanejo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Ignacio Cerro Gordo',
            'fk_id_estado' => '14',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acambay de Ruíz Castañeda',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acolman',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aculco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Almoloya de Alquisiras',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Almoloya de Juárez',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Almoloya del Río',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amanalco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amatepec',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amecameca',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Apaxco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atenco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atizapán',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atizapán de Zaragoza',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atlacomulco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atlautla',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Axapusco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ayapango',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Calimaya',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Capulhuac',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coacalco de Berriozábal',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coatepec Harinas',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cocotitlán',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coyotepec',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuautitlán',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chalco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chapa de Mota',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chapultepec',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chiautla',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chicoloapan',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chiconcuac',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chimalhuacán',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Donato Guerra',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ecatepec de Morelos',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ecatzingo',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huehuetoca',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hueypoxtla',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huixquilucan',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Isidro Fabela',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtapaluca',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtapan de la Sal',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtapan del Oro',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtlahuaca',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xalatlaco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jaltenco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jilotepec',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jilotzingo',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jiquipilco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jocotitlán',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Joquicingo',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juchitepec',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lerma',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Malinalco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Melchor Ocampo',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Metepec',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mexicaltzingo',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Morelos',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Naucalpan de Juárez',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nezahualcóyotl',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nextlalpan',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nicolás Romero',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nopaltepec',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocoyoacac',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocuilan',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Oro',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Otumba',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Otzoloapan',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Otzolotepec',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ozumba',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Papalotla',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Paz',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Polotitlán',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rayón',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Antonio la Isla',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Felipe del Progreso',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín de las Pirámides',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Mateo Atenco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Simón de Guerrero',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Tomás',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Soyaniquilpan de Juárez',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sultepec',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecámac',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tejupilco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Temamatla',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Temascalapa',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Temascalcingo',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Temascaltepec',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Temoaya',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tenancingo',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tenango del Aire',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tenango del Valle',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teoloyucan',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teotihuacán',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepetlaoxtoc',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepetlixpa',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepotzotlán',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tequixquiac',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Texcaltitlán',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Texcalyacac',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Texcoco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tezoyuca',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tianguistenco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Timilpan',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlalmanalco',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlalnepantla de Baz',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlatlaya',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Toluca',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tonatico',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tultepec',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tultitlán',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Valle de Bravo',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Allende',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa del Carbón',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Guerrero',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Victoria',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xonacatlán',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacazonapan',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacualpan',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zinacantepec',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zumpahuacán',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zumpango',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuautitlán Izcalli',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Valle de Chalco Solidaridad',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Luvianos',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José del Rincón',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tonanitla',
            'fk_id_estado' => '15',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acuitzio',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aguililla',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Álvaro Obregón',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Angamacutiro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Angangueo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Apatzingán',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aporo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aquila',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ario',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Arteaga',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Briseñas',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Buenavista',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Carácuaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coahuayana',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coalcomán de Vázquez Pallares',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coeneo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Contepec',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Copándaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cotija',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuitzeo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Charapan',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Charo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chavinda',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cherán',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chilchota',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chinicuila',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chucándiro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Churintzio',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Churumuco',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ecuandureo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Epitacio Huerta',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Erongarícuaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Gabriel Zamora',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hidalgo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Huacana',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huandacareo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huaniqueo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huetamo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huiramba',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Indaparapeo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Irimbo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtlán',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jacona',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jiménez',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jiquilpan',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juárez',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jungapeo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lagunillas',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Madero',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Maravatío',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Marcos Castellanos',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lázaro Cárdenas',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Morelia',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Morelos',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Múgica',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nahuatzen',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nocupétaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nuevo Parangaricutiro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nuevo Urecho',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Numarán',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocampo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pajacuarán',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Panindícuaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Parácuaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Paracho',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pátzcuaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Penjamillo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Peribán',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Piedad',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Purépero',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Puruándiro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Queréndaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Quiroga',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cojumatlán de Régules',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Los Reyes',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sahuayo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lucas',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Ana Maya',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Salvador Escalante',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Senguio',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Susupuato',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tacámbaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tancítaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tangamandapio',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tangancícuaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tanhuato',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Taretan',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tarímbaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepalcatepec',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tingambato',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tingüindín',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tiquicheo de Nicolás Romero',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlalpujahua',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlazazalca',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tocumbo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tumbiscatío',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Turicato',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tuxpan',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tuzantla',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tzintzuntzan',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tzitzio',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Uruapan',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Venustiano Carranza',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villamar',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Vista Hermosa',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yurécuaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacapu',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zamora',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zináparo',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zinapécuaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ziracuaretiro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zitácuaro',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'José Sixto Verduzco',
            'fk_id_estado' => '16',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amacuzac',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atlatlahucan',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Axochiapan',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ayala',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coatlán del Río',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuautla',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuernavaca',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Emiliano Zapata',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huitzilac',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jantetelco',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jiutepec',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jojutla',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jonacatepec',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mazatepec',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Miacatlán',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocuituco',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Puente de Ixtla',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Temixco',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepalcingo',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepoztlán',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tetecala',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tetela del Volcán',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlalnepantla',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlaltizapán de Zapata',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlaquiltenango',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlayacapan',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Totolapan',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xochitepec',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yautepec',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yecapixtla',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacatepec',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacualpan de Amilpas',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Temoac',
            'fk_id_estado' => '17',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acaponeta',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ahuacatlán',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amatlán de Cañas',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Compostela',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huajicori',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtlán del Río',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jala',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xalisco',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Del Nayar',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rosamorada',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ruíz',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Blas',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Lagunillas',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María del Oro',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Ixcuintla',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecuala',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepic',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tuxpan',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Yesca',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bahía de Banderas',
            'fk_id_estado' => '18',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Abasolo',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Agualeguas',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Los Aldamas',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Allende',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Anáhuac',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Apodaca',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aramberri',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bustamante',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cadereyta Jiménez',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Carmen',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cerralvo',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ciénega de Flores',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'China',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Doctor Arroyo',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Doctor Coss',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Doctor González',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Galeana',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'García',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Garza García',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Bravo',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Escobedo',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Terán',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Treviño',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Zaragoza',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Zuazua',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guadalupe',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Los Herreras',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Higueras',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hualahuises',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Iturbide',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juárez',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lampazos de Naranjo',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Linares',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Marín',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Melchor Ocampo',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mier y Noriega',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mina',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Montemorelos',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Monterrey',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Parás',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pesquería',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Los Ramones',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rayones',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sabinas Hidalgo',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Salinas Victoria',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Nicolás de los Garza',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hidalgo',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Vallecillo',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villaldama',
            'fk_id_estado' => '19',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Abejones',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acatlán de Pérez Figueroa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Asunción Cacalotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Asunción Cuyotepeji',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Asunción Ixtaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Asunción Nochixtlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Asunción Ocotlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Asunción Tlacolulita',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ayotzintepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Barrio de la Soledad',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Calihualá',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Candelaria Loxicha',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ciénega de Zimatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ciudad Ixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coatecas Altas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coicoyán de las Flores',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Compañía',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Concepción Buenavista',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Concepción Pápalo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Constancia del Rosario',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cosolapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cosoltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuilápam de Guerrero',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuyamecalco Villa de Zaragoza',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chahuites',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chalcatongo de Hidalgo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chiquihuitlán de Benito Juárez',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Heroica Ciudad de Ejutla de Crespo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Eloxochitlán de Flores Magón',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Espinal',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tamazulápam del Espíritu Santo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Fresnillo de Trujano',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guadalupe Etla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guadalupe de Ramírez',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guelatao de Juárez',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guevea de Humboldt',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mesones Hidalgo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Hidalgo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Heroica Ciudad de Huajuapan de León',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huautepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huautla de Jiménez',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtlán de Juárez',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Heroica Ciudad de Juchitán de Zaragoza',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Loma Bonita',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena Apasco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena Jaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Magdalena Jicotlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena Mixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena Ocotlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena Peñasco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena Teitipac',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena Tequisistlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena Tlacotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena Zahuatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mariscala de Juárez',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mártires de Tacubaya',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Matías Romero Avendaño',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mazatlán Villa de Flores',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Miahuatlán de Porfirio Díaz',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mixistlán de la Reforma',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Monjas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Natividad',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nazareno Etla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nejapa de Madero',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixpantepec Nieves',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Niltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Oaxaca de Juárez',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocotlán de Morelos',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Pe',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pinotepa de Don Luis',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pluma Hidalgo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José del Progreso',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Putla Villa de Guerrero',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Quioquitani',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Reforma de Pineda',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Reforma',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Reyes Etla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rojas de Cuauhtémoc',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Salina Cruz',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Agustín Amatengo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Agustín Atenango',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Agustín Chayuco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Agustín de las Juntas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Agustín Etla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Agustín Loxicha',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Agustín Tlacotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Agustín Yatareni',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Cabecera Nueva',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Dinicuiti',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Huaxpaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Huayápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Ixtlahuaca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Lagunas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Nuxiño',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Paxtlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Sinaxtla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Solaga',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Teotilálpam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Tepetlapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Yaá',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Zabache',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Zautla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Antonino Castillo Velasco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Antonino el Alto',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Antonino Monte Verde',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Antonio Acutla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Antonio de la Cal',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Antonio Huitepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Antonio Nanahuatípam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Antonio Sinicahua',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Antonio Tepetlapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Baltazar Chichicápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Baltazar Loxicha',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Baltazar Yatzachi el Bajo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Bartolo Coyotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Bartolomé Ayautla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Bartolomé Loxicha',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Bartolomé Quialana',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Bartolomé Yucuañe',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Bartolomé Zoogocho',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Bartolo Soyaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Bartolo Yautepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Bernardo Mixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Blas Atempa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Carlos Yautepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Cristóbal Amatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Cristóbal Amoltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Cristóbal Lachirioag',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Cristóbal Suchixtlahuaca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Dionisio del Mar',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Dionisio Ocotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Dionisio Ocotlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Esteban Atatlahuca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Felipe Jalapa de Díaz',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Felipe Tejalápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Felipe Usila',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Cahuacuá',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Cajonos',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Chapulapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Chindúa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco del Mar',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Huehuetlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Ixhuatán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Jaltepetongo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Lachigoló',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Logueche',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Nuxaño',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Ozolotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Sola',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Telixtlahuaca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Teopan',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Tlapancingo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Gabriel Mixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Ildefonso Amatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Ildefonso Sola',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Ildefonso Villa Alta',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Jacinto Amilpas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Jacinto Tlacotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Jerónimo Coatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Jerónimo Silacayoapilla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Jerónimo Sosola',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Jerónimo Taviche',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Jerónimo Tecóatl',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Jorge Nuchita',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José Ayuquila',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José Chiltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José del Peñasco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José Estancia Grande',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José Independencia',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José Lachiguiri',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José Tenango',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Achiutla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Atepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ánimas Trujano',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Bautista Atatlahuca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Bautista Coixtlahuaca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Bautista Cuicatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Bautista Guelache',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Bautista Jayacatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Bautista Lo de Soto',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Bautista Suchitepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Bautista Tlacoatzintepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Bautista Tlachichilco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Bautista Tuxtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Cacahuatepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Cieneguilla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Coatzóspam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Colorado',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Comaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Cotzocón',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Chicomezúchil',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Chilateca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan del Estado',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan del Río',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Diuxi',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Evangelista Analco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Guelavía',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Guichicovi',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Ihualtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Juquila Mixes',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Juquila Vijanos',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Lachao',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Lachigalla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Lajarcia',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Lalana',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan de los Cués',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Mazatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Mixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Mixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Ñumí',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Ozolotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Petlapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Quiahije',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Quiotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Sayultepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Tabaá',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Tamazola',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Teita',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Teitipac',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Tepeuxila',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Teposcolula',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Yaeé',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Yatzona',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Yucuita',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lorenzo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lorenzo Albarradas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lorenzo Cacaotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lorenzo Cuaunecuiltitla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lorenzo Texmelúcan',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lorenzo Victoria',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lucas Camotlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lucas Ojitlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lucas Quiaviní',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lucas Zoquiápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Luis Amatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Marcial Ozolotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Marcos Arteaga',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín de los Cansecos',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín Huamelúlpam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín Itunyoso',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín Lachilá',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín Peras',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín Tilcajete',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín Toxpalan',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín Zacatepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Mateo Cajonos',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Capulálpam de Méndez',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Mateo del Mar',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Mateo Yoloxochitlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Mateo Etlatongo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Mateo Nejápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Mateo Peñasco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Mateo Piñas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Mateo Río Hondo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Mateo Sindihui',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Mateo Tlapiltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Melchor Betaza',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Achiutla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Ahuehuetitlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Aloápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Amatitlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Amatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Coatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Chicahua',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Chimalapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel del Puerto',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel del Río',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Ejutla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel el Grande',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Huautla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Mixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Panixtlahuaca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Peras',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Piedras',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Quetzaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Santa Flor',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Sola de Vega',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Soyaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Suchixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Talea de Castro',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Tecomatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Tenango',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Tequixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Tilquiápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Tlacamama',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Tlacotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Tulancingo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Yotao',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Nicolás',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Nicolás Hidalgo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pablo Coatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pablo Cuatro Venados',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pablo Etla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pablo Huitzo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pablo Huixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pablo Macuiltianguis',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pablo Tijaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pablo Villa de Mitla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pablo Yaganiza',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Amuzgos',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Apóstol',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Atoyac',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Cajonos',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Coxcaltepec Cántaros',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Comitancillo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro el Alto',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Huamelula',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Huilotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Ixcatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Ixtlahuaca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Jaltepetongo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Jicayán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Jocotipac',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Juchatengo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Mártir',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Mártir Quiechapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Mártir Yucuxaco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Mixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Mixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Molinos',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Nopala',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Ocopetatillo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Ocotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Pochutla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Quiatoni',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Sochiápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Tapanatepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Taviche',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Teozacoalco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Teutila',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Tidaá',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Topiltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Totolápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Tututepec de Melchor Ocampo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Yaneri',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Yólox',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro y San Pablo Ayutla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Etla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro y San Pablo Teposcolula',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro y San Pablo Tequixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Yucunama',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Raymundo Jalpan',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Sebastián Abasolo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Sebastián Coatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Sebastián Ixcapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Sebastián Nicananduta',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Sebastián Río Hondo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Sebastián Tecomaxtlahuaca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Sebastián Teitipac',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Sebastián Tutla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Simón Almolongas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Simón Zahuatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Ana',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Ana Ateixtlahuaca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Ana Cuauhtémoc',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Ana del Valle',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Ana Tavela',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Ana Tlapacoyan',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Ana Yareni',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Ana Zegache',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catalina Quierí',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Cuixtla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Ixtepeji',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Juquila',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Lachatao',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Loxicha',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Mechoacán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Minas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Quiané',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Tayata',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Ticuá',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Yosonotú',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Zapoquila',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Acatepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Amilpas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz de Bravo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Itundujia',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Mixtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Nundaco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Papalutla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Tacache de Mina',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Tacahua',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Tayata',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Xitla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Xoxocotlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Zenzontepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Gertrudis',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Inés del Monte',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Inés Yatzeche',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Lucía del Camino',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Lucía Miahuatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Lucía Monteverde',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Lucía Ocotlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Alotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Apazco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María la Asunción',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Heroica Ciudad de Tlaxiaco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ayoquezco de Aldama',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Atzompa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Camotlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Colotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Cortijo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Coyotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Chachoápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Chilapa de Díaz',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Chilchotla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Chimalapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María del Rosario',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María del Tule',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Ecatepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Guelacé',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Guienagati',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Huatulco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Huazolotitlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Ipalapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Ixcatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Jacatepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Jalapa del Marqués',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Jaltianguis',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Lachixío',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Mixtequilla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Nativitas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Nduayaco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Ozolotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Pápalo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Peñoles',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Petapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Quiegolani',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Sola',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Tataltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Tecomavaca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Temaxcalapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Temaxcaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Teopoxco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Tepantlali',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Texcatitlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Tlahuitoltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Tlalixtac',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Tonombreca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Totolapilla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Xadani',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Yalina',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Yavesía',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Yolotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Yosoyúa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Yucuhiti',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Zacatepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Zaniza',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María Zoquitlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Amoltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Apoala',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Apóstol',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Astata',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Atitlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Ayuquililla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Cacaloxtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Camotlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Comaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Chazumba',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Choápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago del Río',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Huajolotitlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Huauclilla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Ihuitlán Plumas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Ixcuintepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Ixtayutla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Jamiltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Jocotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Juxtlahuaca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Lachiguiri',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Lalopa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Laollaga',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Laxopa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Llano Grande',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Matatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Miltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Minas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Nacaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Nejapilla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Nundiche',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Nuyoó',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Pinotepa Nacional',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Suchilquitongo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Tamazola',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Tapextla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Tejúpam de la Unión',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Tenango',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Tepetlapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Tetepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Texcalcingo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Textitlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Tilantongo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Tillo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Tlazoyaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Xanica',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Xiacuí',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Yaitepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Yaveo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Yolomécatl',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Yosondúa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Yucuyachi',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Zacatepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Zoochila',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nuevo Zoquiápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Ingenio',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Albarradas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Armenta',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Chihuitán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo de Morelos',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Ixcatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Nuxaá',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Ozolotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Petapa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Roayaga',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Tehuantepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Teojomulco',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Tepuxtepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Tlatayápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Tomaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Tonalá',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Tonaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Xagacía',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Yanhuitlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Yodohino',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo Zanatepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santos Reyes Nopala',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santos Reyes Pápalo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santos Reyes Tepejillo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santos Reyes Yucuná',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Tomás Jalieza',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Tomás Mazaltepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Tomás Ocotepec',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Tomás Tamazulapan',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Vicente Coatlán',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Vicente Lachixío',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Vicente Nuñú',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Silacayoápam',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sitio de Xitlapehua',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Soledad Etla',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Tamazulápam del Progreso',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tanetze de Zaragoza',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Taniche',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tataltepec de Valdés',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teococuilco de Marcos Pérez',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teotitlán de Flores Magón',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teotitlán del Valle',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teotongo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepelmeme Villa de Morelos',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Heroica Villa Tezoatlán de Segura y Luna. Cuna de la Independencia de Oaxaca',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Jerónimo Tlacochahuaya',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlacolula de Matamoros',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlacotepec Plumas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlalixtac de Cabrera',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Totontepec Villa de Morelos',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Trinidad Zaachila',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Trinidad Vista Hermosa',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Unión Hidalgo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Valerio Trujano',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Bautista Valle Nacional',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Díaz Ordaz',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yaxe',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena Yodocono de Porfirio Díaz',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yogana',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yutanduchi de Guerrero',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Zaachila',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Mateo Yucutindoo',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zapotitlán Lagunas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zapotitlán Palmas',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Inés de Zaragoza',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zimatlán de Álvarez',
            'fk_id_estado' => '20',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acajete',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acateno',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acatlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acatzingo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acteopan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ahuacatlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ahuatlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ahuazotepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ahuehuetitla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ajalpan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Albino Zertuche',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aljojuca',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Altepexi',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amixtlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amozoc',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aquixtla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atempan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atexcal',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atlixco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atoyatempan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atzala',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atzitzihuacán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atzitzintla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Axutla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ayotoxco de Guerrero',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Calpan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Caltepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Camocuautla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Caxhuacan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coatepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coatzingo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cohetzala',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cohuecan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coronango',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coxcatlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coyomeapan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coyotepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuapiaxtla de Madero',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuautempan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuautinchán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuautlancingo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuayuca de Andrade',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuetzalan del Progreso',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuyoaco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chalchicomula de Sesma',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chapulco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chiautla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chiautzingo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chiconcuautla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chichiquila',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chietla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chigmecatitlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chignahuapan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chignautla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chila',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chila de la Sal',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Honey',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chilchotla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chinantla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Domingo Arenas',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Eloxochitlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Epatlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Esperanza',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Francisco Z. Mena',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Felipe Ángeles',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guadalupe',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guadalupe Victoria',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hermenegildo Galeana',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huaquechula',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huatlatlauca',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huauchinango',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huehuetla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huehuetlán el Chico',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huejotzingo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hueyapan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hueytamalco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hueytlalpan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huitzilan de Serdán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huitziltepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atlequizayan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixcamilpa de Guerrero',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixcaquixtla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtacamaxtitlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Izúcar de Matamoros',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jalpan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jolalpan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jonotla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jopala',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juan C. Bonilla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juan Galindo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juan N. Méndez',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lafragua',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Libres',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Magdalena Tlatlauquitepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mazapiltepec de Juárez',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mixtla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Molcaxac',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cañada Morelos',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Naupan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nauzontla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nealtican',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nicolás Bravo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nopalucan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocotepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocoyucan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Olintla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Oriental',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pahuatlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Palmar de Bravo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pantepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Petlalcingo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Piaxtla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Puebla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Quecholac',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Quimixtlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rafael Lara Grajales',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Los Reyes de Juárez',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Cholula',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Antonio Cañada',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Diego la Mesa Tochimiltzingo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Felipe Teotlalcingo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Felipe Tepatlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Gabriel Chilac',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Gregorio Atzompa',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Jerónimo Tecuanipan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Jerónimo Xayacatlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José Chiapa',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José Miahuatlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Atenco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Atzompa',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín Texmelucan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín Totoltepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Matías Tlalancaleca',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Ixitlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel Xoxtla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Nicolás Buenos Aires',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Nicolás de los Ranchos',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pablo Anicano',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Cholula',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro Yeloixtlahuaca',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Salvador el Seco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Salvador el Verde',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Salvador Huixcolotla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Sebastián Tlacotepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Tlaltempan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Inés Ahuatempan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Isabel Cholula',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Miahuatlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huehuetlán el Grande',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Tomás Hueyotlipan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Soltepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecali de Herrera',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecamachalco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecomatlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tehuacán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tehuitzingo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tenampulco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teopantlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teotlalco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepanco de López',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepango de Rodríguez',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepatlaxco de Hidalgo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepeaca',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepemaxalco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepeojuma',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepetzintla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepexco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepexi de Rodríguez',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepeyahualco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepeyahualco de Cuauhtémoc',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tetela de Ocampo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teteles de Avila Castillo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teziutlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tianguismanalco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tilapa',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlacotepec de Benito Juárez',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlacuilotepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlachichuca',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlahuapan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlaltenango',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlanepantla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlaola',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlapacoya',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlapanalá',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlatlauquitepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlaxco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tochimilco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tochtepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Totoltepec de Guerrero',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tulcingo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tuzamapan de Galeana',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tzicatlacoyan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Venustiano Carranza',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Vicente Guerrero',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xayacatlán de Bravo',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xicotepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xicotlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xiutetelco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xochiapulco',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xochiltepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xochitlán de Vicente Suárez',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xochitlán Todos Santos',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yaonáhuac',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yehualtepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacapala',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacapoaxtla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacatlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zapotitlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zapotitlán de Méndez',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zaragoza',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zautla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zihuateutla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zinacatepec',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zongozotla',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zoquiapan',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zoquitlán',
            'fk_id_estado' => '21',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amealco de Bonfil',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pinal de Amoles',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Arroyo Seco',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cadereyta de Montes',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Colón',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Corregidora',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ezequiel Montes',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huimilpan',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jalpan de Serra',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Landa de Matamoros',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Marqués',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pedro Escobedo',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Peñamiller',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Querétaro',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Joaquín',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan del Río',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tequisquiapan',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tolimán',
            'fk_id_estado' => '22',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cozumel',
            'fk_id_estado' => '23',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Felipe Carrillo Puerto',
            'fk_id_estado' => '23',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Isla Mujeres',
            'fk_id_estado' => '23',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Othón P. Blanco',
            'fk_id_estado' => '23',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Benito Juárez',
            'fk_id_estado' => '23',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'José María Morelos',
            'fk_id_estado' => '23',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lázaro Cárdenas',
            'fk_id_estado' => '23',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Solidaridad',
            'fk_id_estado' => '23',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tulum',
            'fk_id_estado' => '23',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bacalar',
            'fk_id_estado' => '23',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ahualulco',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Alaquines',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aquismón',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Armadillo de los Infante',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cárdenas',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Catorce',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cedral',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cerritos',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cerro de San Pedro',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ciudad del Maíz',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ciudad Fernández',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tancanhuitz',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ciudad Valles',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coxcatlán',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Charcas',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ebano',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guadalcázar',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huehuetlán',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lagunillas',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Matehuala',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mexquitic de Carmona',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Moctezuma',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rayón',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rioverde',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Salinas',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Antonio',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Ciro de Acosta',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Luis Potosí',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Martín Chalchicuautla',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Nicolás Tolentino',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María del Río',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santo Domingo',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Vicente Tancuayalab',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Soledad de Graciano Sánchez',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tamasopo',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tamazunchale',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tampacán',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tampamolón Corona',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tamuín',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tanlajás',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tanquián de Escobedo',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tierra Nueva',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Vanegas',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Venado',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Arriaga',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Guadalupe',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de la Paz',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Ramos',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Reyes',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Hidalgo',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Juárez',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Axtla de Terrazas',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xilitla',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zaragoza',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Arista',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Matlapa',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Naranjo',
            'fk_id_estado' => '24',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ahome',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Angostura',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Badiraguato',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Concordia',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cosalá',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Culiacán',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Choix',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Elota',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Escuinapa',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Fuerte',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guasave',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mazatlán',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mocorito',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rosario',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Salvador Alvarado',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Ignacio',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sinaloa',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Navolato',
            'fk_id_estado' => '25',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aconchi',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Agua Prieta',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Alamos',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Altar',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Arivechi',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Arizpe',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atil',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bacadéhuachi',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bacanora',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bacerac',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bacoachi',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bácum',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Banámichi',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Baviácora',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bavispe',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Benjamín Hill',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Caborca',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cajeme',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cananea',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Carbó',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Colorada',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cucurpe',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cumpas',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Divisaderos',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Empalme',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Etchojoa',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Fronteras',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Granados',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guaymas',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hermosillo',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huachinera',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huásabas',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huatabampo',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huépac',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Imuris',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mazatán',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Moctezuma',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Naco',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nácori Chico',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nacozari de García',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Navojoa',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nogales',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Onavas',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Opodepe',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Oquitoa',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pitiquito',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Puerto Peñasco',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Quiriego',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rayón',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rosario',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sahuaripa',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Felipe de Jesús',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Javier',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Luis Río Colorado',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Miguel de Horcasitas',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pedro de la Cueva',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Ana',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sáric',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Soyopa',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Suaqui Grande',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepache',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Trincheras',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tubutama',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ures',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Hidalgo',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Pesqueira',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yécora',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Plutarco Elías Calles',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Benito Juárez',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Ignacio Río Muerto',
            'fk_id_estado' => '26',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Balancán',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cárdenas',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Centla',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Centro',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Comalcalco',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cunduacán',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Emiliano Zapata',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huimanguillo',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jalapa',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jalpa de Méndez',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jonuta',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Macuspana',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nacajuca',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Paraíso',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tacotalpa',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teapa',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tenosique',
            'fk_id_estado' => '27',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Abasolo',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aldama',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Altamira',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Antiguo Morelos',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Burgos',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bustamante',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Camargo',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Casas',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ciudad Madero',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cruillas',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Gómez Farías',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'González',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Güémez',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guerrero',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Gustavo Díaz Ordaz',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hidalgo',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jaumave',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jiménez',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Llera',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mainero',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Mante',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Matamoros',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Méndez',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mier',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Miguel Alemán',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Miquihuana',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nuevo Laredo',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nuevo Morelos',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ocampo',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Padilla',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Palmillas',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Reynosa',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Río Bravo',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Carlos',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Fernando',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Nicolás',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Soto la Marina',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tampico',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tula',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Valle Hermoso',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Victoria',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villagrán',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xicoténcatl',
            'fk_id_estado' => '28',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amaxac de Guerrero',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Apetatitlán de Antonio Carvajal',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atlangatepec',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atltzayanca',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Apizaco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Calpulalpan',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Carmen Tequexquitla',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuapiaxtla',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuaxomulco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chiautempan',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Muñoz de Domingo Arenas',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Españita',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huamantla',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hueyotlipan',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtacuixtla de Mariano Matamoros',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtenco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mazatecochco de José María Morelos',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Contla de Juan Cuamatzi',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepetitla de Lardizábal',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sanctórum de Lázaro Cárdenas',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nanacamilpa de Mariano Arista',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acuamanala de Miguel Hidalgo',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Natívitas',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Panotla',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Pablo del Monte',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Tlaxcala',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tenancingo',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teolocholco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepeyanco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Terrenate',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tetla de la Solidaridad',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tetlatlahuca',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlaxcala',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlaxco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tocatlán',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Totolac',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ziltlaltépec de Trinidad Sánchez Santos',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tzompantepec',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xaloztoc',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xaltocan',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Papalotla de Xicohténcatl',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xicohtzinco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yauhquemehcan',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacatelco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Benito Juárez',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Emiliano Zapata',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lázaro Cárdenas',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Magdalena Tlaltelulco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Damián Texóloc',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Francisco Tetlanohcan',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Jerónimo Zacualpan',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San José Teacalco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Huactzinco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lorenzo Axocomanitla',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Lucas Tecopilco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Ana Nopalucan',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Apolonia Teacalco',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Catarina Ayometla',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Cruz Quilehtla',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Isabel Xiloxoxtla',
            'fk_id_estado' => '29',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acajete',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acatlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acayucan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Actopan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acula',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acultzingo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Camarón de Tejeda',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Alpatláhuac',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Alto Lucero de Gutiérrez Barrios',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Altotonga',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Alvarado',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amatitlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Naranjos Amatlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Amatlán de los Reyes',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Angel R. Cabada',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Antigua',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Apazapan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Aquila',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Astacinga',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atlahuilco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atoyac',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atzacan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atzalan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlaltetela',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ayahualulco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Banderilla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Benito Juárez',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Boca del Río',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Calcahualco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Camerino Z. Mendoza',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Carrillo Puerto',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Catemaco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cazones de Herrera',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cerro Azul',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Citlaltépetl',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coacoatzintla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coahuitlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coatepec',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coatzacoalcos',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coatzintla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coetzala',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Colipa',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Comapa',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Córdoba',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cosamaloapan de Carpio',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cosautlán de Carvajal',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coscomatepec',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cosoleacaque',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cotaxtla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coxquihui',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Coyutla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuichapa',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuitláhuac',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chacaltianguis',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chalma',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chiconombrel',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chiconquiaco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chicontepec',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chinombreca',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chinampa de Gorostiza',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Las Choapas',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chocamán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chontla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chumatlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Emiliano Zapata',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Espinal',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Filomeno Mata',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Fortín',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Gutiérrez Zamora',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hidalgotitlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huatusco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huayacocotla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hueyapan de Ocampo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huiloapan de Cuauhtémoc',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ignacio de la Llave',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ilamatlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Isla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixcatepec',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixhuacán de los Reyes',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixhuatlán del Café',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixhuatlancillo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixhuatlán del Sureste',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixhuatlán de Madero',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixmatlahuacan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixtaczoquitlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jalacingo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xalapa',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jalcomulco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jáltipan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jamapa',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jesús Carranza',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xico',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jilotepec',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juan Rodríguez Clara',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juchique de Ferrer',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Landero y Coss',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Lerdo de Tejada',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Magdalena',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Maltrata',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Manlio Fabio Altamirano',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mariano Escobedo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Martínez de la Torre',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mecatlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mecayapan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Medellín de Bravo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Miahuatlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Las Minas',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Minatitlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Misantla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mixtla de Altamirano',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Moloacán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Naolinco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Naranjal',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nautla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nogales',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Oluta',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Omealca',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Orizaba',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Otatitlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Oteapan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ozuluama de Mascareñas',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pajapan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pánuco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Papantla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Paso del Macho',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Paso de Ovejas',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'La Perla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Perote',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Platón Sánchez',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Playa Vicente',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Poza Rica de Hidalgo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Las Vigas de Ramírez',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pueblo Viejo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Puente Nacional',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rafael Delgado',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Rafael Lucio',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Los Reyes',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Río Blanco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Saltabarranca',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Tenejapan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Andrés Tuxtla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Juan Evangelista',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Tuxtla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sayula de Alemán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Soconusco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sochiapa',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Soledad Atzompa',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Soledad de Doblado',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Soteapan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tamalín',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tamiahua',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tampico Alto',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tancoco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tantima',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tantoyuca',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tatatila',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Castillo de Teayo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecolutla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tehuipango',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Álamo Temapache',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tempoal',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tenampa',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tenochtitlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teocelo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepatlaxco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepetlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepetzintla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tequila',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'José Azueta',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Texcatepec',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Texhuacán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Texistepec',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tezonapa',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tierra Blanca',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tihuatlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlacojalpan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlacolulan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlacotalpan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlacotepec de Mejía',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlachichilco',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlalixcoyan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlalnelhuayocan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlapacoyan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlaquilpa',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlilapan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tomatlán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tonayán',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Totutla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tuxpan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tuxtilla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ursulo Galván',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Vega de Alatorre',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Veracruz',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Aldama',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xoxocotla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yanga',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yecuatla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacualpan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zaragoza',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zentla',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zongolica',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zontecomatlán de López y Fuentes',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zozocolco de Hidalgo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Agua Dulce',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Higo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nanchital de Lázaro Cárdenas del Río',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tres Valles',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Carlos A. Carrillo',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tatahuicapan de Juárez',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Uxpanapa',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Rafael',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santiago Sochiapan',
            'fk_id_estado' => '30',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Abalá',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Acanceh',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Akil',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Baca',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Bokobá',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Buctzotz',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cacalchén',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Calotmul',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cansahcab',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cantamayec',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Celestún',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cenotillo',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Conkal',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuncunul',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuzamá',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chacsinkín',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chankom',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chapab',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chemax',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chicxulub Pueblo',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chichimilá',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chikindzonot',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chocholá',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chumayel',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Dzán',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Dzemul',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Dzidzantún',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Dzilam de Bravo',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Dzilam González',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Dzitás',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Dzoncauich',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Espita',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Halachó',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hocabá',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hoctún',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Homún',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huhí',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Hunucmá',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ixil',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Izamal',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Kanasín',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Kantunil',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Kaua',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Kinchil',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Kopomá',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mama',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Maní',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Maxcanú',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mayapán',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mérida',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mocochá',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Motul',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Muna',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Muxupip',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Opichén',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Oxkutzcab',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Panabá',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Peto',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Progreso',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Quintana Roo',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Río Lagartos',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sacalum',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Samahil',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sanahcat',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'San Felipe',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa Elena',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Seyé',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sinanché',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sotuta',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sucilá',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sudzal',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Suma',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tahdziú',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tahmek',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teabo',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tecoh',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tekal de Venegas',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tekantó',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tekax',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tekit',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tekom',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Telchac Pueblo',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Telchac Puerto',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Temax',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Temozón',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepakán',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tetiz',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teya',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ticul',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Timucuy',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tinum',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tixcacalcupul',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tixkokob',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tixmehuac',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tixpéhual',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tizimín',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tunkás',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tzucacab',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Uayma',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ucú',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Umán',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Valladolid',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Xocchel',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yaxcabá',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yaxkukul',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Yobaín',
            'fk_id_estado' => '31',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Apozol',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Apulco',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Atolinga',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Benito Juárez',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Calera',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cañitas de Felipe Pescador',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Concepción del Oro',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Cuauhtémoc',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Chalchihuites',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Fresnillo',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Trinidad García de la Cadena',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Genaro Codina',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Enrique Estrada',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Francisco R. Murguía',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Plateado de Joaquín Amaro',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'General Pánfilo Natera',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Guadalupe',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Huanusco',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jalpa',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jerez',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Jiménez del Teul',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juan Aldama',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Juchipila',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Loreto',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Luis Moya',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mazapil',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Melchor Ocampo',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Mezquital del Oro',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Miguel Auza',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Momax',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Monte Escobedo',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Morelos',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Moyahua de Estrada',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Nochistlán de Mejía',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Noria de Ángeles',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Ojocaliente',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pánuco',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Pinos',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Río Grande',
            'fk_id_estado' => '32',

        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sain Alto',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'El Salvador',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Sombrerete',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Susticacán',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tabasco',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepechitlán',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tepetongo',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Teúl de González Ortega',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Tlaltenango de Sánchez Román',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Valparaíso',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Vetagrande',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa de Cos',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa García',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa González Ortega',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villa Hidalgo',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Villanueva',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Zacatecas',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Trancoso',
            'fk_id_estado' => '32',
        ]);
        DB::Table('municipio')->insert([
            'nombre' => 'Santa María de la Paz',
            'fk_id_estado' => '32',
        ]);
    }
}
