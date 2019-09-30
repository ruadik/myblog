@extends('layout')

@section('content')
    <div class="col-md-8">

        @foreach($posts as $post)
            <article class="post">
            <div class="post-thumb">
                <a href="blog.html"><img src="{{$post->getImage()}}" alt=""></a>

                <a href="blog.html" class="post-thumb-overlay text-center">
                    <div class="text-uppercase text-center">View Post</div>
                </a>
            </div>
            <div class="post-content">
                <header class="entry-header text-center text-uppercase">
                    <h6><a href="#"> {{$post->getCategoryTitle()}}</a></h6>

                    <h1 class="entry-title"><a href="blog.html">{{$post->title}}</a></h1>


                </header>
                <div class="entry-content">
                    <p>{!! $post->description !!}</p>

                    <div class="btn-continue-reading text-center text-uppercase">
                        <a href="blog.html" class="more-link">Continue Reading</a>
                    </div>
                </div>
                <div class="social-share">
                    <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a> On {{$post->getDate()}}</span>
                    <ul class="text-center pull-right">
                        <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </article>
        @endforeach

        <ul class="pagination">
            {{$posts->links()}}
        </ul>
    </div>
@endsection
