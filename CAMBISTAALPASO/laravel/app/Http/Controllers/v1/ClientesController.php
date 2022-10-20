<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use stdClass;
use App\Models\Cliente;
use Illuminate\Http\Request;
 
class ClientesController extends Controller
{
    
    public function getAll()
    {
        $response = new stdClass();

        $clientes = Cliente::all();

        $response->success=true;
        $response->data=$clientes;

        return response()->json($response,200);
    }

    public function getItem($id)
    {
        $response = new stdClass();
        $cliente = Cliente::find($id);
        $response->data = $cliente;
        $response->success=true;
        return response()->json($response,200);



    }

    public function store(Request $request)
    {
        $response = new stdClass();

        $cliente = new Cliente();
        $cliente->TipoDocumento=$request->TipoDocumento;
        $cliente->NumeroDocumento=$request->NumeroDocumento;
        $cliente->Nombres=$request->Nombres;
        $cliente->Apellidos=$request->Apellidos;
        $cliente->FechaNacimiento=$request->FechaNacimiento;
        $cliente->LugarDeVivienda=$request->LugarDeVivienda;
        $cliente->Pais=$request->Pais;
        $cliente->save();


        $response->data = $cliente;
        $response->success=true;
        return response()->json($response,200);


    }

    public function update(Request $request,$id)
  {
        $response = new stdClass();

        $cliente = Cliente::find($id);
        $cliente->TipoDocumento=$request->TipoDocumento;
        $cliente->NumeroDocumento=$request->NumeroDocumento;
        $cliente->Nombres=$request->Nombres;
        $cliente->Apellidos=$request->Apellidos;
        $cliente->FechaNacimiento=$request->FechaNacimiento;
        $cliente->LugarDeVivienda=$request->LugarDeVivienda;
        $cliente->Pais=$request->Pais;
        $cliente->save();

        $response->data = $cliente;
        $response->success=true;
        return response()->json($response,200);
}

public function patchUpdate(Request $request,$id)

{       
        $response = new stdClass();
        $cliente = Cliente::find($id);

        if($request->TipoDocumento!=null)
        {
          $cliente->TipoDocumento=$request->TipoDocumento;    
        }
        
        if($request->NumeroDocumento!=null)
        {
            $cliente->NumeroDocumento=$request->NumeroDocumento;    
        }

        if($request->Nombres!=null)
        {
            $cliente->Nombres=$request->Nombres;    
        }

        if($request->Apellidos!=null)
        {
            $cliente->Apellidos=$request->Apellidos;    
        }

        if($request->FechaNacimiento!=null)
        {
            $cliente->FechaNacimiento=$request->FechaNacimiento;    
        }

        if($request->LugarDeVivienda!=null)
        {
            $cliente->LugarDeVivienda=$request->LugarDeVivienda;    
        }

         if($request->Pais!=null)
        {
            $cliente->Pais=$request->Pais;    
        }

    
        $cliente->save();
        $response->data = $cliente;
        $response->success=true;
        return response()->json($response,200);


}

  public function delete($id)
  {
        $response = new stdClass();
        $cliente = Cliente::find($id);
        $cliente->delete();
        

        $response->success=true;
        return response()->json($response,200);

         }

    

}