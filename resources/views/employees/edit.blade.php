@extends('layouts.app')

@section('content')
<div id="container" class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Employee</h3>
                </div>
                <div class="panel-body">
                   {!! Form::model($employee, ['route' => ['employees.update', $employee->id], 'method' => 'patch', 'files' => 'true']) !!}

                        @include('employees.edit_fields')

                   {!! Form::close() !!}
               </div>
            </div>
        </div>
    </div>
</div>
@endsection