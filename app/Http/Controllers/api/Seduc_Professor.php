<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EducarTech;
use App\Models\EducarTechAlunos;

class Seduc_Professor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
/** @OA\Info(title="SEDUC API", version="0.1") 
*
 * @OA\Get(
 *     path="/api/seduc/professor",
 *     tags={"Professor"},
 * 
 *     summary="Get all Professor",
 *     description="Fetches all the Asset records",

 *  *     @OA\Parameter(
     *         name="ESCOLA_ID",
     *         in="query",
     *         description="Listar todos os itens Tabela Professores",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="10766",
     *         style="form"),
     * 
     * *     @OA\Parameter(
     *         name="ESCOLA_INEP",
     *         in="query",
     *         description="Listar todos os itens Tabela Professores",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="51034077",
     *         style="form"),
     * 
     * 
     * 
 *     @OA\Response(response="200", description="OK"),
 *     @OA\Response(response=422, description="Missing Data"),
 *     @OA\Response(response=401, description="fail"),
 *     @OA\Response(response=404, description="fail"),
 * )
 * 
 * 
 *  * @OA\Get(
 *     path="/api/seduc/alunos",
 *     tags={"Alunos"},
 *  *     summary="Get all Professor",
 *     description="Fetches all the Asset records",

 *  *     @OA\Parameter(
     *         name="ESCOLA_ID",
     *         in="query",
     *         description="Listar todos os itens Tabela Professores",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="10766",
     *         style="form"),
 * 
 *
 */



    public function show(Request $request)
    {
       // $consulta = EducarTech::where('GoogleTurmaID', '=', '463445207008')->get();
       //$consulta = EducarTech::where('Escola_ID', '=', $id)->get();
      // $consulta = EducarTechalunos::query()->limit(5)->get();  
       
       $consulta = EducarTech::get()->toJson(JSON_PRETTY_PRINT);
       
       
       
    
       return response($consulta, 200); 
    }

    public function create()
    {
        //
    }
}
