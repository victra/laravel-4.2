<div class="row">
  <div class="col-lg-12">
        <h2>Article made in {{ $city->city_name }}</h2>
        <hr>
            @foreach ($city->article as $article)
                <div class="well">
        <!-- $article->user->name adalah kolom name dari table user -->
                <h3>{{ $article->title }} By <a href="{{ url('user/'.$article->user_id.'')}}">{{ $article->user->name }}</a></h3>
       
                {{ $article->content }}
  </div>
</div>
</div>