<table class="table table-responsive" id="employees-table">
    <tbody>
    <?php $index=1; ?>
    <tr>
        <td>{!! Form::label('No.', '#') !!}</td>
        <td>{!! Form::label('name', 'Name') !!}</td>
        <td>{!! Form::label('department', 'Department') !!}</td>
        <td>{!! Form::label('job_title', 'Job title') !!}</td>
        <td>{!! Form::label('email', 'Email') !!}</td>
        <td>{!! Form::label('action', 'Action') !!}</td>
    </tr>
    @foreach($employees as $employee)
        <tr>
            <td>{!! $index++; !!}</td>
            <td><a href="{!! route('employees.show', [$employee->id]) !!}">{!! $employee->name !!}</a></td>
            <td>{!! $employee->department_id !!}</td>           
            <td>{!! $employee->job_title !!}</td>
            <td>{!! $employee->email !!}</td>
            <td>
                {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                    <a href="{!! route('employees.edit', [$employee->id]) !!}" class='btn btn-success action'>Edit</a>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger action', 'onclick' => "return confirm('Are you sure?')"]) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table> 