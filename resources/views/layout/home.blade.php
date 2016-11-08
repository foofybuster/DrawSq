@extends('layout.main')
@section('content')
    <section id="timeline">
        <!-- STAFF PICKS -->
        <div class="row">
            <div class="small-12 columns">
                <h2>Staff Picks</h2>
            </div>
        </div>
        <div class="row small-up-2 medium-up-3 large-up-4 tile-group">
            @foreach($staffPicks->reverse() as $art)
                <div class="column thumb">
                    <a href="{{ url('art/' . $art->art_id) }}">
                        <img src="{{ Storage::url('arts/' . $art->art_cat . "/" . $art->art_file) }}"/>
                        <p>by {{ $art->user->name }}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <!-- NEW -->
        <div class="row">
            <div class="small-12 columns">
                <h2>New Pieces</h2>
            </div>
        </div>
        <div class="row small-up-2 medium-up-3 large-up-4 tile-group">
            @foreach($newPieces->reverse() as $art)
                <div class="column thumb">
                    <a href="{{ url('art/' . $art->art_id) }}">
                        <img src="{{ Storage::url('arts/' . $art->art_cat . "/" . $art->art_file) }}"/>
                    </a>
                    <p>by {{ $art->user->name }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
