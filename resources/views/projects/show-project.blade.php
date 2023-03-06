<x-app-layout>
    <div class="row">
        {{--   Sidebar--}}
        <div class="col-2 myfond3 mycolor ">
{{--            <x-sidebar field="$field" field_id="$field->id" field_name="{{$field->fieldName}}"></x-sidebar>--}}
            <div class="col-2 myfond3 mycolor ">
                @if (isset($field))
                    <div class="col-2 mycolor ">
                        <h4 class="nav-link mycolor">{{$field->fieldName}}</h4>
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
                    </div>
                @endif
            </div>

        </div>

        {{-- Content --}}

            @if (isset($field->fond))
                <div class="col-10 img" style="background-image: url({{$field->getFile()}})">
                    @else
                        <div class="col-10 myfond2">
                            @endif

                            <h4 class="mycolor">Список задач проекта {{$selected->projectName}}</h4>
                            <div class="mt-3">
                                @if($tasks->count() > 0)

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Наименование</th>
                                            <th>Метка</th>
                                            <th>Срок</th>
                                            <th>Вложения</th>
                                            <th>Комментарии</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tasks as $task)
                                            <tr>
                                                <td>{{$task->taskName}}</td>
                                                <td>Здесь будет метка</td>
                                                <td>{{$task->deadline}}</td>
                                                <td>{{$task->files()->count()}}</td>
                                                <td>{{$task->comments()->count()}}</td>
                                                <td>

                                                    <div class="divgroup">
                                                        <div>
                                                            <a type="submit" class="btn btn-sm btn-info"
                                                               href="{{route('tasks.show', $task->id)}}">Открыть</a>
                                                        </div>
                                                        <form action="{{route('tasks.destroy', $task->id)}}"
                                                              method="POST">
                                                            @csrf @method('DELETE')
                                                            <input type="submit" class="btn btn-sm btn-danger"
                                                                   value="Удалить">
                                                        </form>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                @else
                                    <div class="alert alert-info">
                                        <h3>Записей не найдено</h3>
                                    </div>
                                @endif

                                <form action="{{route('tasks.store', $selected->id)}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input name="taskName" class="form-control" placeholder="Заголовок">
                                        <input name="label_id" class="form-control" placeholder="Метка">
                                        <input name="deadline" class="form-control" placeholder="Срок">
                                        <input type="hidden" name="project_id" value="{{$selected->id}}">
                                        <button class=" btn-primary" id="basic-addon2">Добавить задачу</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                </div>
        </div>

</x-app-layout>

