<table class="table table-responsive table-striped" id="dept-list">
    <tbody>
    <?php $index=1; ?>
    <tr>
        <td>{!! Form::label('No.', '#') !!}</td>
        <td>{!! Form::label('name', 'Name') !!}</td>
        <td>{!! Form::label('office_number', 'Office Number') !!}</td>
        <td>{!! Form::label('manager', 'Manager') !!}</td>
        <?php 
            if(isset($_SESSION["username"])){
        ?>
        <td colspan="3">{!! Form::label('action', 'Action') !!}</td>
        <?php } ?>
    </tr>
    @foreach($departments as $department)
        <tr>
            <td>{!! $index++; !!}</td>
            <td><a href="{!! route('departments.show', [$department->id]) !!}">{!! $department->name !!}</a></td>
            <td>{!! $department->office_number !!}</td>
            <td>{!! $department->manager !!}</td>
            <?php 
                if(isset($_SESSION["username"])){
            ?>
            <td style="width: 280px;">
                <div style="position: relative; float: left;">
                    {!! Form::open(['class' => 'form-inline', 'role' => 'search', 'route' => 'search', 'method' => 'GET', 'id' => 'indexForm', 'accept-charset' => 'utf-8']) !!}
                                    <input class="sr-only" name="name" class="form-control" placeholder="Employee Name" type="text" id="name"/>
                                    <input class="sr-only" name="department_id" class="form-control" placeholder="Employee Name" type="text" id="name" value="{!! $department->id !!}" />        
                                <button class="btn btn-info action" type="submit">Employees</button>
                    {!!Form::close() !!}
                </div>
                <div >
                    {!! Form::open(['route' => ['departments.destroy', $department->id], 'method' => 'delete']) !!}
                        <a href="{!! route('departments.edit', [$department->id]) !!}" class='btn btn-success action'>Edit</a>
                        {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger action', 'onclick' => "return confirm('Are you sure delete $department->name ?')"]) !!}
                    {!! Form::close() !!}
                </div>     
            </td>
            <?php } ?>
        </tr>
    @endforeach
    </tbody>
</table>