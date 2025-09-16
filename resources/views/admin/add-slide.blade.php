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
            <a href="{{route('admin.slider.index')}}">
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

<!-- Success/Error Messages -->
@if(session('success'))
    <div class="alert alert-success mb-4">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger mb-4">
        {{ session('error') }}
    </div>
@endif

<!-- new-slide -->
<div class="wg-box">
    <form class="form-new-product form-style-1" action="{{route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <fieldset class="name">
            <div class="body-title">Title <span class="tf-color-1">*</span></div>
            <input class="flex-grow @error('title') is-invalid @enderror" type="text" placeholder="Slide Title" name="title"
                tabindex="0" value="{{old('title')}}" aria-required="true" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </fieldset>
        
        <fieldset class="name">
            <div class="body-title">Tagline</div>
            <input class="flex-grow @error('tagline') is-invalid @enderror" type="text" placeholder="Tagline (optional)" name="tagline"
                tabindex="0" value="{{old('tagline')}}">
            @error('tagline')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </fieldset>
        
        <fieldset class="name">
            <div class="body-title">Subtitle</div>
            <input class="flex-grow @error('subtitle') is-invalid @enderror" type="text" placeholder="Subtitle (optional)" name="subtitle"
                tabindex="0" value="{{old('subtitle')}}">
            @error('subtitle')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </fieldset>

        <fieldset class="name">
            <div class="body-title">Link URL</div>
            <input class="flex-grow @error('link') is-invalid @enderror" type="url" placeholder="https://example.com (optional)" name="link"
                tabindex="0" value="{{old('link')}}">
            @error('link')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </fieldset>
        
        <fieldset>
            <div class="body-title">Upload Image <span class="tf-color-1">*</span></div>
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
            @error('image')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </fieldset>

        <fieldset class="category">
            <div class="body-title">Status</div>
            <div class="select flex-grow">
                <select class="@error('status') is-invalid @enderror" name="status">
                    <option value="1" {{old('status', '1') == '1' ? 'selected' : ''}}>Active</option>
                    <option value="0" {{old('status') == '0' ? 'selected' : ''}}>Inactive</option>
                </select>
            </div>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </fieldset>
        
        <div class="bot">
            <div>
                <a href="{{route('admin.slider.index')}}" class="tf-button style-2">Cancel</a>
            </div>
            <button class="tf-button w208" type="submit">Save Slide</button>
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
        
        // Form validation
        $('form').on('submit', function(e) {
            let isValid = true;
            
            // Check required fields
            $('input[required]').each(function() {
                if (!$(this).val()) {
                    $(this).addClass('is-invalid');
                    isValid = false;
                } else {
                    $(this).removeClass('is-invalid');
                }
            });
            
            // Check image file
            const imageFile = $('#myFile')[0].files[0];
            if (!imageFile) {
                $('#myFile').addClass('is-invalid');
                isValid = false;
            } else {
                $('#myFile').removeClass('is-invalid');
            }
            
            if (!isValid) {
                e.preventDefault();
                showAlert('error', 'Please fill in all required fields');
            }
        });
        
        function showAlert(type, message) {
            const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
            const alertHtml = `<div class="alert ${alertClass} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>`;
            
            // Remove existing alerts
            $('.alert').remove();
            
            // Add new alert at the top
            $('.wg-box').prepend(alertHtml);
        }
    });
</script>
@endsection