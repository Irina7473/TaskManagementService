@extends('app')

{{--@section('door')--}}

    {{-- Top Menu --}}
    @include('layouts.menu')

    <div class="">
        <div class="row">
            {{--    Sidebar--}}

{{--            @include('layouts.sidebar')--}}

            <div class="col-2 myfond3 mycolor ">
{{--                Выбор проекта для показа задач не видит $field--}}
{{--                <h4 class="nav-link bg-light mycolor" href="#">{{$field->fieldName}}</h4>--}}
                <nav class="navbar navbar-expand-lg ">
                    <div class="collapse navbar-collapse">
                        <ul class="nav flex-column ">
                            @foreach($projects as $project)
                                <li class="nav-item ">
                                    <a class="nav-link mycolor" href="{{ route('tasks.show', $project->id)}}">{{$project->projectName}}</a>
                                </li>
                            @endforeach
                            <li>
                                <a class="nav-link mycolor" href="{{ route('projects.create')}}">Добавить</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>


            {{-- Content --}}
            <div class="col-10 myfond2">
                <div class="body-content">
                    <h3 class="text-primary myfond2 mycolor">@yield('subtitle', '')</h3>
                    <div class="container mt-5 text-danger" >
{{--                        <img src="/uploads/images/Itkul1.jpg" alt="" class=»background» />--}}
                        @yield('workingField', 'РАБОЧЕЕ ПОЛЕ')
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--@endsection--}}
