<!-- Name Field -->
<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Department Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    @if ($errors->has('name'))
        <span class="help-block">
            {{ $errors->first('name') }}
        </span>
    @endif
</div>

<!-- Office Number Field -->
<div class="form-group {{ $errors->has('office_number') ? ' has-error' : '' }}">
    {!! Form::label('office_number', 'Office Phone') !!}
    {!! Form::text('office_number', null, ['class' => 'form-control']) !!}
    @if ($errors->has('office_number'))
        <span class="help-block">
            {{ $errors->first('office_number') }}
        </span>
    @endif
</div>

<!-- Manager Field -->
<div class="form-group {{ $errors->has('manager') ? ' has-error' : '' }}">
    {!! Form::label('manager', 'Manager') !!}
    <select name="manager" class="form-control">
        <option value=""></option>
        @foreach($managers as $manager)
        <option value="{!! $manager->id !!}">{!! $manager->name !!}</option>
        @endforeach
    </select>
    @if ($errors->has('manager'))
        <span class="help-block">
            {{ $errors->first('manager') }}
        </span>
    @endif
</div>

<!-- Submit Field -->
<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
</div>
