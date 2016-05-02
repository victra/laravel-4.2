@extends('layout/master')
@section('content')
<?php $title = "Create User" ?>
    <?php if(Session::has('register_success')): ?>
        <div class="message message-success">
            <span class="close"></span>
            <?php echo Session::get('register_success') ?>
        </div>
    <?php endif; ?>
    <div class="units-container">

        <form method="post" action="" class="forms">
            <h3>Create User</h3>
            <label>
                First Name <span class="error"><?php echo $errors->first('firstname') ?></span>
                <input type="text" name="firstname" value="<?php echo Form::old('firstname') ?>" class="width-50" />
            </label>
            <label>
                Last Name <span class="error"><?php echo $errors->first('lastname') ?></span>
                <input type="text" name="lastname" value="<?php echo Form::old('lastname') ?>" class="width-50" />
            </label>
            <label>
                Email <span class="error"><?php echo $errors->first('email') ?></span>
                <input type="text" name="email" value="<?php echo Form::old('email') ?>" class="width-50" />
            </label>
            <label>
                Password <span class="error"><?php echo $errors->first('password') ?></span>
                <input type="password" name="password" value="<?php echo Form::old('password') ?>" class="width-50" />
            </label>
            <label>
                Password Confirmation <span class="error"><?php echo $errors->first('password_confirmation') ?></span>
                <input type="password" name="password_confirmation" value="<?php echo Form::old('password_confirmation') ?>" class="width-50" />
            </label><br>
            <input type="submit" class="btn" value="Submit">
        </form>
    </div>
@stop