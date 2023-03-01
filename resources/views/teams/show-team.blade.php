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

                        <h4 class="mycolor ">Команда рабочего пространства {{$field->fieldName}}</h4>

                        <div class="mb-5 ">

                            @if($users->count() > 0)
                                <div class="">
                                    <a>{{Auth::user()->name}}</a>
                                    @foreach($teams ?? [] as $team)
                                        <div class="divgroup">
                                            @if ($team->user->id != Auth::user()->id)
                                                <a>{{$team->user->name}}</a>
                                                <form action="{{route('teams.destroy', $team->id)}}"
                                                method="POST">
                                                @csrf @method('DELETE')
                                                {{--<input type="hidden" name="field_id" value="{{$field->id}}">
                                                <input type="hidden" name="user_id" value="{{$user->id}}">--}}
                                                <input type="submit" class="btn btn-sm btn-danger" value="x">
                                                </form>
                                            @endif
                                        </div>
                                    @endforeach

                                </div>
                            @else
                                <div class="alert alert-info">
                                    <a>Записей не найдено</a>
                                </div>
                            @endif
                        </div>
                        <form action="#" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input name="taskName" class="form-control" placeholder="Почта нового участника">
                                <button class=" btn-info" id="basic-addon2">Отправить приглашение</button>
                            </div>
                        </form>
                    </div>
            </div>
    </div>
</x-app-layout>









