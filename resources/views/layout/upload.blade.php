@extends('layout.main')
@section('content')
    <section id="upload">
        <form method="POST" action="/upload" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="small-12 columns">
                    {!! $uploadNotice or null !!}
                    <h2>Upload a photo</h2>
                    <input type="file" name="art" id="art-select" required/>
                    <label id="art-select">accepts only PNG and JPG files</label>
                    <div class="upload-box">
                        <img class="art-preview" alt="Preview" id="art-preview">
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
        <script type="text/javascript">
            document.getElementById("art-select").onchange = function () {
                var reader = new FileReader();
                reader.onload = function (e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("art-preview").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            };
        </script>
    </section>
@endsection
