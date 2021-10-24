@extends('layouts.main')
@section('links')
    <link rel="stylesheet" href="css/login.css">
@section('content')
    <img src="img/logo.png" alt="" class="logo">
    <div class="login-container">
        <div class="login">
            Login
        </div>
        <form>
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
    <script src="js/login.js"></script>
@endsection