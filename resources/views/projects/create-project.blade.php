<x-app-layout>
    <div class="row">
        {{--   Sidebar--}}
        <div class="col-2 myfond3 mycolor ">
            <x-menu.sidebar></x-menu.sidebar>
        </div>
        {{-- Content --}}
        @if (isset($field->fond))
            <div class="col-10 img" style="background-image: url({{$field->getFile()}})">
                @else
                    <div class="col-10 myfond2">
                        @endif

                        <h4 class="nav-link mycolor"> Новый проект для рабочего пространства {{$field->fieldName}}</h4>

                        <form action="{{route('projects.store')}}" method="POST">
                            @csrf

                            <div class="input-group mb-3">
                                <input type="text" name="projectName" class="form-control" placeholder="Наименование">
                            </div>

                            <div class="input-group mb-3">
                                <input type="hidden" name="field_id" class="form-control" value="{{$field->id}}">
                            </div>

                            <button class="btn btn-sm btn-info" id="basic-addon2">Добавить</button>
                        </form>
                    </div>
            </div>
    </div>
</x-app-layout>
