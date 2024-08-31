<?php   
    //Ejercicio #1
    echo "<h2>Ejercicio 1</h2>";
    $estudiantes = [
        "Pepito" => [5, 4.3, 3, 2.7, 4.4],
        "Pepita" => [5, 4, 3, 2.7, 5],
        "Rodolfo" => [3, 4, 3, 2.7, 2.2]
    ];

    $promedioAlto = 0;
    foreach($estudiantes as $estudiante => $notas){
        $promedio = 0;
        foreach($notas as $nota){
            $promedio += $nota;
        }
        echo"Promedio notas $estudiante: ";
        $promedio = $promedio/count($notas);
        echo($promedio);
        echo"<br>";
        if($promedio > $promedioAlto){
            $promedioAlto = $promedio;
        }   
    }
    echo"El promedio mas alto fue: $promedioAlto";

    //Ejercicio #2
    echo "<h2>Ejercicio 2</h2>";
    $empleados = [
        "Diego" => [
            1300000,
            "2024-03-02",
            "Desarrollo"
        ],
        "David" => [
            1500000,
            "2023-31-12",
            "Configuración"
        ],
        "Daniel" => [   
            1500000,
            "2024-07-02",
            "Configuración"
        ]
        ];

    foreach($empleados as $empleado => $info){
        echo "Empleado $empleado con salario de $info[0]";
        echo"<br>";
    }


    //Ejercicio #3
    echo "<h2>Ejercicio 3</h2>";

    $productos = [
        "Chocorramo" => [
            "precio" => 3500,
            "detalles" => [
                "disponibilidad" => 4,
                "reseñas" => "Ramo"
            ]
        ],
        "Nucita" => [
            "precio" => 1500,
            "detalles" => [
                "disponibilidad" => 20,
                "reseñas" => "Colombina"
            ]
        ],
        "Tostacos" => [
            "precio" => 1500,
            "detalles" => [
                "disponibilidad" => 0, 
                "reseñas" => "Son del chiras!!"
            ]
        ]
    ];
    
   
    foreach ($productos as $nombre => $informacion) {
        if ($informacion["detalles"]["disponibilidad"] > 0) {
            echo "Producto: $nombre - Precio: " . $informacion["precio"] . " COP\n";
            echo"<br>";
        }
    }
    
?>