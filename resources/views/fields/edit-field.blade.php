@section('subtitle', 'Изменить рабочее пространство')

<x-app-layout>

    <form action="{{route('fields.update', $field->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf  @method('PUT')

        <div class="input-group mb-3">
            <input type="text" name="fieldName" class="form-control" placeholder="{{$field->fieldName}}">
        </div>

        <div class="input-group mb-3" >
            <textarea name="" class="form-control" placeholder="Пригласить участников - сделать отправку приглашения на почту!!"></textarea>
        </div>

        <button class="input-group-text" id="basic-addon2">Сохранить</button>
    </form>
</x-app-layout>
