@extends('layout')

@section('contenido')
    <div class="container-fluid no-padding h-100">
        <div class="row flex-row h-100 bg-white">
            <div class="col-xl-8 col-lg-6 col-md-5 no-padding">
                <div class="elisyam-bg background-01">
                    <div class="elisyam-overlay overlay-01"></div>
                    <div class="authentication-col-content mx-auto">
                        <h1 class="gradient-text-01">
                            Bienvenido a Workana!
                        </h1>
                        <span class="description">
                            Ingresa para publicar los proyectos que desees en busca de un freelancer que te ayude o encargate de desarrollar proyectos publicados. 
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
                <div class="authentication-form mx-auto">
                    <div class="logo-centered">
                        <a href="db-default.html">
                            <img src="assets/img/descarga.png" alt="logo">
                        </a>
                    </div>
                    <h3>Iniciar Sesion</h3>
                    <form>
                        <div class="group material-input">
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Usuario</label>
                        </div>
                        <div class="group material-input">
                            <input type="password" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Contraseña</label>
                        </div>
                    </form>
                    <div class="sign-btn text-center">
                        <a href="db-default.html" class="btn btn-lg btn-gradient-01">
                            Acceder
                        </a>
                    </div>
                    <div class="register">
                        ¿No posees una cuenta?
                        <br>
                        <a href="pages-register.html">Registrate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection