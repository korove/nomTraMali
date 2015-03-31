@extends('layouts.master')

@section('content')

<div class="row">
	<div class="span4 offset1">
		<div class="well" style="text-align: center;width:300px;">

			<legend>Please Register</legend>

			{{ Form::open(array('url' => 'postRegister')) }}

			
			
			{{ Form::text('username', '', array('placeholder' => 'Username')) }}
			{{ Form::text('email', '', array('placeholder' => 'Email')) }} <br/>
			{{ Form::password('password', array('placeholder' => 'Password' )) }} <br/>

			<div style="margin-top: 10px;">
				{{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
				{{ HTML::link('/', 'Cancel', array('class' => 'btn btn-danger')) }}	
			</div>
			
			{{ Form::close() }}

		</div>
	</div>
</div>

@stop