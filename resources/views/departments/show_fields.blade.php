<table class="table table-responsive table-striped" id="dept-list">
    <tbody>
        <tr>
           <td>{!! Form::label('name', 'Name') !!}</td> 
           <td><p>{!! $department->name !!}</p></td>
        </tr>
        <tr>
            <td>{!! Form::label('office_number', 'Office Phone') !!}</td>
            <td><p>{!! $department->office_number !!}</p></td>
        </tr>
        <tr>
            <td>{!! Form::label('manager', 'Manager') !!}</td>
            <td><p>{!! $department->manager !!}</p></td>
        </tr>
    </tbody>
</table>

