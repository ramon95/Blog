@extends('front.template.main')

@section('content')
  <h2 class="title-front left">Ultimos Artuculos</h2>
  <div class="row">
    <div class="col-md-8">
      <div class="row">
        @foreach ($articles as $article)
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <a href="{{ route('front.view.article', $article->slug) }}">
                @foreach ($article->image as $image)
                  <img class="img-front" src="{{ asset('image/articles/' . $image->name)}}">
                @endforeach
              </a>
              <div class="categorias">
                <h3>{{ $article->title}}</h3>
                <hr>
                <i class="glyphicon glyphicon-folder-open"><a href="{{ route('front.search.category', $article->category->name) }}"> {{ $article->category->name }}</a></i>
                <div class="pull-right">
                  <i class="glyphicon glyphicon-time"> {{ $article->created_at->diffForHumans() }}</i>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="text-center">
        {{ $articles->render() }}
      </div>
    </div>
    <div class="col-md-4 aside">
      @include('front.template.partials.aside')
    </div>
@endsection
