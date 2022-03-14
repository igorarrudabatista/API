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
  
/** 
 * @OA\Info(title="SEDUC API", version="0.1") 
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
     *         description="ID Escola ",
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
     *         description="ID Escola Inep",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="51034077",
     *         style="form"),
     * 
     * @OA\Parameter(
     *         name="TURMA_GID",
     *         in="query",
     *         description="ID Escola Inep",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="463476534675",
     *         style="form"),
     * 
     *    * @OA\Parameter(
     *         name="TURMA_NAME",
     *         in="query",
     *         description="ID Escola Inep",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="1\u00ba - 2\u00ba Ano B - EM Not",
     *         style="form"),
     * 
     *         * @OA\Parameter(
     *         name="TURMA_SURNAME",
     *         in="query",
     *         description="ID Escola Inep",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="EEPA ACO - 2022",
     *         style="form"),
     * 
     * 
     *         * @OA\Parameter(
     *         name="PROFESSOR_GID",
     *         in="query",
     *         description="ID Escola Inep",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="114806048526598013023",
     *         style="form"),
     * 
     *              * @OA\Parameter(
     *         name="OWNER_EMAIL_GID",
     *         in="query",
     *         description="ID Escola Inep",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="escola.10766@edu.mt.gov.br",
     *         style="form"),
     * 
     *         @OA\Parameter(
     *         name="NivelTurma",
     *         in="query",
     *         description="ID Escola Inep",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="10,12",
     *         style="form"),
     *        @OA\Parameter(
     *         name="CodigoIbgeMunicipio",
     *         in="query",
     *         description="ID Escola Inep",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="5100102",
     *         style="form"),
     * 
     *       @OA\Parameter(
     *         name="NomeMunicipio",
     *         in="query",
     *         description="ID Escola Inep",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="ACORIZAL",
     *         style="form"),
     * 
     *  *       @OA\Parameter(
     *         name="CodigoIbgeDRE",
     *         in="query",
     *         description="ID Escola Inep",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="5108402",
     *         style="form"),
     * 
     * *       @OA\Parameter(
     *         name="NomeDRE",
     *         in="query",
     *         description="ID Escola Inep",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="DRE VARZEA GRANDE",
     *         style="form"),
     * 
     *  * *       @OA\Parameter(
     *         name="NomeEscola",
     *         in="query",
     *         description="ID Escola Inep",
     *         required=false,
     * 
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(type="string"),
     *         ),
     *          example="EE Ponce de Arruda",
     *         style="form"),
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
       
       $consulta = EducarTech::get()->toJson(JSON_PRETTY_PRINT);
       
       return response($consulta, 200); 
    }



    /** 
*
 * @OA\Get(
 *     path="/api/seduc/alunos",
 *     tags={"Alunos"},
 * 
 *     summary="Get all Professor",
 *     description="Fetches all the Asset records",

 *  *     @OA\Parameter(
     *         name="ESCOLA_ID",
     *         in="query",
     *         description="ID Escola ",
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
     *         description="ID Escola Inep",
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
 * 
 * 
 * )
 */
    public function create()
    {
        //
    }
}
