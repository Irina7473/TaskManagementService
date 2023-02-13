<nav class="navbar navbar-expand-lg navbar-dark myfond1">

    <div>
        <h2 class="mycolor" >Task Servis</h2>
    </div>

    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('users.show', Auth::user()->id)}}">Мои рабочие пространства</a>
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
    <form class="input-group mb-3 col align-self-end " action="#" method="POST">
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
