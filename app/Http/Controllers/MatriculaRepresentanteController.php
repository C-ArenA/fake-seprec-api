<?php

namespace App\Http\Controllers;

use App\Http\Resources\MatriculaRepresentanteResource;
use Illuminate\Http\Request;

class MatriculaRepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        //
        $representantes = [
            "IdMatricula" => $id,
            "Representante" => [
                [
                    "NombreVinculo" => fake()->name(),
                    "NumId" => fake()->numerify('#######'),
                    "IdClase" => "1",
                    "FecRegistro" => "2017-11-03",
                    "NumDoc" => "-",
                    "FecDocumento" => " ",
                    "NoticiaDocumento" => "INSCRIPCION DE COMERCIANTE INDIVIDUAL",
                    "TipoVinculo" => "PROPIETARIO",
                    "IdLibro" => "80",
                    "NumReg" => "458227"
                ]
            ]
        ];
        return new MatriculaRepresentanteResource($representantes);
    }

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
