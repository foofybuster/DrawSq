@extends('layout.main')
@section('content')
    <section id="single">
        <div class="row">
            <div class="small-12 medium-8 columns">
                <h2>{{ $artName }}</h2>
                <img src="{{ $artPath }}" class="single"/>
            </div>
            <div class="small-12 medium-4 columns">
                <div class="art-meta">
                    <h5>by <a href="{{ url('profile/' . $artUserName) }}">{{ $artUserName }}</a></h5>
                    <ul>
                        <li>{{ $artCreated }}</li>
                        <li><a href="{{ url('discover/' . $artCatUri) }}">{{ $artCatName }}</a></li>
                        @if ($artEndorse < 2)
                            <li>{{ $artEndorse }} endorsement</li>
                        @else
                            <li>{{ $artEndorse }} endorsements</li>
                        @endif
                    </ul>
                </div>
                <button type="button" class="button expanded rounded">ENDORSE NOW!</button>
            </div>
        </div>
    </section>
@endsection
