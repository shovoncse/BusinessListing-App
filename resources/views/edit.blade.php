@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">Edit Listing<span class="pull-right"><a href="/dashboard" class="btn btn-default btn-xs">Go Back</a></span></div>

                <div class="panel-body">
                {!! Form::open(['action' => ['ListingController@update', $listings->id], 'method' => 'POST']) !!}
                    {{ Form::bsText('name', $listings->name, ['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('email', $listings->email, ['placeholder' => 'Contact Email']) }}
                    {{ Form::bsText('phone', $listings->phone, ['placeholder' => 'Contact Phone']) }}
                    {{ Form::bsText('website', $listings->website, ['placeholder' => 'Website']) }}
                    {{ Form::bsText('address', $listings->address, ['placeholder' => 'Business Address']) }}
                    {{ Form::bsTextArea('bio', $listings->bio, ['placeholder' => 'About This Business']) }}
                    {{ Form::hidden('_method', 'PUT') }}
                    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!} 
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
