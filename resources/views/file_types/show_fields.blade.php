<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nome:') !!}
    <p>{{ $fileType->name }}</p>
</div>


<!-- No Of Files Field -->
<div class="form-group">
    {!! Form::label('no_of_files', 'Numero de Arquivos:') !!}
    <p>{{ $fileType->no_of_files }}</p>
</div>


<!-- Labels Field -->
<div class="form-group">
    {!! Form::label('labels', 'Labels:') !!}
    <p>{{ $fileType->labels }}</p>
</div>


<!-- File Validations Field -->
<div class="form-group">
    {!! Form::label('file_validations', 'Arquivos de validação:') !!}
    <p>{{ $fileType->file_validations }}</p>
</div>


<!-- File Maxsize Field -->
<div class="form-group">
    {!! Form::label('file_maxsize', 'Tamanho maximo de arquivos:') !!}
    <p>{{ $fileType->file_maxsize }} MB</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Criado as:') !!}
    <p>{{ formatDateTime($fileType->created_at) }}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado as:') !!}
    <p>{{ formatDateTime($fileType->updated_at) }}</p>
</div>


