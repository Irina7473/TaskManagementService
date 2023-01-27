
{{--error--}}

{{--@extends('app')

@section('input')--}}

<div class="container mt-5">

    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="userName" placeholder="Логин для входа">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="pass1" placeholder="Пароль">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="pass2" placeholder="Повторите пароль">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="field" placeholder="Название пространства">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="regbtn">Регистрация</button>
        </div>
    </form>

</div>

{{--@endsection--}}


{{--

<?php
/*if(isset($_SESSION['ruser'])) exit();

echo '<h3>Форма регистрации</h3><hr>';
if (!isset($_POST['regbtn'])) {
*/?>
--}}

<!--

<form action="#" method="post">

    <div class="form-group">
        <label for="userName">Логин</label>
        <input type="text" class="form-control" name="userName">
    </div>

    <div class="form-group">
        <label for="pass1">Пароль</label>
        <input type="password" class="form-control" name="pass1">
    </div>

    <div class="form-group">
        <label for="pass2">Повторите пароль</label>
        <input type="password" class="form-control" name="pass2">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email">
    </div>

    <button type="submit" class="btn btn-primary" name="regbtn">Регистрация</button>

</form>
<hr>

{{----> <?php--}}
/*} else {

    if (register($_POST['userName'], $_POST['pass1'], $_POST['email'], 2)) {

        echo '<h3><span style="color:green;">Новый пользователь добавлен!</h3>';

    }
}

/** Registration */
/*function register($name, $pass, $email) {

    $name = trim(htmlspecialchars($name));
    $pass = trim(htmlspecialchars($pass));
    $email = trim(htmlspecialchars($email));

    //if ($role == '') $role = 2;

    if ($name == '' || $pass == '' || $email == '') {
        echo '<h3><span style="color:red;">Заполните все поля!</h3>';
        return false;
    }

    if (strlen($name) < 3 || strlen($name) > 30 || strlen($pass) < 3 || strlen($pass) > 30) {
        echo '<h3><span style="color:red;">Должно быть от 3 до 30 символов!</h3>';
        return false;
    }

    $ins = "INSERT INTO users(login, pass, email, role_id) VALUES('".$name."', '".md5($pass)."', '".$email."', '".$role."')";

    $connect = connect();
    mysqli_query($connect, $ins);
    $err = mysqli_connect_error();

    if ($err) {

        if ($err == 1062) {
            echo '<h3><span style="color:red;">Токой логин уже существует!</h3>';
        } else {
            echo '<h3><span style="color:red;">Код ошибки: '.$err.'!</h3>';
        }
        return false;
    }
    return true;
}*/
