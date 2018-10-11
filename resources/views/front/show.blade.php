@extends('layouts.app')

@section('content')

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
      <script type="text/javascript" src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/src/js/bootstrap-datetimepicker.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/build/css/bootstrap-datetimepicker.css">
  <style type="text/css">
    
  </style>


</head>
<body>
  <br/>
@if(Session::has('flash_message'))
<button type="button" class="close" data-dismiss="alert">×</button> 
<div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
@endif

<div class="container spark-screen">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading"><h1>List of Shorten URLs</h1></div>
<div class="panel-body">

@foreach($links as $item)

<h2><a href="{{ URL::to( $item->url) }}"></i>{{$item->code}}</a></h2>
 @endforeach
 </div>
 </div>            

  </div>
  </div>
{!! $links->links() !!}


</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
