
<x-app-layout>
    <div class="row">
        {{--   Sidebar--}}
        <div class="col-2 myfond3 mycolor ">

            {{--            <x-alert type="error" :message="$message"/>--}}
            <x-menu.sidebar >{{$field}}</x-menu.sidebar>
            {{--            @include('components.menu.sidebar', ['field' => $field])--}}


        </div>

        {{-- Content --}}
        <div class="col-10 myfond2">

            {{--            <a href="{{route('tasks.create', $selected->id)}}" class="btn myfond3 mycolor">Добавить задачу</a>--}}

            <form action="{{route('tasks.create')}}" method="GET">
                @csrf
                <div class="divgroup">
                    {{--                    <a>Новый проект</a>--}}
                    <input type="hidden" name="field_id" value="{{$selected->id}}">
                    <button class="btn btn-sm btn-info" id="basic-addon2">Добавить задачу</button>
                </div>
            </form>

            <div>
                <div class="mt-3">
                    @if($tasks->count() > 0)

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Наименование</th>
                                <th>Описание</th>
                                <th>Файлы</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->taskName}}</td>
                                    <td>{{$task->description}}</td>
                                    <td>
                                        {{--            <div><audio id="audio_load" src="/{{$task->file_path}}" controls></audio></div>--}}
                                        {{--                <td>{{$task->getFile()}}</td>--}}
                                    </td>
                                    <td>

                                        <div class="divgroup">

                                            <div>
                                                <a type="submit" class="btn btn-sm btn-info"
                                                   href="{{route('tasks.edit', $task->id)}}">Изменить</a>
                                            </div>

                                            <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                                                @csrf @method('DELETE')
                                                <input type="submit" class="btn btn-sm btn-danger" value="Удалить">
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

                </div>
            </div>
        </div>
    </div>

</x-app-layout>








