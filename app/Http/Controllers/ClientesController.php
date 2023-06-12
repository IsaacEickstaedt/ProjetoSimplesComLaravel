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
                if ($request->has('NOME')) {
                    $nome = $request->input('NOME');
                    $email = $request->input('EMAIL');
                    $clientes = new  Clientes();
                    $clientes->NOME = $nome;
                    $clientes->EMAIL = $email;
                    $clientes->save();
                    return redirect('/');
                }
            }

            public function excluir($id){
                Clientes::where('ID', '=', $id)->delete();
                return redirect('/');
            }
        }
?>