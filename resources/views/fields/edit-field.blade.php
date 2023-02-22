<x-app-layout>
    <div class="row">
        {{--   Sidebar--}}
        <div class="col-2 myfond3 mycolor ">
            <x-menu.sidebar></x-menu.sidebar>
        </div>

        {{-- Content --}}
        <div class="col-10 myfond2">
            <h4 class="text-primary bg-light">Изменить рабочее пространство</h4>

            <form action="{{route('fields.update', $field->id)}}" method="POST" enctype="multipart/form-data">
                @csrf  @method('PUT')

                <div class="input-group mb-3">
                    <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}">

                </div>

                <div class="input-group mb-3">
                    <input type="text" name="fieldName" class="form-control" value="{{$field->fieldName}}">
                </div>

                <div class="input-group mb-3">
            <textarea name="" class="form-control">
                Пригласить участников - сделать отправку приглашения на почту!!
            </textarea>
                </div>
                @if ($field->fond)

                    <div class="mb-3" style="display: block;height: 100px">
                        <label class="form-label">Загружен фон</label>
                        <img style="height:100%" src="{{$field->getFile()}}" alt>
{{--                        <input type="submit" name="delfond" class="btn btn-sm btn-danger" value="Удалить">--}}
                    </div>

                @endif
                <div class="mb-3">
                    <label class="form-label text-primary">Загрузить фон для рабочего пространства</label>
                    <div class="text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>

                    <input type="file" name="fond" class="form-control">
                </div>

                <button class="btn btn-sm btn-info" id="basic-addon2">Сохранить</button>
            </form>

        </div>
    </div>
</x-app-layout>
