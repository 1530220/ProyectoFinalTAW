<?php

Route::get('/', function () {
    session_start();
    if(isset($_SESSION['usuario'])){
        return view('inicio');
    }else{
        return view('login');
    }
});

/*Route::get('/adios',function(){
    return "adios";
});
Route::get('/',function(){
    return "hola";
});*/




Route::post('/',"LoginController@login");

?>