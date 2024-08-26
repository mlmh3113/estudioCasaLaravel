<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obra;

class ObraSeeder extends Seeder
{

    public function run(): void
    {
        Obra::truncate();

        $obras = [
            [
                'name' => 'Cocina VS',
                'description' => 'Una reforma integral que le cambió el carácter a la casa. El cliente nos da total libertad para crear, y el resultado es espectacular, el cambio de iluminación es lo que más llama la atención. Nos encontrábamos con una cocina oscura que no invitaba a entrar, lo que hicimos fue un cambio de 180º aprovechando el lindo patio que tenía al fondo pero no se apreciaba porque las pequeñas ventanas no lo permitían. Se proponen aberturas de piso a techo hacia el patio, que combinadas con piso y muebles claros, da un resultado positivo para la iluminación y el diseño. Se cambia de posición la mesada, generando una isla y una alacena de guardado que con sus puertas estilo colonial le dan el encuadre ideal a la cocina.',
                'ubication' => 'Carrasco, Montevideo, Uruguay',
                'year' => 2022,
                'duration' => '2 años',
                'area' => 100,
                'image' => 'https://res.cloudinary.com/dkoocayxp/image/upload/v1712835604/Estudio-CASA/cocinaVs_ckoelh.png',

            ],
            [
                'name' => 'Barcacoa Mr',
                'description' => 'Esta ampliación surge de la necesidad de tener un espacio cerrado fuera de la casa principal. Lo que había originalmente era un parrillero techado y se utilizó de base para generar una barbacoa completa. Se mantuvo la estética de los tirantes en el techo, se revistió el piso con porcelanato maderado y se hicieron muebles a medida con un toque vintage utilizando molduras en los mismos. Todo esto, sumado a que se incorporó una estufa de alto rendimiento, le aporta calidez y confort al espacio. Inmersa en un bosque de pinos con todos sus cerramientos en D.V.H, parrillero con isla, baño, cocina, sala de estar y comedor, el resultado es un espacio con todo lo necesario para disfrutar de reuniones infinitas.',
                'ubication' => 'Pinares, Maldonado',
                'year' => 2023,
                'duration' => '1.5 años',
                'area' => 80,
                'image' => 'https://res.cloudinary.com/dkoocayxp/image/upload/v1712835604/Estudio-CASA/barbacoaMr_kkwkp5.png',
            ]
        ];

        foreach ($obras as $obra) {
            Obra::create($obra);
        }
    }
}
