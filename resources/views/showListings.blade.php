@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('inc.messages')
            <div class="panel panel-default">
            <div class="panel-heading">{{$listings -> name}} <a href="/listings" class="btn btn-default pull-right btn-xs">Go Back</a></div>

                <div class="panel-body">
                   <ul class="list-group">
                   <li class="list-group-item"> Address: {{$listings -> address}}</li>
                   <li class="list-group-item"> Website: <a href="{{$listings -> website}}" target="_blank">{{$listings -> website}}</a></li>
                   <li class="list-group-item"> E-mail: {{$listings -> email}}</li>
                   <li class="list-group-item"> Phone: {{$listings -> phone}}</li>
                   </ul>
                   <hr>
                   <div class="well">
                       {{$listings -> bio}}
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
