<?php 
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>InfyOm Generator</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{!! url('css/ed.css') !!}">

    @yield('css')
</head>

<body>
    <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Employee Directory</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::is('employees*') ? 'active' : '' }}"><a href="{{ url('/employees') }}">Employees</a></li>
                        <li class="{{ Request::is('departments*') ? 'active' : '' }}"><a href="{{ url('/departments') }}">Departments</a></li>
                        {{-- @if (!Auth::guest()) --}}
                        <?php 
                        if(isset($_SESSION["username"])){
                        ?>
                        <li class=""><a href="{{ url('/logout') }}">Log out</a></li> 
                        <?php } else { ?>          
                        {{-- @else --}}
                        <li class="{{ Request::is('/login*') ? 'active' : '' }}"><a href="{{ url('/login') }}">Log in</a></li> <?php } ?>
                        {{-- @endif                   --}}
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

    <div id="page-content-wrapper" style="margin-top:70px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container" id="container">
                    @include('flash::message')
                    <?php 
                        if(isset($_SESSION["username"])){
                    ?>
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <a href="{!! route('employees.create') !!}" class="btn btn-success">Add Employee</a>        
                        </div>
                    </div>
                    <?php } ?>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Search</h3>
                        </div>
                    <div class="panel-body">
                     {!! Form::open(['class' => 'form-inline', 'role' => 'search', 'route' => 'search', 'method' => 'GET', 'id' => 'indexForm', 'accept-charset' => 'utf-8']) !!}
                            <div class="form-group">
                                <label class="sr-only" for="Name">Employee Name</label>
                                <input name="name" class="form-control" placeholder="Employee Name" type="text" id="name" />        </div>
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
                        {!!Form::close() !!}
                    </div>
                    </div>
                    <h3>Employees</h3>
                    @include('employees.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endif --}}
    <footer id="footer" class="footer">
        <div class="container">
            <div class="pull-left">
                <a href="#" target="_blank"><img src="{!! url('images/rikkei.png') !!}" alt="Rikkeisoft Co.,Ltd" border="0" height="40"/></a>                
            </div>
            <div class="pull-right">By DongVD</div>
        </div>
    </footer>
    <!-- jQuery 2.1.4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{!! url('js/ed.js') !!}" ></script>

    @yield('scripts')
</body>
</html>

