@extends('shared.master')
@section('title', 'Laravel CRUD Demo')

@section('content')
    <form method="post" action="/message/create">
    	{{ csrf_field() }}
    	<input type="text" name="message" value="" placeholder="Enter a message here" /><br />
    	<button type="submit">Create</button>
    </form>
@endsection