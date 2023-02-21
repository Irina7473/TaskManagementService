<x-app-layout>
    <div class="row">
        {{--   Sidebar--}}
        <div class="col-2 myfond3 mycolor ">
            <x-menu.sidebar></x-menu.sidebar>
        </div>

        {{-- Content --}}
        <div class="col-10 myfond2">


            <form action="{{route('tasks.update', $task->id)}}" method="POST" enctype="multipart/form-data">
                @csrf  @method('PUT')
                <div class="divgroup mt-3">
                    <button class="btn btn-sm btn-info" id="basic-addon2">Сохранить</button>
                </div>

                <div class="mt-3">
                    <input name="taskName" class="form-control" value="{{$task->taskName}}">
                </div>

                <div class="input-group mt-3">
                    <input name="label_id" class="form-control" placeholder="Метка">
                    <input name="deadline" class="form-control" placeholder="Срок">
                    <input name="" class="form-control" placeholder="Напоминание">
                    <input name="" class="form-control" placeholder="Участники">
                    <input type="hidden" name="project_id" value="{{$task->project_id}}">
                </div>

                <div class="mt-3">
                    <textarea name="description" class="form-control" placeholder="Описание">{{$task->description}}</textarea>
                </div>
            </form>

{{--            Вложения--}}
                <div class="mt-3">
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

{{--            Комментарии--}}
                <div class="mt-3">
                    @if($comments->count() > 0)
                        @foreach($comments as $comment)
                            <div class="divgroup mt-3">
                                <form action="{{route('comments.update', $comment->id)}}" method="POST">
                                    @csrf  @method('PUT')
                                    <div class="divgroup">
                                        <input type="hidden" name="id" value="{{$task->id}}">
                                        <input name="description" class="form-control" value="{{$comment->description}}">
                                        <input type="submit" class="btn btn-sm btn-info" value="Сохранить" >
                                    </div>
                                </form>
                                <form action="{{route('comments.destroy', $comment->id)}}" method="POST">
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
                    <form action="{{route('comments.store')}}" method="POST">
                        @csrf
                        <div class="mt-3">
                            <textarea name="description" class="form-control" placeholder="Напишите комментарий"></textarea>
                        </div>
                        <input type="hidden" name="task_id" value="{{$task->id}}">
                        <button class="btn btn-sm btn-info" id="basic-addon2">Добавить комментарий</button>
                        <button class="btn btn-sm btn-info" id="basic-addon2">Добавить вложение</button>
                    </form>
                </div>


            <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                @csrf @method('DELETE')
                <input type="submit" class="mt-3 btn btn-sm btn-danger" value="Удалить">
            </form>


            {{-- --}}{{----}}{{--   <div class="mt-3">
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
    --}}
        </div>
    </div>
</x-app-layout>








