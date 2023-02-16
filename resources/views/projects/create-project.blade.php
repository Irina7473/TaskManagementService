@section('subtitle', 'Новый проект')

<x-app-layout>

    <h4 class="text-primary"> для рабочего пространства {{$field->fieldName}}</h4>

    <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf

        <div class="input-group mb-3">
            <input type="text" name="projectName" class="form-control" placeholder="Наименование">
        </div>

        <div class="input-group mb-3">
            <input type="hidden" name="field_id" class="form-control" value="{{$field->id}}">
        </div>

        <button class="input-group-text" id="basic-addon2">Добавить</button>
    </form>
</x-app-layout>
