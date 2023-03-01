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

                        <h4 class="mycolor ">Команда  рабочего пространства {{$field->fieldName}}</h4>

                        <div class="mb-5 ">

                                @if($users->count() > 0)
                                    <div class="">
                                        @foreach($users ?? [] as $user)
                                            <div class="divgroup">
                                                <a >{{$user->name}}</a>

                                                <form action="#" method="POST">
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




                        </div>
</x-app-layout>









