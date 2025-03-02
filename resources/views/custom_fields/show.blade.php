@extends('layouts.app')
@section('title','Mostrar campos personalizados')
@section('content')
    <section class="content-header">
        <h1>
            Campos Personalizados
            <span class="pull-right">
                <a href="{{ route('customFields.index') }}" class="btn btn-default">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar
                </a>
                <a href="{{ route('customFields.edit',$customField->id) }}" class="btn btn-primary">
                    <i class="fa fa-edit" aria-hidden="true"></i> Editar
                </a>
                {!! Form::open(['route' => ['customFields.destroy', $customField->id], 'method' => 'delete','style'=>'display:inline']) !!}
                {!! Form::button('<i class="fa fa-trash"></i> Eliminar', [
                'type' => 'submit',
                'title' => 'Delete',
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
                    @include('custom_fields.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
