@extends('layout.main')
@section('content')
    <section id="upload">
        <form method="POST" action="/art-upload" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="small-12 columns">
                    <h2>Upload a photo</h2>
                    <div class="upload-box">
                        <input type="file" name="art" required/>
                        <strong>click to choose a photo</strong>
                    </div>
                </div>
                <div class="small-12 medium-6 columns">
                    <h3>Give it a title</h3>
                    <input type="text" placeholder="Birds flying across a blue sky" name="art-name" required>
                </div>
                <div class="small-12 medium-6 columns">
                    <h3>Choose a category</h3>
                    <select name="category" required>
                        <option disabled selected>choose one</option>
                        <option value="abstract-art">Abstract art</option>
                        <option value="drawings">Drawings</option>
                        <option value="fan-art">Fan art</option>
                        <option value="paintings">Paintings</option>
                        <option value="sketches">Sketches</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-offset-5 medium-2 columns">
                    <button type="submit" class="button expanded rounded upload">GO!</button>
                </div>
            </div>
        </form>
    </section>
@endsection
