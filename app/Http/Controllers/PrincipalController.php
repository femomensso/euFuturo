<?php

namespace App\Http\Controllers;

use App\Models\Recado;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function Index($msg = 0) {
        return view('index');
    }

    public function Enviar(Request $request) {

        if ($request->input('_token') != '') {
            $regras = [
                'mensagem' => 'required',
                'email' => 'email|unique:recados',
                'tempo' => 'required'
            ];
            $feedback = [
                'required' => 'Preenchimento obrigatório!',
                'email' => 'Email inválido!',
                'email.unique' => 'Esse email já foi utilizado!'
            ];
            $request->validate($regras, $feedback);
            
            $recado = new Recado();
            $recado->fill($request->all());

            $dia = new DateTime;
            $intervalo = new DateInterval('P'.$request->input('tempo').'Y');
            $dia->add($intervalo);

            $recado->data_final = $dia;
            $recado->codigo = random_int(10000000, 99999999);
            $recado->save();

            session_start();
            $_SESSION['msg'] = 'Mensagem enviada com sucesso!';

            return redirect()->route('index');
        }

        return view('enviar');
    }

    public function Revelar(Request $request) {

        if ($request->input('_token') != '') {
            
            $regras = [
                'email' => 'email',
                'codigo' => 'required|min:8|max:8'
            ];
            $feedback = [ 
                'email' => 'Email inválido!',
                'required' => 'Preenchimento obrigatório',
                'codigo.min' => 'O código deve ter 8 caractéres!',
                'codigo.max' => 'O código deve ter 8 caractéres!'
            ];
            $request->validate($regras, $feedback);

            $recado = Recado::where('email', 'like', $request->input('email'))->where('codigo', 'like', $request->input('codigo'))->get();
            $dia = date('Y-m-d');

            return view('recado', ['recado' => $recado, 'dia' => $dia]);
        };

        return view('revelar');
    }
}
