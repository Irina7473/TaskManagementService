@extends('layouts.app')

@section('workingField')
    @parent

{{--    @section('subtitle', 'Задачи')--}}

    <a href="{{route('tasks.create', $selected->id)}}" class="btn myfond3 mycolor">Добавить</a>
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
                            <td>{{$task->content}}</td>
                            <td>
   {{--            <div><audio id="audio_load" src="/{{$task->file_path}}" controls></audio></div>--}}
  {{--                <td>{{$task->getFile()}}</td>--}}
                            </td>
                            <td>
                                <div class="divgroup">
                                    <div><input type="submit" name="changetask" value="Изменить"
                                           href="{{route('tasks.edit', $task->id)}}" class="btn btn-sm btn-info"></div>
                                    <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                                        @csrf @method('DELETE')
                                        <input type="submit" name="deltask" value="Удалить" class="btn btn-sm btn-danger">
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

@endsection







