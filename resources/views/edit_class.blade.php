@extends('_includes.main_layout')
@section('title','E-Cultura')

@section('content')

<div class="container">
    <form action="{{route('update.class',$class->id)}}" method="POST" class="flex flex-col">
        @csrf
        @method('PUT')
        <div class="row">
            <label for="name">
                <h6 class="title-input-form mt-3 cinza">Nome da Aula</h6>
                <input class="form-control" type="text" name="title" value="{{$class->title}}">
            </label>
        </div>

        <div class="row">
            <label for="description">
                <h6 class="title-input-form mt-3 cinza">Link</h6>
                <input class="form-control" type="text" name="link_class" value="{{$class->link_class}}">
            </label>
        </div>

        <div class="row">
            <label for="teacher">
                <h6 class="title-input-form mt-3 cinza">Professor Responsavel</h6>
                <input class="form-control" type="text" name="teacher_name" value="{{$class->teacher_name}}">
            </label>
        </div>


        <button class="btn btn-primary mt-3 float-end">Cadastrar Aula</button>
    </form>
</div>



@endsection
