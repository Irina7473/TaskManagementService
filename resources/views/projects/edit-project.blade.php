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

                        <h4 class=" mycolor">Изменить проект для рабочего пространства {{$field->fieldName}}</h4>

                        <form action="{{route('projects.update', $project->id)}}" method="POST">
                            @csrf  @method('PUT')

                            <div class="input-group mb-3">
                                <input type="text" name="projectName" class="form-control"
                                       placeholder="{{$project->projectName}}">
                            </div>

                            <button class="btn btn-sm btn-info" id="basic-addon2">Сохранить</button>
                        </form>
                    </div>
            </div>
    </div>
</x-app-layout>
