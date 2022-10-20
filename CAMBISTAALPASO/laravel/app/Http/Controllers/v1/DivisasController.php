<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use stdClass;
use App\Models\Divisa;
use Illuminate\Http\Request;
 
class DivisasController extends Controller
{
    
    public function getAll()
    {
        $response = new stdClass();

        $divisas = Divisa::all();

        $response->success=true;
        $response->data=$divisas;

        return response()->json($response,200);
    }

    public function getItem($id)
    {
        $response = new stdClass();
        $divisa = Divisa::find($id);
        $response->data = $divisa;
        $response->success=true;
        return response()->json($response,200);



    }

    public function store(Request $request)
    {
        $response = new stdClass();

        $divisa = new Divisa();
        $divisa->CodigoDivisa=$request->CodigoDivisa;
        $divisa->NombreDivisa=$request->NombreDivisa;
        $divisa->save();


        $response->data = $divisa;
        $response->success=true;
        return response()->json($response,200);


    }

    public function update(Request $request,$id)
  {
        $response = new stdClass();

        $divisa = Divisa::find($id);
        $divisa->CodigoDivisa=$request->CodigoDivisa;
        $divisa->NombreDivisa=$request->NombreDivisa;
        $divisa->save();

        $response->data = $divisa;
        $response->success=true;
        return response()->json($response,200);
}

public function patchUpdate(Request $request,$id)

{       
        $response = new stdClass();
        $divisa = Divisa::find($id);

        if($request->CodigoDivisa!=null)
        {
          $divisa->CodigoDivisa=$request->CodigoDivisa;    
        }
        
        if($request->NombreDivisa!=null)
        {
            $divisa->NombreDivisa=$request->NombreDivisa;    
        }

        
        $divisa->save();
        $response->data = $divisa;
        $response->success=true;
        return response()->json($response,200);


}

  public function delete($id)
  {
        $response = new stdClass();
        $divisa = Divisa::find($id);
        $divisa->delete();
        

        $response->success=true;
        return response()->json($response,200);

         }

    

}