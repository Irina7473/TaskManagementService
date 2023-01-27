@extends('app')

@section('door')

    <div class="container mt-5">
        <div class="row">

            <div class="col-8">
                <img src="/uploads/images/Absakovo1.jpg" class="img-fluid float-left">
            </div>

            <div class="col-4">
                <div class="container mt-3">
                    <h2 class="mycolor">Task Servis </h2>
                </div>
                <div class="container mt-5">
                    <h4 class="text-primary mt-5">Выполните вход</h4>
                    <form action="{{route('fields.index')}}" method="POST">
                        <div class="card">
                            @csrf
                            <input type="text" name="login" class="nav-link" placeholder="Логин или email">
                            <input type="password" name="pass" class="nav-link" placeholder="Пароль">
                            <input type="submit" id="press" value="Войти" class="btn btn-outline-primary" name="press">
                            <a class="nav-link" href="#">Не удается войти?</a>
                            <a class="nav-link" href="{{ route('users.create') }}">Регистрация</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

