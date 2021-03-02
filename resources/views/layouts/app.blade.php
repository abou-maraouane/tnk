<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts --
    <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body id="body">
    <nav>
        <ul id="navbar-right">
            <a class="active" href="#home">Home</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a href="#" onclick="initmodelLogin()" class ="login animation" data-toggle="modal" data-target="#Login" >
                <span class="material-icons">login</span>
                <span> Login</span> 
            </a>
        </ul>
    </nav><br><br><br>
    <H1>ABOUUU model</H1>
<!-- Modal -->
<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="LoginTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" id="formulaire-connexion-login" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" id="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="model-login" >
                    <form action="" >
                        <div class="form-horizontal form-simple">
                            <fieldset >
                                <label for="username">Username</label>
                                <div class="form-control-position icone-personeLogin">
                                    <svg width="50" aria-hidden="true" class="svg-inline--fa fa-user fa-w-14 svg-icon-placeholder"  data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 1000 1500" >  
                                        <path fill="currentColor" 
                                        d="M313.6 288c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4zM416 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16v-41.6C32 365.9 77.9 320 134.4 320c19.6 0 39.1 16 89.6 16 50.4 0 70-16 89.6-16 56.5 0 102.4 45.9 102.4 102.4V464zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm0-224c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
                                        </path>
                                    </svg>
                                </div>
                                <input type="text" name="username" placeholder="Enter Username" class="form-control">
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <div class="form-control-position icone-personeLogin">
                                    <svg width="50" aria-hidden="true" class="svg-inline--fa fa-user fa-w-14 svg-icon-placeholder"  data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 1000 1500" >
                                        
                                        <path fill="currentColor" d="M336 32c79.529 0 144 64.471 144 144s-64.471 144-144 144c-18.968 0-37.076-3.675-53.661-10.339L240 352h-48v64h-64v64H32v-80l170.339-170.339C195.675 213.076 192 194.968 192 176c0-79.529 64.471-144 144-144m0-32c-97.184 0-176 78.769-176 176 0 15.307 1.945 30.352 5.798 44.947L7.029 379.716A24.003 24.003 0 0 0 0 396.686V488c0 13.255 10.745 24 24 24h112c13.255 0 24-10.745 24-24v-40h40c13.255 0 24-10.745 24-24v-40h19.314c6.365 0 12.47-2.529 16.971-7.029l30.769-30.769C305.648 350.055 320.693 352 336 352c97.184 0 176-78.769 176-176C512 78.816 433.231 0 336 0zm48 108c11.028 0 20 8.972 20 20s-8.972 20-20 20-20-8.972-20-20 8.972-20 20-20m0-28c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z"></path>
                                    </svg>
                                </div>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control" >
                            </fieldset>
                            <button type="submit" class="form-control button-Formulaire-login ">Login</button>
                            <label class="creation-compte"> Vous ne disposez pas de compte ?</label><br>
                            <span  onclick="creationCompteForm()">Crée un compte </span>
                        </div>
                    </form>
                </div>
                <div id="model-createComopte">
                    <form action="">
                        <div class="form-horizontal form-simple">
                            <fieldset >
                                <label for="Email">Email</label>
                                <div class="form-control-position icone-personeLogin">
                                    <svg  id="Capa_1" width="50" aria-hidden="true" class="svg-inline--fa fa-user fa-w-14 svg-icon-placeholder" viewBox="0 0 1000 1500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g>
                                            <g>
                                                <path d="M256,60c-57.897,0-105,47.103-105,105c0,35.943,18.126,69.015,48.487,88.467c31.003,19.863,69.06,21.974,104.426,5.703
                                                    c7.525-3.462,10.82-12.37,7.357-19.896c-3.462-7.525-12.369-10.82-19.896-7.358c-25.86,11.898-53.454,10.545-75.703-3.709
                                                    C193.961,214.298,181,190.669,181,165c0-41.355,33.645-75,75-75s75,33.645,75,75c0,8.271-6.729,15-15,15
                                                    c-7.558,0-14.618-5.732-14.998-14.772C301.001,165.152,301,165.076,301,165c0-24.813-20.187-45-45-45s-45,20.187-45,45
                                                    s20.187,45,45,45c11.516,0,22.031-4.353,29.999-11.494C293.966,205.648,304.483,210,316,210c24.813,0,45-20.187,45-45
                                                    C361,107.103,313.897,60,256,60z M270.789,167.406C269.631,174.535,263.45,180,256,180c-8.271,0-15-6.729-15-15s6.729-15,15-15
                                                    c7.691,0,14.04,5.82,14.895,13.285C270.671,164.648,270.634,166.035,270.789,167.406z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M480.999,196.976c-0.004-3.879-1.566-7.756-4.393-10.583L421,130.787V15c0-8.284-6.716-15-15-15H106
                                                    c-8.284,0-15,6.716-15,15v115.787l-55.606,55.606c-0.052,0.052-0.096,0.11-0.147,0.163c-2.811,2.896-4.24,6.709-4.246,10.42
                                                    c0,0.01-0.001,0.019-0.001,0.029V467c0,24.845,20.216,45,45,45h360c24.839,0,45-20.207,45-45V197.005
                                                    C481,196.995,480.999,196.986,480.999,196.976z M421,173.213L444.787,197L421,220.787V173.213z M121,137.005
                                                    c0-0.003,0-0.007,0-0.01V30h270v106.995c0,0.003,0,0.007,0,0.01v113.782L309.787,332H202.213L121,250.787V137.005z M91,173.213
                                                    v47.574L67.213,197L91,173.213z M61,460.787V233.213L174.787,347L61,460.787z M82.214,482l119.999-120h107.574l119.999,120H82.214
                                                    z M451,460.787L337.213,347L451,233.213V460.787z"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <input type="text" name="Email" placeholder="Enter Email" class="form-control">
                            </fieldset>
                            <fieldset >
                                <label for="username">Username</label>
                                <div class="form-control-position icone-personeLogin">
                                    <svg width="50" aria-hidden="true" class="svg-inline--fa fa-user fa-w-14 svg-icon-placeholder"  data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 1000 1500" >  
                                        <path fill="currentColor" 
                                        d="M313.6 288c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4zM416 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16v-41.6C32 365.9 77.9 320 134.4 320c19.6 0 39.1 16 89.6 16 50.4 0 70-16 89.6-16 56.5 0 102.4 45.9 102.4 102.4V464zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm0-224c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
                                        </path>
                                    </svg>
                                </div>
                                <input type="text" name="username" placeholder="Enter Username" class="form-control">
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <div class="form-control-position icone-personeLogin">
                                    <svg width="50" aria-hidden="true" class="svg-inline--fa fa-user fa-w-14 svg-icon-placeholder"  data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 1000 1500" >
                                        
                                        <path fill="currentColor" d="M336 32c79.529 0 144 64.471 144 144s-64.471 144-144 144c-18.968 0-37.076-3.675-53.661-10.339L240 352h-48v64h-64v64H32v-80l170.339-170.339C195.675 213.076 192 194.968 192 176c0-79.529 64.471-144 144-144m0-32c-97.184 0-176 78.769-176 176 0 15.307 1.945 30.352 5.798 44.947L7.029 379.716A24.003 24.003 0 0 0 0 396.686V488c0 13.255 10.745 24 24 24h112c13.255 0 24-10.745 24-24v-40h40c13.255 0 24-10.745 24-24v-40h19.314c6.365 0 12.47-2.529 16.971-7.029l30.769-30.769C305.648 350.055 320.693 352 336 352c97.184 0 176-78.769 176-176C512 78.816 433.231 0 336 0zm48 108c11.028 0 20 8.972 20 20s-8.972 20-20 20-20-8.972-20-20 8.972-20 20-20m0-28c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z"></path>
                                    </svg>
                                </div>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control" >
                            </fieldset>
                            <fieldset>
                                <label for="ConfirmePassword">Confirme Password </label>
                                <div class="form-control-position icone-personeLogin">
                                    <svg width="50" aria-hidden="true" class="svg-inline--fa fa-user fa-w-14 svg-icon-placeholder"  data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 1000 1500" >
                                        
                                        <path fill="currentColor" d="M336 32c79.529 0 144 64.471 144 144s-64.471 144-144 144c-18.968 0-37.076-3.675-53.661-10.339L240 352h-48v64h-64v64H32v-80l170.339-170.339C195.675 213.076 192 194.968 192 176c0-79.529 64.471-144 144-144m0-32c-97.184 0-176 78.769-176 176 0 15.307 1.945 30.352 5.798 44.947L7.029 379.716A24.003 24.003 0 0 0 0 396.686V488c0 13.255 10.745 24 24 24h112c13.255 0 24-10.745 24-24v-40h40c13.255 0 24-10.745 24-24v-40h19.314c6.365 0 12.47-2.529 16.971-7.029l30.769-30.769C305.648 350.055 320.693 352 336 352c97.184 0 176-78.769 176-176C512 78.816 433.231 0 336 0zm48 108c11.028 0 20 8.972 20 20s-8.972 20-20 20-20-8.972-20-20 8.972-20 20-20m0-28c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z"></path>
                                    </svg>
                                </div>
                                <input type="password" name="password" placeholder="Confirme Password" class="form-control" >
                            </fieldset>
                            <button type="submit" class="form-control button-Formulaire-login ">Register</button>
                            <label class="creation-compte"> Vous disposez d'un compte ? </label><br>
                            <span  onclick="connecterVousForm()">Connectez vous ! </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>
<script>
function initmodelLogin(){
    var createCompte = document.getElementById('model-createComopte');
        createCompte.style.display ='none'
    var login = document.getElementById('model-login');
        login.style.display = 'block' 
    var model = document.getElementById('formulaire-connexion-login');
    model.style.transform ='none';
    document.getElementById('close').style.marginLeft = "90%";
    document.getElementById('close').style.marginRight = "0%";
}
function creationCompteForm(){
    var model = document.getElementById('formulaire-connexion-login');
    model.style.transition = 'transform 0.6s';
    model.style.transform ='rotateY(180deg)';
   
    setTimeout(function(){
        var login = document.getElementById('model-login');
        login.style.display ='none'
    },200)
    setTimeout(function(){
        var createCompte = document.getElementById('model-createComopte');
        createCompte.style.display = 'block' 
        createCompte.style.visibility = 'visible';
        document.getElementById('close').style.marginRight = "90%";
        document.getElementById('close').style.marginLeft = "0%";
    }, 200)
}
function connecterVousForm(){
    var model = document.getElementById('formulaire-connexion-login');
    model.style.transition = 'transform 0.6s';
    model.style.transform ='none';  
    setTimeout(function(){
        var createCompte = document.getElementById('model-createComopte');
        createCompte.style.display ='none'
        
    },200)
    setTimeout(function(){
        var login = document.getElementById('model-login');
        login.style.display = 'block' 
        login.style.visibility = 'visible';
        document.getElementById('close').style.marginLeft = "90%";
        document.getElementById('close').style.marginRight = "0%";
    }, 200)
    
}
</script>
<style>
.modal-header  {
    border-bottom: none !important;
}
#close {
    border: none;
    background-color: white;
    position: absolute;
    margin-left: 90%;
}
#formulaire-connexion-login{
    animation-name: animatezoom;
    animation-duration: 0.5s;
}
 #model-createComopte , #model-login {
  background-color: white;
  z-index: 1;
  overflow: auto; /* Enable scroll if needed */
}
#model-createComopte {
    visibility :hidden;
    transform: rotatey(180deg);
    display: none;
}

.icone-personeLogin{
    position: absolute !important;
    padding-top: 5px !important;
}
@keyframes animatezoom {
  from {
      transform :  scale(0);
    }
  to {
      transform: scale(1);
    }
}

.button-Formulaire-login {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}
.button-Formulaire-login:hover {
  opacity: 0.8;
}
fieldset{
    padding-left: 7%;
    padding-right: 7%;
}
input[type=text], input[type=password] 
{
    margin-bottom : 4%;
    padding-left: 35px;
    border-radius: 6px;
}
.button-Formulaire-login {
    margin-bottom : 4%;
    width : 50%;
    border-radius  : 4px;
    margin-left : 25%;
}

label {
    font-weight:bold;
}
form div span {
    margin-left: 35%;
    color: blue;
    text-decoration: underline;
    cursor: pointer;
}
.creation-compte {
    padding-left: 25%;
    margin-bottom : 2%;
}
nav{
    overflow: hidden;
    background-color: #f1f1f1;
    transition: 0.4s;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 99;
}
nav ul {
    float: right;
    margin-right : 5%;
}
nav ul a {
    float: left;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px; 
    line-height: 25px;
    border-radius: 4px;
}
nav ul a:hover {
    background-color: #ddd;
    color: black;
}

nav ul .login {
    align-items: center;
    display: flex;
}
</style>
