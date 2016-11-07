@extends('layout.main')
@section('content')
    <section id="timeline">
        <!-- STAFF PICKS -->
        <div class="row">
            <div class="small-12 columns">
                <h2>{{ $category }}</h2>
            </div>
        </div>
        <div class="row small-up-2 medium-up-3 large-up-4 tile-group">
            @foreach($arts->reverse() as $art)
                <div class="column thumb">
                    <a href="{{ url('art/' . $art->art_id) }}">
                        <img src="{{ Storage::url('arts/' . $art->art_cat . "/" . $art->art_file) }}"/>
                        <p>by {{ $art->user_id }}</p>
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
