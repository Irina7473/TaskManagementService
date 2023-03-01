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
                    <textarea name="description" class="form-control"
                              placeholder="Описание">{{$task->description}}</textarea>
                </div>
            </form>

            {{--            Вложения--}}
            <label class="form-label mt-3">Вложения</label>
            <div>
                @if($files->count() > 0)
                    @foreach($files as $file)
                       <div class="divgroup">
                           <a href="{{$file->getFile()}}">{{$file->getFileName()}}</a>
                           <form action="{{route('files.destroy', $file->id)}}" method="POST">
                               @csrf @method('DELETE')
                               <input type="submit" class="btn btn-sm btn-danger" value="x">
                           </form>
                       </div>
                    @endforeach
                @endif
            </div>

            <form action="{{route('files.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="divgroup mb-3">

                    <div class="text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>

                    <input type="file" name="appFile" >

                    <input type="hidden" name="task_id" value="{{$task->id}}">

                    <button class="btn btn-sm btn-info" id="basic-addon2">Прикрепить</button>
                </div>
            </form>

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
                                    <input type="submit" class="btn btn-sm btn-info" value="Изменить">
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
                </form>

            </div>


            <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                @csrf @method('DELETE')
                <input type="submit" class="mt-3 btn btn-sm btn-danger" value="Удалить">
            </form>

        </div>
    </div>
</x-app-layout>








