<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nome:') !!}
    <p>{{ $user->name }}</p>
</div>


<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Endereço Eletrônico:') !!}
    <p>{{ $user->email }}</p>
</div>


<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Nome do Usuário:') !!}
    <p>{{ $user->username }}</p>
</div>


<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Endereço:') !!}
    <p>{{ $user->address }}</p>
</div>


<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Descrição:') !!}
    <p>{!! $user->description !!}</p>
</div>


<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Situação:') !!}
    <p>@php
            if($user->status==config('constants.STATUS.ACTIVE'))
                echo '<span class="label label-success">'.$user->status.'</span>';
            else
                echo '<span class="label label-danger">'.$user->status.'</span>';
        @endphp</p>
</div>

<!-- Created Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{{ formatDateTime($user->created_at) }}</p>
</div>

<!-- Created Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado em:') !!}
    <p>{{ formatDateTime($user->updated_at) }}</p>
</div>


