<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MatriculaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        parent::withoutWrapping();
        return [
            "rutina" => "VRCONAG",
            "texto" => $this->resource['IdMatricula'],
            "detalle" => [
                "infoMatricula" => $this->resource
            ],
            "cantidad" => "1",
            "error" => "0000"
        ];
    }
}
