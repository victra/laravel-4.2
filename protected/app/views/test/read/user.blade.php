@extends('layout/master')
@section('content')
<?php $title = "User List" ?>
<section class="container">
  <table class="table">
    <tr>
       <th>ID</th>
       <th>EMAIL</th>
       <th>CREATED AT</th>
       <th>UPDATED AT</th>
    </tr>
    @foreach($data_user as $users)
      <tr>
         <td>{{ $users->id }}</td>
         <td>{{ $users->email }}</td>
         <td>{{ $users->created_at }}</td>
         <td>{{ $users->updated_at }}</td>
      </tr>
    @endforeach
  </table>
  <br>
  <a href="{{ URL::to('user_create') }}" class="btn btn-primary">Create</a>
</section>
@stop