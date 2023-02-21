<x-app-layout>
    <div class="row">
        {{--   Sidebar--}}
        <div class="col-2 myfond3 mycolor ">

            {{--            <x-alert type="error" :message="$message"/>--}}
            <x-menu.sidebar>{{$field}}</x-menu.sidebar>
            {{--            @include('components.menu.sidebar', ['field' => $field])--}}

        </div>

        {{-- Content --}}
        <div class="col-10 myfond2">

            <div>
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

                    <form action="{{route('tasks.store', $selected->id)}}" method="POST" enctype="multipart/form-data">
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








