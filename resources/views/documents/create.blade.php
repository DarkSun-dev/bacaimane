@extends('layouts.app')
@section('title',"Adicionar Pasta")
@section('content')
    <section class="content-header">
        <h1>
            <!---{{ucfirst(config('settings.document_label_singular'))}}--->Pastas
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'documents.store']) !!}
                        @include('documents.fields',['document'=>null])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
