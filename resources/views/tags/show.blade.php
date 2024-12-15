@extends('layouts.app')
@section('title','Mostrar '.ucfirst(config('settings.tags_label_singular')))
@section('content')
    <section class="content-header">
        <h1>
            {{ucfirst(config('settings.tags_label_singular'))}}
            <span class="pull-right">
            <a href="{{ route('tags.index') }}" class="btn btn-default">
                <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar
            </a>
            <a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-primary">
                <i class="fa fa-edit" aria-hidden="true"></i> Editar
            </a>
            {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'delete','style'=>'display:inline']) !!}
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
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tag" data-toggle="tab"
                                      aria-expanded="true">{{ucfirst(config('settings.tags_label_singular'))}}</a>
                </li>
                @can('user manage permission')
                    <li class=""><a href="#tab_permissions" data-toggle="tab"
                                    aria-expanded="false">permissões</a>
                    </li>
                @endcan
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tag">
                    @include('tags.show_fields')
                </div>
                @can('user manage permission')
                    <div class="tab-pane" id="tab_permissions">
                        <div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th colspan="3" style="font-size: 1.8rem;">Permissões de {{ucfirst(config('settings.document_label_plural'))}} nesta {{config('settings.tags_label_singular')}}</th>
                                </tr>
                                <tr>
                                    <th>Usuário</th>
                                    <th>Permissões</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (count($tagWisePermList)==0)
                                    <tr>
                                        <td colspan="3">Nenhuma gravação encontrada</td>
                                    </tr>
                                @endif
                                @foreach ($tagWisePermList as $perm)
                                    <tr>
                                        <td>{{$perm['user']->name}}</td>
                                        <td>
                                            @foreach ($perm['permissions'] as $p)
                                                <label class="label label-default">{{$p}}</label>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th colspan="3" style="font-size: 1.8rem;">Permissão herdada de forma global{{config('settings.document_label_plural')}}</th>
                                </tr>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Permissões</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (count($globalPermissionUsers)==0)
                                    <tr>
                                        <td colspan="2">Nenhuma gravação encontrada</td>
                                    </tr>
                                @endif
                                @foreach ($globalPermissionUsers as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>
                                            @foreach(config('constants.GLOBAL_PERMISSIONS.DOCUMENTS') as $perm_key=>$value)
                                                @if ($user->can($perm_key))
                                                    <label class="label label-default">{{$value}}</label>
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endcan
            </div>
        </div>
    </div>
@endsection
