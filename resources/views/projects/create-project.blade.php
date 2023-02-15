@section('subtitle', 'Новый проект')

<x-app-layout>

    <h4 class="text-primary"> для рабочего пространства {{$field->fieldName}}</h4>

    <form action="{{route('projects.store', $field->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf

{{--        <h4 name="field_id" class="text-primary"> {{$field->id}}</h4>--}}

        <div class="input-group mb-3">
            <input type="text" name="projectName" class="form-control" placeholder="Наименование">
        </div>

        <div class="input-group mb-3">
            <input type="text" name="field_id" class="form-control" value="{{$field->id}}">
        </div>

        {{--<div class="input-group mb-3" >
            <textarea name="" class="form-control" placeholder="Пригласить участников - сделать!!"></textarea>
        </div>--}}

        @error('fields_id')
        <small class="d-block alert alert-danger">Ошибка в заполнении : {{ $message }}</small>
        @enderror

        <button class="input-group-text" id="basic-addon2">Добавить</button>
    </form>
</x-app-layout>
