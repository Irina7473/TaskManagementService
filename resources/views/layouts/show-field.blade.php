{{--@extends('layouts.app')

@section('listFields')--}}
{{--    @parent--}}

<x-app-layout>
    <div>
        <h4> Рабочие пространства</h4>
        @if (is_iterable($fields))
        @if($fields->count() > 0)
            <div>
                @foreach($fields ?? [] as $field)
                    <div  href="#">{{$field->fieldName}}</div>
                @endforeach

            </div>
        @else
            <div class="alert alert-info">
                <h3>Записей не найдено</h3>
            </div>
        @endif
        @else
            <div class="alert alert-danger">
                <h3>Ошибка: полученное значение не итерируется</h3>
            </div>
        @endif
        <a class="" href="#">Создать новое рабочее пространство</a>
    </div>
</x-app-layout>

{{--@endsection--}}

