<!-- Name Field -->
<div class="form-group col-sm-6 {{ $errors->has('name') ? 'has-error' :'' }}">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! $errors->first('name','<span class="help-block">:message</span>') !!}
</div>

<!-- No Of Files Field -->
<div class="form-group col-sm-6 {{ $errors->has('no_of_files') ? 'has-error' :'' }}">
    {!! Form::label('no_of_files', 'Nenhum arquivo:') !!}
    {!! Form::number('no_of_files', null, ['class' => 'form-control']) !!}
    {!! $errors->first('no_of_files','<span class="help-block">:message</span>') !!}
</div>


<!-- Labels Field -->
<div class="form-group col-sm-6 {{ $errors->has('labels') ? 'has-error' :'' }}">
    {!! Form::label('labels', 'Rotulo:') !!}
    {!! Form::text('labels', null, ['class' => 'form-control']) !!}
    {!! $errors->first('labels','<span class="help-block">:message</span>') !!}
</div>


<!-- File Validations Field -->
<div class="form-group col-sm-6 {{ $errors->has('file_validations') ? 'has-error' :'' }}">
    {!! Form::label('file_validations', 'Validações de arquivos:') !!}
    {!! Form::text('file_validations', isset($fileType) ? null : config('settings.default_file_validations'), ['class' => 'form-control']) !!}
    {!! $errors->first('file_validations','<span class="help-block">:message</span>') !!}
</div>


<!-- File Maxsize Field -->
<div class="form-group col-sm-6 {{ $errors->has('file_maxsize') ? 'has-error' :'' }}">
    {!! Form::label('file_maxsize', 'Tamanho máximo do arquivo (MB):') !!}
    {!! Form::number('file_maxsize', isset($fileType) ? null : config('settings.default_file_maxsize'), ['class' => 'form-control']) !!}
    {!! $errors->first('file_maxsize','<span class="help-block">:message</span>') !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('fileTypes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
