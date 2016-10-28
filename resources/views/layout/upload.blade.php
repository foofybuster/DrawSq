@extends('layout.main')
@section('content')
    <section id="upload">
        <form>
            <div class="row">
                <div class="small-12 columns">
                    <h2>Upload a photo</h2>
                    <div class="upload-box">
                        <strong>click to choose a photo</strong>
                    </div>
                </div>
                <div class="small-12 medium-6 columns">
                    <h3>Give it a title</h3>
                    <input type="text" placeholder="Birds flying across a blue sky">
                </div>
                <div class="small-12 medium-6 columns">
                    <h3>Choose a category</h3>
                    <select>
                        <option disabled selected>choose one</option>
                        <option value="husker">Abstract arts</option>
                        <option value="starbuck">Noob sketches</option>
                        <option value="hotdog">Hot Dog</option>
                        <option value="apollo">Apollo</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-offset-5 medium-2 columns">
                    <button type="button" class="button expanded rounded upload">GO!</button>
                </div>
            </div>
        </form>
    </section>
@endsection
