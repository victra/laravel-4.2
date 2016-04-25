@extends('layout/master')
@section('content')
<?php $title = "Comment List" ?>
<section class="container">
  <table class="table">
    <tr>
       <th>ID</th>
       <th>CONTENT</th>
       <th>USER ID</th>
       <th>COMMENT ID</th>
       <th>COMMENT TYPE</th>
       <th>CREATED AT</th>
       <th>UPDATED AT</th>
    </tr>
    @foreach($data_comment as $comments)
      <tr>
         <td>{{ $comments->id }}</td>
         <td>{{ $comments->content }}</td>
         <td>{{ $comments->user_id }}</td>
         <td>{{ $comments->commentable_id }}</td>
         <td>{{ $comments->commentable_type }}</td>
         <td>{{ $comments->created_at }}</td>
         <td>{{ $comments->updated_at }}</td>
      </tr>
    @endforeach
  </table>
  <br>
</section>
@stop