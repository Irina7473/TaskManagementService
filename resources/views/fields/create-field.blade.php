@section('subtitle', 'Новое рабочее пространство')

<x-app-layout>

    <form action="{{route('fields.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf

        <div class="input-group mb-3">
            <input type="text" name="fieldName" class="form-control" placeholder="Наименование">
        </div>

        <div class="input-group mb-3" >
            <textarea name="" class="form-control" placeholder="Пригласить участников - сделать!!"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Загрузка темы</label>
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>

            <input type="file" name="file_path" class="form-control">
        </div>

        <button class="input-group-text" id="basic-addon2">Добавить</button>
    </form>
</x-app-layout>


