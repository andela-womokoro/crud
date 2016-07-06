@extends('shared.master')
@section('title', 'Laravel CRUD Demo')

@section('content')
    <a href="message/new">New Message</a>
    <br /><br />
    <table border="1" width="500">
    	<tr>
    		<th align="left">
    			Messages
    		</th>
    	</tr>
    	@foreach($messages as $message)
    	<tr>
    		<td align="left">
    			<div style="float: left;">{{ $message->body }}</div>
    			<div style="float: right;">
    				<a href="/message/edit/{{ $message->id }}">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    				<a href="/message/delete/{{ $message->id }}">Delete</a>&nbsp;&nbsp;
    			</div>
    		</td>
    	</tr>
    	@endforeach
    </table>
@endsection