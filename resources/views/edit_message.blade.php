@extends('shared.master')
@section('title', 'Laravel CRUD Demo')

@section('content')
	<form method="post" action="/message/edit">
    	{{ csrf_field() }}
    	<input type="hidden" name="id" value="{{ $message->id}}" />
    	<input type="text" name="message" value="{{ $message->body}}" placeholder="Enter a message here" /><br />
    	<button type="submit">Save</button>
    </form>
@endsection