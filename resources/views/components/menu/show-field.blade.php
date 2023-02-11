<li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown"
       href="{{ route('teams.show', Auth::user()->id)}}"
       role="button" aria-expanded="false">
        Рабочие пространства</a>
    <ul class="dropdown-menu">
        {{-- @foreach($fields as $field)
             <a class="dropdown-item"
                href="{{ route('fields.index', $field->id)}}">{{$field->fieldName}}</a>
         @endforeach--}}
        <a class="dropdown-item" href="{{ route('fields.create')}}">Создать новое рабочее пространство</a>
    </ul>
</li>

