@extends('layouts.master')
 
@section('content')

	<div class="container">
		
		<ul class="list-group">
			<?php foreach($awards as $key => $value): ?>
				<li class="list-group-item">
			    	<span class="badge">{{$value['visits']}}</span>			   		
			   		<h1><a href="{{'/awards/'}}{{$value->id}}">{{$value['award_name']}}</a> </h1>
			   		<p>Made by: {{$value['award_publisher']}} </p>
				    
				    <td>Date:{{$value['award_release']}} </td>
			  	</li>		    
			    
			</tr>
			<?php endforeach ?>		  
		</ul>

	</div>

@endsection