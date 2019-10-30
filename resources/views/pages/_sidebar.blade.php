<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">

        <aside class="widget news-letter">
            <h3 class="widget-title text-uppercase text-center">Подписаться</h3>

            @include('admin.errors')

            <form action="{{route('subs.store')}}" method="post">
                @csrf
                <input type="email" placeholder="Your email address" name="email">
                <input type="submit" value="Subscribe Now"
                       class="text-uppercase text-center btn btn-subscribe">
            </form>

        </aside>
        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Популярные посты</h3>
            @foreach($popularPosts as $popularPost)
            <div class="popular-post">


                <a href="{{route('post.show', $popularPost->slug)}}" class="popular-img"><img src="{{$popularPost->getImage()}}" alt="">

                    <div class="p-overlay"></div>
                </a>

                <div class="p-content">
                    <a href="{{route('post.show', $popularPost->slug)}}" class="text-uppercase">{{$popularPost->title}}</a>
                    <span class="p-date">{{$popularPost->getDate()}}</span>

                </div>
            </div>
            @endforeach
        </aside>
        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Рекомендуемые посты</h3>

            <div id="widget-feature" class="owl-carousel">
                @foreach($featuredPosts as $featuredPost)
                <div class="item">
                    <div class="feature-content">
                        <img src="{{$featuredPost->getImage()}}" height="200" width="400">

                            <a href="{{route('post.show', $featuredPost->slug)}}" class="overlay-text text-center">
                            <h5 class="text-uppercase">{{$featuredPost->title}}</h5>

                            <p>{!! $featuredPost->description !!}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </aside>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-uppercase text-center">Новые посты</h3>

            @foreach($recentPosts as $recentPost)
            <div class="thumb-latest-posts">


                <div class="media">
                    <div class="media-left">
                        <a href="{{route('post.show', $recentPost->slug)}}" class="popular-img"><img src="{{$recentPost->getImage()}}" alt="">
                            <div class="p-overlay"></div>
                        </a>
                    </div>
                    <div class="p-content">
                        <a href="#" class="text-uppercase">{{$recentPost->title}}</a>
                        <span class="p-date">{{$recentPost->getDate()}}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </aside>
        <aside class="widget border pos-padding">
            <h3 class="widget-title text-uppercase text-center">Посты по категориям</h3>
            <ul>
                @foreach($categories as $category)
                <li>
                    <a href="{{route('category.show', $category->slug)}}">{{$category->title}}</a>
                    <span class="post-count pull-right"> {{$category->post->count()}}</span>
                </li>
                @endforeach
            </ul>
        </aside>
    </div>
</div>
