<x-app-layout>
    <div class="row">
        {{--   Sidebar--}}
        <div class="col-2 myfond3 mycolor ">
            <x-menu.sidebar></x-menu.sidebar>

        </div>

        {{-- Content --}}
        <div class="col-10 myfond2">
            <h4 class="text-primary bg-light">Рабочие пространства</h4>

            <div class="mb-5 ">

                @if (is_iterable($fields))

                    @if($fields->count() > 0)
                        <div class="">
                            @foreach($fields ?? [] as $field)
                                <div class="divgroup">
                                    <a href="{{ route('fields.show',$field->id)}}">{{$field->fieldName}}</a>
                                    <div>
                                        <a type="submit" class="btn btn-sm btn-info"
                                           href="{{route('fields.edit', $field->id)}}">upd</a>
                                    </div>
                                    <form action="{{route('fields.destroy', $field->id)}}" method="POST">
                                        @csrf @method('DELETE')
                                        <input type="submit" class="btn btn-sm btn-danger" value="x">
                                    </form>
                                </div>
                            @endforeach

                        </div>
                    @else
                        <div class="alert alert-info">
                            <a>Записей не найдено</a>
                        </div>
                    @endif
                @else
                    <div class="alert alert-danger">
                        <h3>Ошибка: полученное значение не итерируется</h3>
                    </div>
                @endif

{{--                Создание нового рабочего пространства--}}

                <form action="{{route('fields.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mt-5">
                        <label class="text-primary">Создать новое рабочее пространство</label>
                        <div>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="fieldName" class="form-control" placeholder="Наименование">
                        </div>

                        <label class="text-primary">Загрузка фона рабочего пространства</label>
                        <div class="divgroup mb-3">

                            <div class="text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                            <input type="file" name="fond" class="form-control">
                        </div>
                    </div>

                    <button class="btn btn-sm btn-info" id="basic-addon2">Сохранить</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>

