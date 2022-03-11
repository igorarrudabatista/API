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
  
    public function show(Request $request)
    {
       // $consulta = EducarTech::where('GoogleTurmaID', '=', '463445207008')->get();
       //$consulta = EducarTech::where('Escola_ID', '=', $id)->get();
      // $consulta = EducarTechalunos::query()->limit(5)->get();  
       
       $consulta = EducarTech::get()->toJson(JSON_PRETTY_PRINT); 
    
       return response($consulta, 200); 
    }

   
}
