@extends('clients.layouts.main')

@section('new')
<div class="about-right mb-90">
    <div class="heading-news mb-30 pt-30">
        <h3>
            {{ $post->title }}
        </h3>
    </div>
    <div class="about-prea">
        {{ $post->short_desc }}
    </div> 
    <div class="about-img">
        <img src="{{ $post->image }}" alt="">
    </div>
    <div class="section-tittle mb-30 pt-30">
        <p>
            {{ $post->short_desc }}
        </p>
    </div>
    <div class="about-prea">
        {{ $post->content }}
    </div>
    <div class="about-prea">
        {{ $post->content }}
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