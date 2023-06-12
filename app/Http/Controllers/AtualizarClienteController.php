<?php
    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Clientes;

    class AtualizarClienteController extends Controller{
            public function carregarcliente($id){
                $data['infoCliente'] = Clientes::find($id);
                return view('atualizarcliente', $data);
            }

            public function CadastrarAlteracoes(Request $request , $id){
                if ($request->has('NOME')) {
                    $nome = $request->input('NOME');
                    $email = $request->input('EMAIL');
                    Clientes::where('ID', '=', $id)->update(array('NOME' => $nome, 'EMAIL' => $email));
                    return redirect('/');
                }
            }
        }
?>