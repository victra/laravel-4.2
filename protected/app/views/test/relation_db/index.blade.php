@extends('layout/master')
@section('content')
<?php $title = "Relation List" ?>
<section class="container">
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