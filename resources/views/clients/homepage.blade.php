@extends('clients.layouts.main')

@section('trending')
        <!-- Trending Area Start -->
        <div class="trending-area fix pt-25 gray-bg">
            <div class="container">
                <div class="trending-main">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="slider-active">
                                <!-- Single -->
                                <div class="single-slider">
                                    <div class="trending-top mb-30">
                                        @foreach ($posts->slice(0, 1) as $post)
                                            <div class="trend-top-img">
                                                <img src="{{ $post->image }}" alt="">
                                                <div class="trend-top-cap">
                                                    <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                                    <h2><a href="{{ route('client.post',  ['id' => $post->id]) }}" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">{{ $post->title }}</a></h2>
                                                    <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right content -->
                        <div class="col-lg-4">
                                <!-- Trending Top -->
                            <div class="row">
                                @foreach ($posts->slice(0, 2) as $post)
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <div class="trending-top mb-30">
                                            <div class="trend-top-img">
                                                <img src="{{ $post->image }}" alt="">
                                                <div class="trend-top-cap trend-top-cap2">
                                                    <span class="bgb">{{ $post->category->name }}</span>
                                                    <h2><a href="{{ route('client.post',  ['id' => $post->id]) }}">{{ $post->title }}</a></h2>
                                                    <p>by Alice cloe   -   Jun 19, 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->
@endsection


@section('new')
<div class="whats-news-wrapper">
    <!-- Heading & Nav Button -->
    <div class="row justify-content-between align-items-end mb-15">
        <div class="col-xl-4">
            <div class="section-tittle mb-30">
                <h3>Whats New</h3>
            </div>
        </div>
        <div class="col-xl-8 col-md-9">
            <div class="properties__button">
                <!--Nav Button  -->                                            
                <nav>                                                 
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lifestyle</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Travel</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Fashion</a>
                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Sports</a>
                        <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a>
                    </div>
                </nav>
                <!--End Nav Button  -->
            </div>
        </div>
    </div>
    <!-- Tab content -->
    <div class="row">
        <div class="col-12">
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                    <div class="row">
                        <!-- Left Details Caption -->
                        <div class="col-xl-6 col-lg-12">
                            @foreach ($posts->slice(0, 1) as $post)
                                <div class="whats-news-single mb-40 mb-40">
                                    <div class="whates-img">
                                        <img src="{{ $post->image }}" alt="">
                                    </div>
                                    <div class="whates-caption">
                                        <h4><a href="{{ route('client.post',  ['id' => $post->id]) }}">{{ $post->title }}</a></h4>
                                        <span>by Alice cloe   -   Jun 19, 2020</span>
                                        <p>{{ $post->short_desc }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Right single caption -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="row">
                                <!-- single -->
                                @foreach ($posts->slice(0, 4) as $post)
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                        <div class="whats-right-single mb-20">
                                            <div class="whats-right-img">
                                                <img src="{{ $post->image }}" width="120">
                                            </div>
                                            <div class="whats-right-cap">
                                                <span class="colorb">{{ $post->category->name }}</span>
                                                <h4><a href="{{ route('client.post',  ['id' => $post->id]) }}">{{ $post->title }}</a></h4>
                                                <p>Jun 19, 2020</p> 
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Nav Card -->
        </div>
    </div>
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
     
    @foreach ($post->slice(0, 5) as $post)
        <div class="most-recent-single">
            <div class="most-recent-images">
                <img src="{{ $post->image }}" width="100">
            </div>
            <div class="most-recent-capt">
                <h4><a href="{{ route('client.post',  ['id' => $post->id]) }}">{{ $post->title }}</a></h4>
                <p>View: {{ $post->view->view }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection

@section('popular')
<div class="weekly2-wrapper">
    <div class="row">
        <!-- Banner -->
        <div class="col-lg-12">
            <div class="slider-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="small-tittle mb-30">
                            <h4>Most Popular</h4>
                        </div>
                    </div>
                </div>
                <!-- Slider -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="weekly2-news-active d-flex">
                            <!-- Single -->
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{ asset('template/assets/img/gallery/weeklyNews1.png') }}" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                                    <p>Jhon  |  2 hours ago</p>
                                </div>
                            </div> 
                            <!-- Single -->
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{ asset('template/assets/img/gallery/weeklyNews2.png') }}" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                                    <p>Jhon  |  2 hours ago</p>
                                </div>
                            </div> 
                            <!-- Single -->
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{ asset('template/assets/img/gallery/weeklyNews3.png') }}" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                                    <p>Jhon  |  2 hours ago</p>
                                </div>
                            </div> 
                            <!-- Single -->
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{ asset('template/assets/img/gallery/weeklyNews2.png') }}" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                                    <p>Jhon  |  2 hours ago</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection