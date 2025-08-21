@extends('layout.admin.Master')

@section('title', 'Add Slide - Jaipur Jazbaa Admin')

@section('description', 'Add new slide to the website slider')

@section('content')
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>Add Slide</h3>
    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
        <li>
            <a href="{{url('/admin')}}">
                <div class="text-tiny">Dashboard</div>
            </a>
        </li>
        <li>
            <i class="icon-chevron-right"></i>
        </li>
        <li>
            <a href="{{url('/admin/slider')}}">
                <div class="text-tiny">Slider</div>
            </a>
        </li>
        <li>
            <i class="icon-chevron-right"></i>
        </li>
        <li>
            <div class="text-tiny">New Slide</div>
        </li>
    </ul>
</div>

<!-- new-slide -->
<div class="wg-box">
    <form class="form-new-product form-style-1" action="{{url('/admin/slider')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset class="name">
            <div class="body-title">Title <span class="tf-color-1">*</span></div>
            <input class="flex-grow" type="text" placeholder="Slide Title" name="title"
                tabindex="0" value="{{old('title')}}" aria-required="true" required="">
        </fieldset>
        
        <fieldset class="name">
            <div class="body-title">Tagline <span class="tf-color-1">*</span></div>
            <input class="flex-grow" type="text" placeholder="Tagline" name="tagline"
                tabindex="0" value="{{old('tagline')}}" aria-required="true" required="">
        </fieldset>
        
        <fieldset class="name">
            <div class="body-title">Subtitle <span class="tf-color-1">*</span></div>
            <input class="flex-grow" type="text" placeholder="Subtitle" name="subtitle"
                tabindex="0" value="{{old('subtitle')}}" aria-required="true" required="">
        </fieldset>

        <fieldset class="name">
            <div class="body-title">Link URL</div>
            <input class="flex-grow" type="url" placeholder="https://example.com" name="link"
                tabindex="0" value="{{old('link')}}">
        </fieldset>
        
        <fieldset>
            <div class="body-title">Upload images <span class="tf-color-1">*</span></div>
            <div class="upload-image flex-grow">
                <div class="item" id="imgpreview" style="display:none">
                    <img src="#" class="effect8" alt="">
                </div>
                <div id="upload-file" class="item up-load">
                    <label class="uploadfile" for="myFile">
                        <span class="icon">
                            <i class="icon-upload-cloud"></i>
                        </span>
                        <span class="body-text">Drop your images here or select <span
                                class="tf-color">click to browse</span></span>
                        <input type="file" id="myFile" name="image" accept="image/*" required>
                    </label>
                </div>
            </div>
        </fieldset>

        <fieldset class="category">
            <div class="body-title">Status</div>
            <div class="select flex-grow">
                <select class="" name="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
        </fieldset>
        
        <div class="bot">
            <div></div>
            <button class="tf-button w208" type="submit">Save</button>
        </div>
    </form>
</div>
@endsection

@section('additional_js')
<script>
    $(function() {
        $("#myFile").on("change", function(e) {
            const photoInp = $("#myFile");
            const [file] = this.files;
            if (file) {
                $("#imgpreview img").attr('src', URL.createObjectURL(file));
                $("#imgpreview").show();
            }
        });
    });
</script>
@endsection