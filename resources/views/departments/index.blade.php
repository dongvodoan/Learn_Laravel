@extends('layouts.app')

@section('content')
    <div class="container" id="container">
            @include('flash::message')
            <div class="panel panel-primary">
                <div class="panel-body">
                    <a href="{!! route('departments.create') !!}" class="btn btn-success">Add Department</a>        
                </div>
            </div>
            <h3>Departments</h3>
            @include('departments.table')
    </div>
@endsection

