{{--
@section('subtitle', 'Изменение задачи')

<x-app-layout>

    <h4 class="text-primary"> для проекта {{$project->projectName}}</h4>

    <form action="{{route('tasks.update', $task->id)}}" method="POST" enctype="multipart/form-data">
        @csrf  @method('PUT')

        <div class="input-group mb-3">
            <input name="taskName" class="form-control" placeholder="{{$task->taskName}}">
        </div>

        <div class="input-group mb-3">
            <textarea name="description" class="form-control" placeholder="{{$task->description}}"></textarea>
        </div>

        <button class="input-group-text" id="basic-addon2">Сохранить</button>
    </form>

</x-app-layout>
--}}
