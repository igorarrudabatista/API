<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EducarTech;
use App\Models\EducarTechAlunos;

class Seduc_alunos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
     /** 
*
 * @OA\Get(
 *     path="/api/seduc/alunos",
 *     tags={"Alunos"},
 * 
 *     summary="Get all Alunos",
 *     description="Fetches all the Asset records",

 *  *     @OA\Parameter(
     *         name="Alunos",
     *         in="query",
     *         description=" Todos os dados da tabela Alunos ",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example=" ",
     *         style="form"),

     * 
     * 
     *  

 *     @OA\Response(response="200", description="OK"),
 *     @OA\Response(response=422, description="Missing Data"),
 *     @OA\Response(response=401, description="fail"),
 *     @OA\Response(response=404, description="fail"),
 * 
 * 
 * )
 */


    public function show(Request $request)
    {
       // $consulta = EducarTech::where('GoogleTurmaID', '=', '463445207008')->get();
       //$consulta = EducarTech::where('Escola_ID', '=', $id)->get();
      // $consulta = EducarTechalunos::query()->limit(5)->get();  
       
       $consulta = EducarTechalunos::get()->toJson(JSON_PRETTY_PRINT); 
       $consulta = EducarTechalunos::paginate(15);

       return response($consulta, 200); 
    }

   
}
