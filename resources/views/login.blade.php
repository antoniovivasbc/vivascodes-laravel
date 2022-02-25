@extends('layouts.main')
@section('links')
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@section('content')
    <img src="img/logo.png" alt="" class="logo">
    <div class="login-container">
        <div class="login">
            Login
        </div>
        <form action="/vivascodes2.0/public/login" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" placeholder="Username" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="password" placeholder="Password" class="form-control input" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <a href="">Esqueceu a senha?</a>
            </div>
            <button type="submit" class="btn btn-primary submit">Login</button>
        </form>
    </div>
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
@endsection
<?php phpinfo();?>