<?php

namespace App\Http\Controllers;
use App\models\Tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
 
    public function index()
    {
        //
        $task = Tasks::all();
        return response()->json($task);
    }

   
  
    
    public function store(Request $request)
    {
        //
        $task = Tasks::create([
            'Name_Task' =>$request->nom,
            'descreption' =>$request->descreption,
            'status' =>$request->status

            ])->save();
            if($task){
                return response()->json(["status" => "success"]);
            }
             else{
               return response()->json(["status" => "error"]);
        }
    }

   
 
 
  
 
    public function update(Request $request, $id)
    {
        //
        $task = Tasks::find($id)
        ->update([
            'Name_Task' =>$request->nom,
            'descreption' =>$request->descreption,
            'status' =>$request->status
        ]);
        if($task){
            return response()->json(["status" => "edit success"]);
        }
         else{
           return response()->json(["status" => "error "]);
         }
    }

 
    public function destroy($id)
    {
        //
        Tasks::find($id)
        ->delete();
    }
}
