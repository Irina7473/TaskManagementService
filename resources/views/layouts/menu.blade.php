<nav class="navbar navbar-expand-lg navbar-dark myfond1">

    <ul class="nav-item mb-lg-0 px-0">
        <h2 class="myservis">Task Servis</h2>
    </ul>



    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        {{-- Выделить в отдельный макет--}}
            <ul class="nav-item mb-lg-0 px-lg-2">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#"
                       role="button" aria-haspopup="true" aria-expanded="false">
                        Рабочие пространства</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Создать новое рабочее пространство</a>
                    </div>
                </li>
            </ul>

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
    </div>
        {{--Нужно обработать поиск по приложению--}}
        <form class="input-group mb-3 col align-self-center " action="#" method="POST">
            <input class="form-control me-2" type="search" placeholder="Поиск по приложению" aria-label="Search">
            <button class="btn btn-defaul" type="submit">Найти</button>
        </form>

        <div class="">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="text-sm text-light">{{ Auth::user()->name }}</a>
                <x-responsive-nav-link :href="route('logout')" class="underline text-sm text-light"
                                       onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Выйти') }}
                </x-responsive-nav-link>
            </form>
        </div>

</nav>
