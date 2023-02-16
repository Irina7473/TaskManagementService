@section('subtitle', 'Изменить проект')

<x-app-layout>

    <h4 class="text-primary"> для рабочего пространства {{$field->fieldName}}</h4>

    <form action="{{route('projects.update', $project->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf  @method('PUT')

        <div class="input-group mb-3">
            <input type="text" name="projectName" class="form-control" placeholder="{{$project->projectName}}">
        </div>

        <button class="input-group-text" id="basic-addon2">Сохранить</button>
    </form>
</x-app-layout>
