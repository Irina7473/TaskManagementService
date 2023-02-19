<x-app-layout>

    <div class="row">
        {{--   Sidebar--}}
        <div class="col-2 myfond3 mycolor ">
            @if (isset($field))
                <div class="col-2 mycolor ">
                    <h4 class="nav-link mycolor">{{$field->fieldName}}</h4>
        {{--  Сделать изменение состава команды--}}
                    <a class="nav-link mycolor" href="{{route('teams.show', $field->id)}}">Команда</a>

                    <nav class="navbar navbar-expand-lg ">
                        <div class="collapse navbar-collapse">
                            <ul class="nav flex-column ">
                                @foreach($projects ?? [] as $project)
                                    <li class="nav-item ">
                                        <div class="divgroup">
                                            <a class="nav-link mycolor"
                                               href="{{ route('projects.show', $project->id)}}">{{$project->projectName}}</a>
                                            <div>
                                                <a type="submit" class="btn btn-sm btn-info"
                                                   href="{{route('projects.edit', $project->id)}}">upd</a>
                                            </div>
                                            <form action="{{route('projects.destroy', $project->id)}}" method="POST">
                                                @csrf @method('DELETE')
                                                <input type="submit" class="btn btn-sm btn-danger" value="x">
                                            </form>
                                        </div>
                                    </li>

                                @endforeach
                                @if (isset($field))
                                    <li>
                                        <form action="{{route('projects.create')}}" method="GET">
                                            @csrf
                                            <div class="divgroup">
                                                <a>Новый проект</a>
                                                <input type="hidden" name="field_id" value="{{$field->id}}">
                                                <button class="btn btn-sm btn-info" id="basic-addon2">Добавить</button>
                                            </div>
                                        </form>
                                    </li>
                                @else
                                    <li>
                                        <a>Не могу добавить новый проект</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            @endif
        </div>

        {{-- Content --}}
        <div class="col-10 myfond2">

            @if (isset($field))
                                <h4 class="nav-link mycolor" >Здесь будут ваши задачи</h4>

            @else
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                Вы вошли!
                                @section('workingField')
                                @show
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>


</x-app-layout>





