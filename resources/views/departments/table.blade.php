<table class="table table-responsive table-striped" id="dept-list">
    <tbody>
    <?php $index=1; ?>
    <tr>
        <td>{!! Form::label('No.', '#') !!}</td>
        <td>{!! Form::label('name', 'Name') !!}</td>
        <td>{!! Form::label('office_number', 'Office Number') !!}</td>
        <td>{!! Form::label('manager', 'Manager') !!}</td>
        <td colspan="3">{!! Form::label('action', 'Action') !!}</td>
    </tr>
    @foreach($departments as $department)
        <tr>
            <td>{!! $index++; !!}</td>
            <td><a href="{!! route('departments.show', [$department->id]) !!}">{!! $department->name !!}</a></td>
            <td>{!! $department->office_number !!}</td>
            <td>{!! $department->manager !!}</td>
            <td>
                {!! Form::open(['route' => ['departments.destroy', $department->id], 'method' => 'delete']) !!}
                    <a href="" class='btn btn-info action'>Employees</a>
                    <a href="{!! route('departments.edit', [$department->id]) !!}" class='btn btn-success action'>Edit</a>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger action', 'onclick' => "return confirm('Are you sure delete $department->name ?')"]) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>