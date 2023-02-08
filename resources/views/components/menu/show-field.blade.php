<li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown"
       href="{{ route('users.show', Auth::user()->id)}}"
       role="button" aria-haspopup="true" aria-expanded="false">
        Рабочие пространства</a>
    <div class="dropdown-menu">
         {{--@foreach($fields as $field)
             <a class="dropdown-item"
                href="{{ route('fields.index', $field->id)}}">{{$field->fieldName}}</a>
         @endforeach--}}
        <a class="dropdown-item" href="#">Создать новое рабочее пространство</a>
    </div>
</li>


