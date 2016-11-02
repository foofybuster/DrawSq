@extends('layout.main')
@section('content')
    <section id="profile-box">
        <h2>Profile</h2>
        <img src="{{ asset('img/loggedin.jpg') }}"/>
        <p><strong>{{ $userId or Auth::user()->name }}</strong></p>
        <p>Joined in xxx</p>
        <p>12067 endorsements</p>
    </section>
    <section id="timeline">
        <div class="row small-up-2 medium-up-3 large-up-4 tile-group" id="timeline-profile">
            <div class="column thumb">
                <a href="{{ url('/single') }}">
                    <img src="{{ asset('img/art1-thumb.jpg') }}"/>
                </a>
            </div>
            <div class="column thumb">
                <img src="{{ asset('img/loggedin.jpg') }}"/>
            </div>
            <div class="column thumb">
                <img src="{{ asset('img/loggedin.jpg') }}"/>
            </div>
            <div class="column thumb">
                <img src="{{ asset('img/loggedin.jpg') }}"/>
            </div>
            <div class="column thumb">
                <img src="{{ asset('img/loggedin.jpg') }}"/>
            </div>
            <div class="column thumb">
                <img src="{{ asset('img/loggedin.jpg') }}"/>
            </div>
            <div class="column thumb">
                <img src="{{ asset('img/loggedin.jpg') }}"/>
            </div>
            <div class="column thumb">
                <img src="{{ asset('img/loggedin.jpg') }}"/>
            </div>
        </div>
        <div class="row">
            <div class="small-8 small-offset-2 medium-offset-5 medium-2 columns">
                <button type="button" class="button expanded rounded load-more">LOAD MORE</button>
            </div>
        </div>
    </section>
@endsection
