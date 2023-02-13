@if (isset($field))
    <div class="col-2 mycolor ">
        <h4 class="nav-link mycolor" href="#">{{$field->fieldName}}</h4>
        <nav class="navbar navbar-expand-lg ">
            <div class="collapse navbar-collapse">
                <ul class="nav flex-column ">
                    @foreach($projects ?? [] as $project)
                        <li class="nav-item ">
                            <a class="nav-link mycolor"
                               href="{{ route('tasks.show', $project->id)}}">{{$project->projectName}}</a>
                        </li>
                    @endforeach
                    <li>
                        <a class="nav-link mycolor" href="{{ route('projects.create')}}">Добавить</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

@else
    <div class="mb-5 mycolor">
        Здесь будут ваши проекты
    </div>
@endif

