@extends('layouts.app')
@section('title','Editar usuario')
@section('content')
    <section class="content-header">
        <h1>
            Usuário
        </h1>
    </section>
    <div class="content">
        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

        @include('users.fields')

        {!! Form::close() !!}
    </div>
@endsection
