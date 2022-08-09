@extends('_includes.main_layout')
@section('title','E-Cultura')

@section('content')
<div class="container d-flex justify-content-center mt-5">
    <form action="{{route('update.workshop',$workshop->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-4">
            <label for="name">
                <h6 class="title-input-form cinza">Nome da Oficina</h6>
                <input class="form-control" type="text" name="name" value="{{$workshop->name}}">
            </label>
        </div>
        <div class="row">
            <label for="description">
                <h6 class="title-input-form cinza">Descrição</h6>
                <input class="form-control" type="text" name="description">
            </label>
        </div>
            <button class="btn btn-primary mt-4 float-end">Cadastrar Oficina</button>
    </form>
</div>


@endsection
