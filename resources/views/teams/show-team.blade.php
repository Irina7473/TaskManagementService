<x-app-layout>
    <div class="row">
        {{--   Sidebar--}}
        <div class="col-2 myfond3 mycolor ">
            @if (isset($field))
                <div class="col-2 mycolor ">
                    <h4 class="nav-link mycolor">{{$field->fieldName}}</h4>
                    <a class="nav-link mycolor" href="{{route('teams.show', $field->id)}}">Команда</a>

                    <nav class="navbar navbar-expand-lg ">
                        <div class="collapse navbar-collapse">
                            <ul class="nav flex-column ">
                                @foreach($projects ?? [] as $project)
                                    <li class="nav-item ">
                                        <div class="divgroup">
                                            <a class="nav-link mycolor"
                                               href="{{ route('projects.show', $project->id)}}">{{$project->projectName}}</a>
                                            <div>
                                                <a type="submit" class="btn btn-sm btn-info"
                                                   href="{{route('projects.edit', $project->id)}}">upd</a>
                                            </div>
                                            <form action="{{route('projects.destroy', $project->id)}}" method="POST">
                                                @csrf @method('DELETE')
                                                <input type="submit" class="btn btn-sm btn-danger" value="x">
                                            </form>
                                        </div>
                                    </li>

                                @endforeach

                                <li>
                                    <form action="{{route('projects.create')}}" method="GET">
                                        @csrf
                                        <div class="divgroup">
                                            <input type="hidden" name="field_id" value="{{$field->id}}">
                                            <button class="btn btn-sm btn-info" id="basic-addon2">
                                                Добавить новый проект
                                            </button>
                                        </div>
                                    </form>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            @endif
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


                        <h4 class="mycolor ">Пригласить нового участника</h4>

                        <form action="{{ route('invites.store') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="email" name="email" placeholder="email"/>
                            <button type="submit" class=" btn-info">Отправить приглашение</button>
                        </form>

                    </div>
            </div>
    </div>
</x-app-layout>

