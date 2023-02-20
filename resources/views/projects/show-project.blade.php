
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

            <form action="{{route('tasks.create')}}" method="GET">
                @csrf
                <div class="divgroup">
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
                                <th>Срок</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->taskName}}</td>
                                    <td>{{$task->description}}</td>
                                    <td>{{$task->deadline}}</td>
                                    <td>

                                        <div class="divgroup">

                                            <div>
                                                <a type="submit" class="btn btn-sm btn-primary"
                                                   href="{{route('tasks.show', $task->id)}}">Посмотреть</a>
                                            </div>

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








