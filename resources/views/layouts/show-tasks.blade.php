
@extends('fields.index')

@section('subtitle', $selected->projektName . ' Задачи')

@section('workingField')

    <div>
        <div class="container mt-3">
            @if($tasks->count() > 0)

                <table class="table">
                    <thead>
                    <tr>
                        <th>Наименование</th>
                        <th>Проект</th>
                        <th>Файлы</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->taskName}}</td>
                            <td>{{$task->project_id}}</td>
                            <td>
{{--                                <div><audio id="audio_load" src="/{{$task->file_path}}" controls></audio></div>--}}
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

    {{--
    <form action="{{route('$tasks.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf

        <div class="input-group mb-3">
            <input type="text" name="title" class="form-control" placeholder="Заголовок">
        </div>

        <div class="input-group mb-3" >
            <textarea name="content" class="form-control" placeholder="Описание"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Загрузка файла</label>
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>

            <input type="file" name="file_path" class="form-control">
        </div>

        <button class="input-group-text" id="basic-addon2">Добавить</button>
    </form>
    --}}

@endsection







