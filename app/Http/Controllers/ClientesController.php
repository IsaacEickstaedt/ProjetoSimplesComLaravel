<?php
    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Clientes;

    class ClientesController extends Controller{
            public function index(){
                $data['clientes'] = Clientes::all();
                return view('clientes', $data);
            }
            
            public function getIdCliente($id){
                $data['infosCliente'] = Clientes::find($id);
                return view('infoCliente', $data);
            }

            public function salvar(Request $request){
                $data = [ 
                    $NOME = $request->input("NOME"),
                    $EMAIL = $request->input("EMAIL")
                ];
                $clientes = new Clientes();
                $clientes->NOME = $NOME;
                $clientes->EMAIL = $EMAIL;
                $clientes->save();
                return redirect('/');
            }
        }
?>