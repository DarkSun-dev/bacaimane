@extends('layouts.app')
@section('title','Editar Definições')
@section('content')
    <section class="content-header">
        <h1>
            Definições
        </h1>
   </section>
   <div class="content">
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($setting, ['route' => ['settings.update', $setting->id], 'method' => 'patch']) !!}

                        @include('settings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
