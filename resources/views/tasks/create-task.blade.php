{{--
@section('subtitle', 'Новая задача')

<x-app-layout>

    <h4 class="text-primary"> для проекта {{$project->projectName}}</h4>

    <form action="{{route('tasks.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="input-group mb-3">
            <input name="taskName" class="form-control" placeholder="Заголовок">
        </div>

        <div class="input-group mb-3">
            <input type="hidden" name="project_id" class="form-control" value="{{$project->id}}">
        </div>

        <div class="input-group mb-3">
            <input name="deadline" class="form-control" placeholder="Срок"></input>
            <input name="deadline" class="form-control" placeholder="Метка"></input>
        </div>

        <div class="input-group mb-3">
            <textarea name="description" class="form-control" placeholder="Описание"></textarea>
        </div>


        <button class="input-group-text" id="basic-addon2">Добавить</button>
    </form>

</x-app-layout>
--}}
