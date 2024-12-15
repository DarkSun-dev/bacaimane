<!-- Model Type Field -->
<div class="form-group col-sm-6 {{ $errors->has('model_type') ? 'has-error' :'' }}">
    {!! Form::label('model_type', 'Tipo de Modelo:') !!}
    {!! Form::select('model_type', config('settings_array.model_types_plural'), null, ['class' => 'form-control select2']) !!}
    {!! $errors->first('model_type','<span class="help-block">:message</span>') !!}
</div>


<!-- Name Field -->
<div class="form-group col-sm-6 {{ $errors->has('name') ? 'has-error' :'' }}">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! $errors->first('name','<span class="help-block">:message</span>') !!}
</div>


<!-- Validation Field -->
<div class="form-group col-sm-6 {{ $errors->has('validation') ? 'has-error' :'' }}">
    {!! Form::label('validation', 'Validação:') !!}
    {!! Form::text('validation', null, ['class' => 'form-control']) !!}
    {!! $errors->first('validation','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group col-sm-6 {{ $errors->has('suggestions') ? 'has-error' :'' }}">
    {!! Form::label('suggestions', 'Sugestões(Separados por virgula):') !!}
    {!! Form::text('suggestions', implode(",",isset($customField)&&!empty($customField->suggestions) ? $customField->suggestions :[]), ['class' => 'form-control','data-role'=>'tagsinput']) !!}
    {!! $errors->first('suggestions','<span class="help-block">:message</span>') !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('customFields.index') !!}" class="btn btn-default">Cancelar</a>
</div>
