<?php

namespace App\Http\Controllers;

use App\Http\Resources\MatriculaResource;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $infoMatricula = [
            "IdMatricula" => $id,
            "RazonSocial" => fake()->sentence(3),
            "TipoSocietario" => "04",
            "FechaInscripcion" => "1986-11-21",
            "FechaUltRenovacion" => "2022-08-30",
            "FecVigenciaMatricula" => "2024-08-31",
            "UltGestionRenovada" => "2021",
            "Nit" => "1020329021",
            "Departamento" => "LA PAZ",
            "Provincia" => "MURILLO",
            "Municipio" => "LA PAZ",
            "CalleAv" => "AVENIDA SANCHEZ LIMA",
            "EntreCalles" => "ECUADOR Y ASPIAZU",
            "Nro" => "2061",
            "Uv" => "",
            "Mza" => "",
            "Edificio" => "ROSARIO",
            "Piso" => "3",
            "NroOficina" => "3",
            "Zona" => fake()->sentence(2),
            "CorreoElectronico" => fake()->email(),
            "Actividad" => "FABRICACION    COMERCIALIZACION   IMPORTACION  DE  CALAMINAS  PLANAS YCORRUGADAS DE ACERO GALVANIZADO, EXPORTACION DE SUS PRODUCTOS",
            "Telefono" => fake()->numerify('7#######'),
            "ClaseCIIU" => "2599",
            "CategoriaCAEB" => "C",
            "TamanoEmpresa" => "0.88589",
            "CtrEstado" => "1",
        ];
        return new MatriculaResource($infoMatricula);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
