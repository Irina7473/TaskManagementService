{{--   Sidebar--}}
<div class="col-2 mycolor ">
    @if (isset($field))
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

                    <li>
                        <form action="{{route('projects.create')}}" method="GET">
                            @csrf
                            <div class="divgroup">
                                <input type="hidden" name="field_id" value="{{$field->id}}">
                                <button class="btn btn-sm btn-info" id="basic-addon2">
                                    Добавить новый проект
                                </button>
                            </div>
                        </form>
                    </li>

            </ul>
        </div>
    </nav>

    @else
        <div>
            <h4>Выберите рабочее пространство</h4>
        </div>
    @endif
</div>


