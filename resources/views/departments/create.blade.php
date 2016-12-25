@extends('layouts.app')

@section('content')
<div id="container" class="container">
    <div class="row">
        @include('flash::message')
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Add Department</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'departments.store']) !!}

                        @include('departments.create_fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
