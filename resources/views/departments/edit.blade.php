@extends('layouts.app')

@section('content')
<div id="container" class="container">
    <div class="row">
        @include('flash::message')
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Department</h3>
                </div>
                <div class="panel-body">
                   {!! Form::model($department, ['route' => ['departments.update', $department->id], 'method' => 'patch']) !!}

                        @include('departments.edit_fields')

                   {!! Form::close() !!}
               </div>
            </div>
        </div>
    </div>
</div>
@endsection