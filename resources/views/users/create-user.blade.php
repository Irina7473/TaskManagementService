
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

