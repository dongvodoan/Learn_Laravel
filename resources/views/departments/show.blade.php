@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="padding-left: 20px">
        @include('departments.show_fields')
        <a href="{!! route('departments.index') !!}" class="btn btn-default">Back</a>
    </div>
</div>
@endsection
