@extends('layouts.app')
@section('title','Novo usuario')
@section('content')
    <section class="content-header">
        <h1>
            Usuário
        </h1>
    </section>
    <div class="content">

        {!! Form::open(['route' => 'users.store']) !!}

        @include('users.fields')

        {!! Form::close() !!}
    </div>
@endsection
