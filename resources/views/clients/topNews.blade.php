@extends('clients.layouts.main')

@section('new')
<div class="col-xl-4">
    <div class="section-tittle mb-30">
        <h3>Top News</h3>
    </div>
</div>
    <div class="blog_left_sidebar">
        @foreach ($posts->slice(0, 4) as $post)
            <article class="blog_item">
                <div class="blog_item_img">
                    <img class="card-img rounded-0" src="{{ $post->image }}" alt="">
                    <a href="#" class="blog_item_date">
                        <h3>TOP {{$loop->iteration}}</h3>
                    </a>
                </div>

                <div class="blog_details">
                    <a class="d-inline-block" href="single-blog.html">
                        <a href="{{ route('client.post',  ['id' => $post->id]) }}"><h2>{{ $post->title }}</h2></a>
                    </a>
                    <p>{{ $post->short_desc }}</p>
                    <ul class="blog-info-link">
                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                    </ul>
                </div>
            </article>
        @endforeach

        <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination">
                <li class="page-item">
                    <a href="#" class="page-link" aria-label="Previous">
                        <i class="ti-angle-left"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link active">1</a>
                </li>
                <li class="page-item active">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link" aria-label="Next">
                        <i class="ti-angle-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection

@section('recent')
    <div class="most-recent-area">
    <!-- Section Tittle -->
    <div class="small-tittle mb-20">
        <h4>Most Recent</h4>
    </div>
    <!-- Details -->
    <div class="most-recent mb-40">
        <div class="most-recent-img">
            <img src="{{ asset('template/assets/img/gallery/most_recent.png') }}" alt="">
            <div class="most-recent-cap">
                <span class="bgbeg">Vogue</span>
                <h4><a href="latest_news.html">What to Wear: 9+ Cute Work <br>
                    Outfits to Wear This.</a></h4>
                <p>Jhon  |  2 hours ago</p>
            </div>
        </div>
    </div>
    <!-- Single -->
    @foreach ($posts->slice(0, 9) as $post)
        <div class="most-recent-single">
            <div class="most-recent-images">
                <img src="{{ $post->image }}" width="100">
            </div>
            <div class="most-recent-capt">
                <h4><a href="{{ route('client.post',  ['id' => $post->id]) }}">{{ $post->title }}</a></h4>
                <p>Jhon  |  2 hours ago</p>
            </div>
        </div>
    @endforeach
</div>
@endsection