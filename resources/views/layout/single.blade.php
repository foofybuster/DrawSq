@extends('layout.main')
@section('content')
    <section id="single">
        <div class="row">
            <div class="small-12 medium-8 columns">
                <h2>{{ $artName }}</h2>
                <img src="{{ $artPath }}" class="single"/>
                <p class="art-desc">{{ $artDesc }}</p>
            </div>
            <div class="small-12 medium-4 columns">
                <div class="art-meta">
                    <h5>by <a href="{{ url('profile/' . $artUserName) }}">{{ $artUserName }}</a></h5>
                    <ul>
                        <li>{{ $artCreated }}</li>
                        <li><a href="{{ url('discover/' . $artCatUri) }}">{{ $artCatName }}</a></li>
                    </ul>
                </div>
                <a class="button expanded rounded share-btn share-fb"
                   href="http://www.facebook.com/sharer.php?u={{ Request::fullUrl() }}" target="_blank">
                    <img src="{{ asset('img/share-fb.svg') }}"/>
                </a>
                <a class="button expanded rounded share-btn share-tw"
                   href="https://twitter.com/share?url={{ Request::fullUrl() }}&amp;text=Check%20out%20this%20art%20on%20Drawsquare"
                   target="_blank">
                    <img src="{{ asset('img/share-tw.svg') }}"/>
                </a>
            </div>
        </div>
    </section>
@endsection
