@extends('layouts.app')

@section('content')
    <div class="container" id="container">
            @include('flash::message')
            <div class="panel panel-primary">
                <div class="panel-body">
                    <a href="{!! route('employees.create') !!}" class="btn btn-success">Add Employee</a>        
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Search</h3>
                </div>
            <div class="panel-body">
             {!! Form::open(['class' => 'form-inline', 'role' => 'search', 'route' => 'search', 'method' => 'GET', 'id' => 'indexForm', 'accept-charset' => 'utf-8']) !!}
                {{-- <form action="{{ route('search') }}" class="form-inline" id="indexForm" method="get" accept-charset="utf-8"> --}}
                    <div class="form-group">
                        <label class="sr-only" for="Name">Employee Name</label>
                        <input name="name" class="form-control" placeholder="Employee Name" type="text" id="name"/>        </div>
                    <div class="form-group">
                        <label class="sr-only" for="DepartmentId">Department</label>
                        <select name="department_id" class="form-control" id="department_id">
                            <option value="">Department</option>
                            @foreach($departments as $department)
                                <option value="{!! $department->id !!}">{!! $department->name !!}</option>
                            @endforeach
                            </select>        
                        </div>
                    <button class="btn btn-success" type="submit">Search</button>
                    <button class="btn btn-default btn-clear" type="reset">Clear</button>
                {{-- <form>     --}}
                {!!Form::close() !!}
            </div>
            </div>
            <h3>Employees</h3>
            @include('employees.table')
    </div>
@endsection

