@extends('layout/master')
@section('content')
<?php 
    $title = "Profile";
?>
<div class="row">
  <div class="col-lg-12">
        <h2>Profile : {{ $data_profile->fname }} {{ $data_profile->lname }}</h2>
        <h7>Email : {{ $data_profile->email }}</h5> <br>
        <h7>Created at : {{ $data_profile->created_at }}</h7>
        <hr>
        <h2>Articles</h2>
        @foreach ($data_profile->article as $content)
            <div class="well">
                <h3>{{ $content->title }}</h3>
                {{ $content->content }}
            </div> 
        @endforeach
  </div>
</div>
@stop