<?php

use Illuminate\Database\Seeder;

class FillAulas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('tipo_evento')->insert([
            ['nombre' => 'Taller'],
            ['nombre' => 'Conferencia'],
        ]);

        DB::Table('ubicacion')->insert([
            ['edificio' => 'T',
                'aula' => 'T1',
                'cupo'=>30
            ],
            ['edificio' => 'T',
                'aula' => 'T2',
                'cupo'=>30
            ],
            ['edificio' => 'T',
                'aula' => 'T3',
                'cupo'=>30
            ],
            ['edificio' => 'T',
                'aula' => 'T4',
                'cupo'=>30
            ],
            ['edificio' => 'T',
                'aula' => 'T5',
                'cupo'=>30
            ],
            ['edificio' => 'T',
                'aula' => 'T6',
                'cupo'=>30
            ],
            ['edificio' => 'T',
                'aula' => 'T7',
                'cupo'=>30
            ],
            ['edificio' => 'T',
                'aula' => 'TLC1',
                'cupo'=>30
            ],
            ['edificio' => 'T',
                'aula' => 'TLC2',
                'cupo'=>30
            ],
            ['edificio' => 'C',
                'aula' => 'Sala A y B',
                'cupo'=>30
            ],
            ['edificio' => 'C',
                'aula' => 'Sala C',
                'cupo'=>30
            ],
            ['edificio' => 'C',
                'aula' => 'Sala D',
                'cupo'=>30
            ],
            ['edificio' => 'C',
                'aula' => 'Sala E',
                'cupo'=>30
            ],
            ['edificio' => 'C',
                'aula' => 'Sala F',
                'cupo'=>30
            ]
        ]);
    }
}
