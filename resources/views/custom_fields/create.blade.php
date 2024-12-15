@extends('layouts.app')
@section('title','Novos campos personalizados')
@section('content')
    <section class="content-header">
        <h1>
            Campos Personalizados
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'customFields.store']) !!}

                        @include('custom_fields.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
