@extends('clients.layouts.main')

@section('new')
<div class="whats-news-wrapper">
    <!-- Heading & Nav Button -->
        <div class="row justify-content-between align-items-end mb-15">
            <div class="col-xl-4">
                <div class="section-tittle mb-30">
                    <h3>{{ $cateName->name }} News</h3>
                </div>
            </div>
            <div class="col-xl-8 col-md-9">
                <div class="properties__button">

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
                            @foreach ($postCate as $post)
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="whats-news-single mb-40 mb-40">
                                        <div class="whates-img">
                                            <img src="{{ $post->image }}" alt="">
                                        </div>
                                        <div class="whates-caption whates-caption2">
                                            <h4><a href="{{ route('client.post',  ['id' => $post->id]) }}">{{ $post->title }}</a></h4>
                                            <span>View: {{ $post->view->view }}</span>
                                            <p>{{ $post->short_desc }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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