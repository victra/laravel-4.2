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
    </tr>
    @foreach($data_article as $articles)
      <tr>
         <td>{{ $articles->id }}</td>
         <td>{{ $articles->user_id }}</td>
         <td>{{ $articles->title }}</td>
         <td>{{ $articles->content }}</td>
         <td>{{ $articles->created_at }}</td>
         <td>{{ $articles->updated_at }}</td>
      </tr>
    @endforeach
  </table>
  <br>
  <a href="{{ URL::to('article_create') }}" class="btn btn-primary">Create</a>
  <br>
  <br>
  <div class="row">
    <div class="col-lg-12">
          <h2>Article</h2>
          <hr>
          @foreach ($data_article as $articles)
              <div class="well">
                <h3>{{ $articles->title }} By <a href="{{ url('user/'.$articles->user_id.'')}}">{{ $articles->user->email }}</a></h3>
                {{ $articles->content }}
              </div> 
          @endforeach
    </div>
  </div>
</section>
@stop