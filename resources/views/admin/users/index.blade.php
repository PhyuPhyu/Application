@extends('layouts.admin')

@section('content')

<h1>User</h1>

<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Photo</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>

    @if($users)
      
    	@foreach($users as $user)
      		<tr>
        		<td>{{$user->id}}</td>
        		<td><a href="{{action('AdminUsersController@edit', $user['id'])}}">{{$user->name}}</a></td>
        		<td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://www.hutterites.org/wp-content/uploads/2012/03/placeholder.jpg'}}"></td>
        		<td>{{$user->email}}</td>
        		<td>{{$user->role->name}}</td> 
        		<td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
        		<td>{{$user->created_at->diffForHumans()}}</td>
        		<td>{{$user->updated_at->diffForHumans()}}</td>
     		 </tr>
      	@endforeach
   
    @endif
    
    </tbody>
  </table>

@endsection