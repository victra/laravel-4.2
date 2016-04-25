<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='utf-8' />
		<title>{{ $title }}</title>
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
		{{ HTML::style('public/css/kube.min.css') }}
		<style>
		ul#menu li {
			display: inline;
			margin-right: 2px;
		}
		</style>
	</head>
	<body style="width:80%;margin:40px auto">
		<ul id="menu">
			<li><a href="{{ URL::to('user_list') }}" class="btn btn-primary">User</a></li>
			<li><a href="{{ URL::to('article_list') }}" class="btn btn-primary">Article</a></li>
			<li><a href="{{ URL::to('comment_list') }}" class="btn btn-primary">Comment</a></li>
		</ul><br>
		@yield('content')
	</body>
</html>
{{ HTML::script('js/npm.js') }}
{{ HTML::script('js/bootstrap.min.js') }}