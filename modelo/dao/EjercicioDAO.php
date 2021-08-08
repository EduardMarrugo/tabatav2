<?php
require_once("DataSource.php");
require_once(__DIR__ . "/../entidad/Ejercicio.php");

class EjercicioDAO
{

    public function verEjerciciosGuardados()
    {
        $data_source = new DataSource();

        $data_table = $data_source->ejecutarConsulta("SELECT * FROM ejercicio");

        $ejercicio = null;
        $ejercicios =  array();

        foreach ($data_table as $indice => $valor) {
            $ejercicio = new Ejercicio(
                $data_table[$indice]["id"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["descripcion"],
                $data_table[$indice]["idTipoEjercicio"],
                $data_table[$indice]["imagen"],
                $data_table[$indice]["video"]
                
            );
            array_push($ejercicios, $ejercicio);
        }
        return $ejercicios;
    }
    
}
