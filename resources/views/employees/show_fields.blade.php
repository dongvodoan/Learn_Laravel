<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
    <div class="form-group">
        <img style="border:none; width: 300px; height: 150px;" src="{{ url(config('path.upload_img').$employee->image) }}" class = "setpicture img-thumbnail img_upload" id ="image_no"></img>
    </div>
</div>
<div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
    <table class="table table-responsive table-striped">
        <tbody>

            <!-- Name Field -->
            <tr>
                <td>{!! Form::label('name', 'Name:') !!}</td>
                <td><p>{!! $employee->name !!}</p></td>
            </tr>

            <!-- Department Field -->
            <tr>
                <td>{!! Form::label('department', 'Department:') !!}</td>
                <td><p>{!! $employee->department->name !!}</p></td>
            </tr>

            <!-- Job Title Field -->
            <tr>
                <td>{!! Form::label('job_title', 'Job Title:') !!}</td>
                <td><p>{!! $employee->job_title !!}</p></td>
            </tr>

            <!-- Phone Field -->
            <tr>
                <td>{!! Form::label('phone', 'Cellphone:') !!}</td>
                <td><p>{!! $employee->email !!}</p></td>
            </tr>

            <!-- Email Field -->
            <tr>
                <td>{!! Form::label('email', 'Email:') !!}</td>
                <td><p>{!! $employee->email !!}</p></td>
            </tr>
            <tr>
                <td >
                    
                </td>
            </tr>
        </tbody>
    </table>
</div>
