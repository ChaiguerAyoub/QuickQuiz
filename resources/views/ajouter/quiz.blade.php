@extends('layouts.main')

@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{ link_to('/') }}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">{{ link_to('/user/add_user') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

        <div class="col-sm-12">
            <div class="jumbotron fade show" role="alert">
                <span class="badge badge-pill "> Ajouter un utilisatuer </span>.
                </button>
            </div>
        </div>


        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <strong>Ajouter</strong> Quiz
                </div>
                <div class="card-body card-block">
                    {!! Form::open(['method' => 'POST', 'url' => '/quiz/nouveau_quiz', 'class' => 'form-horizontal form-label-left']) !!}
                    {{ csrf_field() }}

                    <div class="form-group">
                        {{ Form::label('libelle Quiz', null, ['class' => 'form-control-label']) }}
                        {{ Form::text('libelle_quiz', null, ['class' => 'form-control','placeholder'=>'Le nom du quiz']) }}
                    </div>
                </div>
                <div class="card-footer">

                    {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}

                    {!! Form::submit("Ajouter", ['class' => 'btn btn-success']) !!}

                    {{link_to(URL::previous(), 'Retour', ['class'=>'btn btn-primary'])}}


                    {!! Form::close() !!}

                </div>
            </div>




        </div>


    </div>


@endsection