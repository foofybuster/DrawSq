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
            <div class="column thumb">
                <a href="#">
                    <img src="img/art1-thumb.jpg"/>
                    <p>by carrotfern</p>
                </a>
            </div>
            <div class="column thumb">
                <img src="img/loggedin.jpg"/>
                <p>by foofybuster</p>
            </div>
            <div class="column thumb">
                <img src="img/loggedin.jpg"/>
                <p>by panudet2000</p>
            </div>
            <div class="column thumb">
                <img src="img/loggedin.jpg"/>
                <p>by whoami</p>
            </div>
            <div class="column thumb">
                <img src="img/loggedin.jpg"/>
                <p>by zartre</p>
            </div>
            <div class="column thumb">
                <img src="img/loggedin.jpg"/>
                <p>by foofybuster</p>
            </div>
            <div class="column thumb">
                <img src="img/loggedin.jpg"/>
                <p>by panudet2000</p>
            </div>
            <div class="column thumb">
                <img src="img/loggedin.jpg"/>
                <p>by zartre</p>
            </div>
            <div class="column show-for-medium-only thumb">
                <img src="img/loggedin.jpg"/>
                <p>by whoami</p>
            </div>
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
                    <p>by {{ $art->user_id }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
