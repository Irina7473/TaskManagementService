<x-app-layout>
    <div class="row">
        {{--   Sidebar--}}
        <div class="col-2 myfond3 mycolor ">
            <x-menu.sidebar></x-menu.sidebar>
        </div>

        {{-- Content --}}
        <div class="col-10 myfond2">
            <div class="divgroup">
                <form action="{{route('tasks.update', $task->id)}}" method="GET">
                    @csrf
                    <div class="divgroup">
                        <input type="hidden" name="id" value="{{$task->id}}">
                        <button class="btn btn-sm btn-info" id="basic-addon2">Сохранить</button>
                    </div>
                </form>
                <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                    @csrf @method('DELETE')
                    <input type="submit" class="btn btn-sm btn-danger" value="Удалить">
                </form>
            </div>
            <div class="mt-3">
                <div class="input-group mb-3">
                    <input name="taskName" class="form-control" placeholder="{{$task->taskName}}">
                </div>

                <div class="input-group mb-3">
                    <textarea name="description" class="form-control" placeholder="{{$task->description}}"></textarea>
                </div>
                <div>
                    <a>{{$task->taskName}}</a>
                    <a>{{$task->deadline}}</a>
                </div>
                <div>{{$task->description}}</div>
                <div>
                    @if($files->count() > 0)
                        @foreach($files as $file)
                            {{--            <div><audio id="audio_load" src="/{{$task->file_path}}" controls></audio></div>--}}
                            {{--                <a>{{$task->getFile()}}</td>--}}
                        @endforeach
                    @else
                        <div class="alert alert-info">
                            <a>Вложений нет</a>
                        </div>
                    @endif
                </div>
                <div>
                    @if($comments->count() > 0)
                        @foreach($comments as $comment)
                            <a>{{$comment->description}}</a>
                            <div class="divgroup">
                                <form action="{{route('tasks.update', $task->id)}}" method="GET">
                                    @csrf
                                    <div class="divgroup">
                                        <input type="hidden" name="id" value="{{$task->id}}">
                                        <button class="btn btn-sm btn-info" id="basic-addon2">Сохранить</button>
                                    </div>
                                </form>
                                <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                                    @csrf @method('DELETE')
                                    <input type="submit" class="btn btn-sm btn-danger" value="Удалить">
                                </form>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-info">
                            <a>Комментариев нет</a>
                        </div>
                    @endif
                        <form action="{{route('comments.store')}}" method="GET">
                            @csrf

                                <div class="mb-3">
                                    <textarea name="description" class="form-control" placeholder="Комментарий"></textarea>
                                </div>
                                <input type="hidden" name="task_id" value="{{$task->id}}">
                                <button class="btn btn-sm btn-info" id="basic-addon2">Добавить комментарий</button>
                                <button class="btn btn-sm btn-info" id="basic-addon2">Добавить вложение</button>
                        </form>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>








