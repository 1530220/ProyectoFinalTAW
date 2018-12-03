<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class LoginController extends Controller
{
    public function login(){
        $usuario = request('usuario');
        $password = request('password');

        $loginUsuario = Usuario::where("usuario",$usuario)->get();
        if($loginUsuario->isEmpty()){
            echo "<script>alert('Usuario o contraseña incorrecta')</script>";
            return redirect('/');
        }else{
            session_start();
            $_SESSION['usuario'] = $usuario;
            return redirect('/');
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        return redirect('/');
    }
}
