{{--@extends('fields.index')

@section('subtitle', 'Новая задача')

@section('workingField')--}}

<form action="#" method="POST" enctype="multipart/form-data" >
       @csrf

       <div class="input-group mb-3">
           <input type="text" name="title" class="form-control" placeholder="Заголовок">
       </div>

       <div class="input-group mb-3" >
           <textarea name="content" class="form-control" placeholder="Описание"></textarea>
       </div>

       <div class="mb-3">
           <label class="form-label">Загрузка файла</label>
           <div class="spinner-border text-primary" role="status">
               <span class="visually-hidden">Loading...</span>
           </div>

           <input type="file" name="file_path" class="form-control">
       </div>

       <button class="input-group-text" id="basic-addon2">Добавить</button>
   </form>

{{--@endsection--}}
