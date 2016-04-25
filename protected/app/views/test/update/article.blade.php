@extends('layout/master')
@section('content')
<?php $title = "Update Article" ?>
    <?php if(Session::has('register_success')): ?>
        <div class="message message-success">
            <span class="close"></span>
            <?php echo Session::get('register_success') ?>
        </div>
    <?php endif; ?>
    <div class="units-container">
        <div class="forms">
            {{ Form::model($articlebyid, array('route' => array('article_update', $articlebyid->id))) }}
                <h3>Update Article</h3>
                <label>
                    User ID <span class="error">{{ $errors->first('userid') }}</span>
                    <input type="text" name="userid" value="{{ $articlebyid->user_id }}" class="width-50" />
                </label>
                <label>
                    Title <span class="error">{{ $errors->first('title') }}</span>
                    <input type="text" name="title" value="{{ $articlebyid->title }}" class="width-50" />
                </label>
                <label>
                    Content <span class="error">{{ $errors->first('content') }}</span>
                    <input type="text" name="content" value="{{ $articlebyid->content }}" class="width-50" />
                </label><br>
                <input type="submit" class="btn" value="Submit">
            {{ Form::close() }}
        </div>
    </div>
@stop
