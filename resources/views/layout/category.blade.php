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
                        <div class="art-thumb"
                             style="background-image: url('{{ Storage::url('arts/' . $art->art_cat . "/" . $art->art_file) }}');"></div>
                    </a>
                    <p>by <a href="{{ url('profile/' . $art->user->name) }}">{{ $art->user->name }}</a></p>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="small-12 columns">
                {{ $arts->links() }}
            </div>
        </div>
    </section>
@endsection
