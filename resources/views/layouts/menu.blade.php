<nav class="navbar navbar-expand-lg navbar-dark myfond1">
    <ul class="nav-item mb-lg-0 px-0">
        <h2 class="myservis">Task Servis</h2>
    </ul>
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Доски</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Календарь</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Список</a>
                </li>
            </ul>
        </div>

        {{--Нужно обработать поиск по приложению--}}
        <form class="input-group mb-3 col align-self-end " action="#" method="POST">
            <input class="form-control me-2" type="search" placeholder="Поиск по приложению" aria-label="Search">
            <button class="btn btn-defaul" type="submit">Найти</button>
        </form>

    </div>
</nav>
