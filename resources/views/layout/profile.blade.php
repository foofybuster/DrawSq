@extends('layout.main')
@section('content')
    <section id="profile-box">
        <h2>Profile</h2>
        <img src="{{ asset('img/loggedin.jpg') }}"/>
        <p><strong>{{ $nameOfUser }}</strong></p>
        <p>Joined in {{ $yearJoined }}</p>
    </section>
    <section id="timeline">
        <div class="row small-up-2 medium-up-3 large-up-4 tile-group" id="timeline-profile">
            @if (count($arts) > 0)
                @foreach ($arts->reverse() as $art)
                    <div class="column thumb">
                        <a href="{{ url('art/' . $art->art_id) }}">
                            <div class="art-thumb"
                                 style="background-image: url('{{ Storage::url('arts/' . $art->art_cat . "/" . $art->art_file) }}');">
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <h2 class="no-upload">{{ $nameOfUser }} hasn't uploaded any art</h2>
            @endif
        </div>
        <div class="row">
            <div class="small-12 columns">
                {{ $arts->links() }}
            </div>
        </div>
    </section>
@endsection
