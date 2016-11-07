@extends('layout.main')
@section('content')
    <section id="profile-box">
        <h2>Profile</h2>
        <img src="{{ asset('img/loggedin.jpg') }}"/>
        <p><strong>{{ $nameOfUser }}</strong></p>
        <p>Joined in {{ $yearJoined }}</p>
        @if ($endorse > 2)
            <p>{{ $endorse or "not found" }} endorsements</p>
        @else
            <p>{{ $endorse or "not found" }} endorsement</p>
        @endif
    </section>
    <section id="timeline">
        <div class="row small-up-2 medium-up-3 large-up-4 tile-group" id="timeline-profile">
            @foreach ($arts->reverse() as $art)
                <div class="column thumb">
                    <a href="{{ url('/art/' . $art->art_id) }}">
                        <img src="{{ Storage::url('arts/' . $art->art_cat . "/" . $art->art_file) }}"/>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="small-8 small-offset-2 medium-offset-5 medium-2 columns">
                <button type="button" class="button expanded rounded load-more">LOAD MORE</button>
            </div>
        </div>
    </section>
@endsection
