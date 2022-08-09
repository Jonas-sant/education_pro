@extends('_includes.main_layout')
@section('title','E-Cultura')

@section('content')
    <main>
        <section class="container">
            <div class="row mt-4">
                <div class="col-lg-9" id="class_running">
                    @if(isset($class))

                        <h1 class="cinza">
                            {{$class->title}}
                        </h1>
                        <div id="video" class="col-md-12">
                            <iframe src="https://www.youtube.com/embed/{{$class->link_class}}" frameborder="0" class="video_class" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    @else
                        <div id="video" class="col-md-12 d-flex justify-content-center align-items-center text-secondary" style="border:1px solid #ccc;">
                            <h1>Sem aulas no momento</h1>
                        </div>
                    @endif
                </div>
                <div class="col-lg-3">
                    @if(Auth::user()->status != 'Aluno')
                        <div class="row btns-act">
                            <a href="#" class="btn btn-primary col-md-6"aria-pressed="false" data-bs-toggle="modal" data-bs-target="#new_workshop">Cadastrar Oficina</a>
                            <a href="#" class="btn btn-primary col-md-6" data-bs-toggle="modal" data-bs-target="#new_classes">Cadastrar Aula</a>
                        </div>
                    @endif
                    <div class="list-aulas" style="height:100%;margin-top:20%;">
                        @if(isset($workshops))
                                @foreach($workshops as $oficina)
                                <details>
                                    <summary class="title">{{$oficina->name}}
                                        @if(Auth::user()->status != 'Aluno')
                                            <div class="d-flex">
                                                <a href="{{route('edit.workshop',$oficina->id)}}" style="color:#000;">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </a>
                                                <form method="POST" action="/deleteWorkshop/{{$oficina->id}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="border:none;background:transparent;"><i class="bi bi-trash-fill" style="font-size:1.2em;color:#000;"></i></button>
                                                </form>
                                            </div>
                                        @endif
                                    </summary>

                                    <div class="description-aula">
                                        @foreach($oficina->classes as $aula)
                                        <div>
                                            <a class="link-video-aula" href="{{route('class.video',$aula->id)}}" style="text-decoration:none;">
                                                <div class="d-flex justify-content-between">
                                                    <h3 id="nome-aula" class="aula-title">{{$aula->title}}</h3>
                                                    <div class="d-flex">
                                                        <a href="{{route('edit.class',$aula->id)}}" style="color:#000;">
                                                            <i class="bi bi-pencil-fill"></i>
                                                    </a>
                                                        <form method="POST" action="/deleteClass/{{$aula->id}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" style="border:none;background:transparent;"><i class="bi bi-trash-fill" style="font-size:1.2em;color:#000;"></i></button>
                                                        </form>
                                                    </div>


                                                </div>

                                                <span class="profResponsavel">{{$aula->teacher_name}}</span>
                                            </a>
                                        </div>
                                        <hr class="div-list-aulas">
                                @endforeach
                                </div>
                            </details>
                            @endforeach
                        @else
                            <p>Nenhuma Aula ou oficina cadastrada ainda</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>



    @include('_includes.new_workshop')
    @include('_includes.new_classes')
@endsection
