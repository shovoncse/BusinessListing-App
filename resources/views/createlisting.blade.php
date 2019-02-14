@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing<span class="pull-right"><a href="/dashboard" class="btn btn-default btn-xs">Go Back</a></span></div>

                <div class="panel-body">
                {!! Form::open(['action' => 'ListingController@store', 'method' => 'POST']) !!}
                    {{ Form::bsText('name', '', ['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('email', '', ['placeholder' => 'Contact Email']) }}
                    {{ Form::bsText('phone', '', ['placeholder' => 'Contact Phone']) }}
                    {{ Form::bsText('website', '', ['placeholder' => 'Website']) }}
                    {{ Form::bsText('address', '', ['placeholder' => 'Business Address']) }}
                    {{ Form::bsTextArea('bio', '', ['placeholder' => 'About This Business']) }}
                    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!} 
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
