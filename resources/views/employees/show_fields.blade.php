<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $employee->id !!}</p>
</div>

<!-- Department Id Field -->
<div class="form-group">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{!! $employee->department_id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $employee->name !!}</p>
</div>

<!-- Job Title Field -->
<div class="form-group">
    {!! Form::label('job_title', 'Job Title:') !!}
    <p>{!! $employee->job_title !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $employee->email !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $employee->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $employee->updated_at !!}</p>
</div>

