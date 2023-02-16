@section('subtitle', 'Изменить рабочее пространство')

<x-app-layout>

    <form action="{{route('fields.update', $field->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf  @method('PUT')

        <div class="input-group mb-3">
            <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}">
        </div>

        <div class="input-group mb-3">
            <input type="text" name="fieldName" class="form-control" placeholder="{{$field->fieldName}}">
        </div>

        <div class="input-group mb-3" >
            <textarea name="" class="form-control">
                Пригласить участников - сделать отправку приглашения на почту!!
            </textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Загрузка фона рабочего пространства</label>
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>

            <input type="file" name="fond" class="form-control">
        </div>

        <button class="input-group-text" id="basic-addon2">Сохранить</button>
    </form>
</x-app-layout>
