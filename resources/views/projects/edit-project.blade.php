@section('subtitle', 'Изменить проект')

<x-app-layout>

    <form action="{{route('projects.update', $project->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf  @method('PUT')

        <div class="input-group mb-3">
            <input type="text" name="projectName" class="form-control" placeholder="Наименование">
        </div>

        <div class="input-group mb-3">
            <input type="text" name="fields_id" class="form-control" value="{{$field->id}}">
        </div>

        {{--<div class="input-group mb-3" >
            <textarea name="" class="form-control" placeholder="Пригласить участников - сделать!!"></textarea>
        </div>--}}

        @error('fields_id')
        <small class="d-block alert alert-danger">Ошибка в заполнении : {{ $message }}</small>
        @enderror

        <button class="input-group-text" id="basic-addon2">Сохранить</button>
    </form>
</x-app-layout>
