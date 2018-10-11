@extends('layouts.app')

@section('content')




</head>
<body>


<div class="container spark-screen">
  <div class="row">
  <div class="col-md-10 col-md-offset-1">
  <div class="panel panel-default">
  <div class="panel-heading"><h1>Make Short URL</h1></div>
  <div class="panel-body">
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/postaddurl') }}">
   {{ csrf_field() }}
<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
<label for="transdate" class="col-md-4 control-label">Enter New Url:</label>
<div class="col-md-6">
<input id="url" type="text" class="form-control" name="url">
@if ($errors->has('url'))
<span class="help-block">
<strong>{{ $errors->first('url') }}</strong>
</span>
 @endif
 </div>
<label for="transdate" class="col-md-4 control-label">Select Date/Time to Expire Link:</label>
<div class="col-md-6">
    

<div class='col-sm-6'>
<div class="form-group">
<div class='input-group date' name='datetimepicker1' id='datetimepicker1'>
 <input type='text' class="form-control" />
<span class="input-group-addon">
 <span class="glyphicon glyphicon-calendar"></span>
</span>
 </div>
</div>
</div>
 <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div>
<br>
<br>
<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
 <i class="fa fa-btn fa-user"></i> Add Url
</button>
</div>
</form>
  
</div>
</div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
