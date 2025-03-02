@extends('layouts.app')
@section('title','Mostrar o tipo de '.ucfirst(config('settings.file_label_singular')))
@section('content')
    <section class="content-header">
        <h1>
            {{ucfirst(config('settings.file_label_singular'))}} Tipo

            <span class="pull-right">
                <a href="{{ route('fileTypes.index') }}" class="btn btn-default">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar
                </a>

                <a href="{{ route('fileTypes.edit',$fileType->id) }}" class="btn btn-primary">
                    <i class="fa fa-edit" aria-hidden="true"></i> Editar
                </a>
                {!! Form::open(['route' => ['fileTypes.destroy', $fileType->id], 'method' => 'delete','style'=>'display:inline']) !!}
                {!! Form::button('<i class="fa fa-trash"></i> Delete', [
                'type' => 'submit',
                'title' => 'Eliminar',
                'class' => 'btn btn-danger',
                'onclick' => "return conformDel(this,event)",
                ]) !!}
                {!! Form::close() !!}
            </span>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('file_types.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
