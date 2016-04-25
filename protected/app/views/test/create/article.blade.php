@extends('layout/master')
@section('content')
<?php $title = "Create Article" ?>
    <?php if(Session::has('register_success')): ?>
        <div class="message message-success">
            <span class="close"></span>
            <?php echo Session::get('register_success') ?>
        </div>
    <?php endif; ?>
    <div class="units-container">

        <form method="post" action="" class="forms">
            <h3>Create Article</h3>
            <label>
                User ID <span class="error">{{ $errors->first('userid') }}</span>
                <input type="text" name="userid" value="{{ Form::old('userid') }}" class="width-50" />
            </label>
            <label>
                Title <span class="error">{{ $errors->first('title') }}</span>
                <input type="text" name="title" value="{{ Form::old('title') }}" class="width-50" />
            </label>
            <label>
                Content <span class="error">{{ $errors->first('content') }}</span>
                <input type="text" name="content" value="{{ Form::old('content') }}" class="width-50" />
            </label><br>
            <input type="submit" class="btn" value="Submit">
        </form>
    </div>
@stop