@extends('layout/master')
@section('content')
<?php $title = "Article List" ?>
<section class="container">
  <table class="table">
    <tr>
       <th>ID</th>
       <th>USER ID</th>
       <th>TITLE</th>
       <th>CONTENT</th>
       <th>CREATED AT</th>
       <th>UPDATED AT</th>
       <th>ACTION</th>
    </tr>
    @foreach($data_article as $articles)
      <tr>
         <td>{{ $articles->id }}</td>
         <td>{{ $articles->user_id }}</td>
         <td>{{ $articles->title }}</td>
         <td>{{ $articles->content }}</td>
         <td>{{ $articles->created_at }}</td>
         <td>{{ $articles->updated_at }}</td>
         <td><a href="{{ url('article_edit/'.$articles->id) }}" class="btn btn-primary">Edit</a></td>
      </tr>
    @endforeach
  </table>
  <br>
  <a href="{{ URL::to('article_create') }}" class="btn btn-primary">Create</a>
</section>
@stop