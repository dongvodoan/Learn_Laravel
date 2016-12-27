<div class="col-lg-5">
    <div class="form-group">
    	<img style="border:none; width: 500px; height: 280px;" src="{{ url(config('path.upload_img').$employee->image) }}" class = "setpicture img-thumbnail img_upload" id ="image_no"></img><br>
        {{ Form::file('image',['class' => 'control','id' => 'image']) }}<br>
    	@if ($errors->has('image'))
            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif
    </div>                  
</div>
<div class="col-lg-7">
	<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
	    {!! Form::label('name', 'Employee Name') !!}
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	    @if ($errors->has('name'))
	        <span class="help-block">
	            {{ $errors->first('name') }}
	        </span>
	    @endif
	</div>

	<div class="form-group {{ $errors->has('department') ? ' has-error' : '' }}">
	    {!! Form::label('department', 'Department') !!}
	    <select name="department" class="form-control">
	    	<option value=""></option>
	    	@foreach($departments as $department)
	    	<option <?php if(($department->name)===($employee->department->name)) echo 'selected';?> value="{!! $department->id !!}">{!! $department->name !!}</option>
	    	@endforeach
	    </select>
	    @if ($errors->has('department'))
	        <span class="help-block">
	            {{ $errors->first('department') }}
	        </span>
	    @endif
	</div>

	<div class="form-group {{ $errors->has('job_title') ? ' has-error' : '' }}">
	    {!! Form::label('job_title', 'Job Title') !!}
	    {!! Form::text('job_title', null, ['class' => 'form-control']) !!}
	    @if ($errors->has('job_title'))
	        <span class="help-block">
	            {{ $errors->first('job_title') }}
	        </span>
	    @endif
	</div>

	<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
	    {!! Form::label('phone', 'Cellphone') !!}
	    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
	    @if ($errors->has('phone'))
	        <span class="help-block">
	            {{ $errors->first('phone') }}
	        </span>
	    @endif
	</div>

	<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
	    {!! Form::label('email', 'Email') !!}
	    {!! Form::text('email', null, ['class' => 'form-control']) !!}
	    @if ($errors->has('email'))
	        <span class="help-block">
	            {{ $errors->first('email') }}
	        </span>
	    @endif
	</div>
</div>
<!-- Submit Field -->
<div class="form-group col-lg-7 col-lg-offset-5">
    {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('employees.index') !!}" class="btn btn-default">Back</a>
</div>

