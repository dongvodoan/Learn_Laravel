@extends('layouts.app')

@section('content')
<div id="container" class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="panel-body">
                    @include('employees.show_fields')
                    <div class="col col-lg-8 col-lg-offset-3 col-md-8 col-lg-offset-3 col-sm-12 col-xs-12">
                        <a href="{!! route('employees.index') !!}" class="btn btn-default">Back</a>
                    </div>
                    
              </div>
        </div>
    </div>
</div>
@endsection
