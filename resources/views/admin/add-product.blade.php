@extends('layout.admin.Master')

@section('title', 'Add Product - Jaipur Jazbaa Admin')

@section('description', 'Add new product to the Jaipur Jazbaa collection')

@section('content')
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>Add Product</h3>
    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="text-tiny">Dashboard</div>
            </a>
        </li>
        <li>
            <i class="icon-chevron-right"></i>
        </li>
        <li>
            <a href="{{ route('admin.products.index') }}">
                <div class="text-tiny">Products</div>
            </a>
        </li>
        <li>
            <i class="icon-chevron-right"></i>
        </li>
        <li>
            <div class="text-tiny">Add product</div>
        </li>
    </ul>
</div>

<!-- form-add-product -->
<form class="tf-section-2 form-add-product" id="productForm" method="POST" enctype="multipart/form-data"
    action="{{ route('admin.products.store') }}">
    @csrf
    <div class="wg-box">
        <fieldset class="name">
            <div class="body-title mb-10">Product name <span class="tf-color-1">*</span></div>
            <input class="mb-10" type="text" placeholder="Enter product name"
                name="name" tabindex="0" value="{{old('name')}}" aria-required="true" required="">
            <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
        </fieldset>

        <fieldset class="name">
            <div class="body-title mb-10">Slug <span class="tf-color-1">*</span></div>
            <input class="mb-10" type="text" placeholder="Enter product slug"
                name="slug" tabindex="0" value="{{old('slug')}}" aria-required="true" required="">
            <div class="text-tiny">Do not exceed 100 characters when entering the product slug.</div>
        </fieldset>

        <div class="gap22 cols">
            <fieldset class="category">
                <div class="body-title mb-10">Category <span class="tf-color-1">*</span></div>
                <div class="select">
                    <select class="" name="category_id" required>
                        <option value="">Choose category</option>
                        <option value="1">Kurta Sets</option>
                        <option value="2">Kaftans</option>
                        <option value="3">Silk Velvets</option>
                        <option value="4">Occasion Wear</option>
                        <option value="5">Ready to Ship</option>
                    </select>
                </div>
            </fieldset>
            <fieldset class="brand">
                <div class="body-title mb-10">Brand <span class="tf-color-1">*</span></div>
                <div class="select">
                    <select class="" name="brand_id" required>
                        <option value="">Choose Brand</option>
                        <option value="1">Jaipur Jazbaa</option>
                    </select>
                </div>
            </fieldset>
        </div>

        <fieldset class="shortdescription">
            <div class="body-title mb-10">Short description <span class="tf-color-1">*</span></div>
            <textarea class="mb-10 ht-150" name="short_description" placeholder="Short description"
                tabindex="0" aria-required="true" required="">{{old('short_description')}}</textarea>
            <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
        </fieldset>

        <fieldset class="description">
            <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
            <textarea class="mb-10" name="description" placeholder="Description" tabindex="0"
                aria-required="true" required="">{{old('description')}}</textarea>
        </fieldset>
    </div>

    <div class="wg-box">
        <!-- Main Product Image Upload -->
        <fieldset>
            <div class="body-title">Product Image <span class="tf-color-1">*</span></div>
            <div class="text-tiny mb-10">Upload high-resolution image for product details page.</div>
            <div class="upload-image flex-grow">
                <div class="item" id="mainImgPreview" style="display:none">
                    <img src="#" class="effect8" alt="">
                </div>
                <div id="upload-main-file" class="item up-load">
                    <label class="uploadfile" for="mainImage">
                        <span class="icon">
                            <i class="icon-upload-cloud"></i>
                        </span>
                        <span class="body-text">Drop your main image here or select <span class="tf-color">click to browse</span></span>
                        <input type="file" multiple id="mainImage" name="image[]" accept="image/*" required>
                    </label>
                </div>
            </div>
        </fieldset>

        <!-- Thumbnail Image Upload -->
        <fieldset>
            <div class="body-title">Thumbnail Image <span class="tf-color-1">*</span></div>
            <div class="text-tiny mb-10">Upload a separate thumbnail image for homepage display. This should be optimized for faster loading.</div>
            <div class="upload-image flex-grow">
                <div class="item" id="thumbImgPreview" style="display:none">
                    <img src="#" class="effect8" alt="">
                </div>
                <div id="upload-thumb-file" class="item up-load">
                    <label class="uploadfile" for="thumbnailImage">
                        <span class="icon">
                            <i class="icon-upload-cloud"></i>
                        </span>
                        <span class="body-text">Drop your thumbnail image here or select <span class="tf-color">click to browse</span></span>
                        <input type="file" id="thumbnailImage" name="thumbnail_image" accept="image/*" required>
                    </label>
                </div>
            </div>
        </fieldset>

        <div class="cols gap22">
            <fieldset class="name">
                <div class="body-title mb-10">Regular price <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="number" placeholder="Enter regular price"
                    name="regular_price" tabindex="0" value="{{old('regular_price')}}" aria-required="true" required="">
            </fieldset>
            <fieldset class="name">
                <div class="body-title mb-10">Sale price</div>
                <input class="mb-10" type="number" placeholder="Enter sale price"
                    name="sale_price" tabindex="0" value="{{old('sale_price')}}">
                <div class="text-tiny">Leave empty if no sale price</div>
            </fieldset>
        </div>

        <div class="cols gap22">
            <fieldset class="name">
                <div class="body-title mb-10">SKU <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="text" placeholder="Enter SKU"
                    name="sku" tabindex="0" value="{{old('sku')}}" aria-required="true" required="">
                <div class="text-tiny">Leave empty to auto-generate</div>
            </fieldset>
            <fieldset class="name">
                <div class="body-title mb-10">Quantity <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="number" placeholder="Enter quantity"
                    name="quantity" tabindex="0" value="{{old('quantity')}}" aria-required="true" required="">
            </fieldset>
        </div>

        <div class="cols gap22">
            <fieldset class="name">
                <div class="body-title mb-10">Stock Status</div>
                <div class="select mb-10">
                    <select class="" name="stock_status">
                        <option value="instock">In Stock</option>
                        <option value="outofstock">Out of Stock</option>
                    </select>
                </div>
            </fieldset>
            <fieldset class="name">
                <div class="body-title mb-10">Featured Product</div>
                <div class="select mb-10">
                    <select class="" name="featured">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
            </fieldset>
        </div>

        <!-- Thumbnail Display Status -->
        <fieldset class="name">
            <div class="body-title mb-10">Thumbnail Display Status <span class="tf-color-1">*</span></div>
            <div class="select mb-10">
                <select class="" name="thumbnail_status" required>
                    <option value="show">Show on Homepage</option>
                    <option value="hide">Hide from Homepage</option>
                </select>
            </div>
            <div class="text-tiny">Controls whether the thumbnail appears on the homepage</div>
        </fieldset>

        <!-- Product Status -->
        <fieldset class="name">
            <div class="body-title mb-10">Product Status</div>
            <div class="select mb-10">
                <select class="" name="is_active">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <div class="text-tiny">Controls overall product visibility</div>
        </fieldset>

        <div class="cols gap10">
            <button class="tf-button w-full" type="submit">Add product</button>
        </div>
    </div>
</form>
@endsection

@section('additional_js')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(function() {
        // Main image preview
        $("#mainImage").on("change", function(e) {
            const [file] = this.files;
            if (file) {
                $("#mainImgPreview img").attr('src', URL.createObjectURL(file));
                $("#mainImgPreview").show();
            }
        });

        // Thumbnail image preview
        $("#thumbnailImage").on("change", function(e) {
            const [file] = this.files;
            if (file) {
                $("#thumbImgPreview img").attr('src', URL.createObjectURL(file));
                $("#thumbImgPreview").show();
            }
        });

        // Auto-generate SKU if empty
        $("input[name='sku']").on("blur", function() {
            if (!$(this).val()) {
                $(this).val("JJ-" + Math.random().toString(36).substr(2, 8).toUpperCase());
            }
        });

        // Auto-generate slug from name
        $("input[name='name']").on("blur", function() {
            const name = $(this).val();
            if (name && !$("input[name='slug']").val()) {
                const slug = name.toLowerCase()
                    .replace(/[^a-z0-9 -]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-')
                    .trim('-');
                $("input[name='slug']").val(slug);
            }
        });
    });


$(document).ready(function () {
    $('#productForm').on('submit', function (e) {
        e.preventDefault(); // prevent page reload

        let formData = new FormData(this); // collect form data including files

        $.ajax({
            url: $(this).attr('action'), // route from form action
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $("#formMessage").html('<p style="color:blue">Submitting...</p>');
            },
            success: function (response) {
                console.log(response)
                $("#formMessage").html('<p style="color:green">Product created successfully!</p>');
                $('#productForm')[0].reset();
                location.reload();
                // reset form after success
            },
            error: function (xhr) {
                let errors = xhr.responseJSON?.errors;
                if (errors) {
                    let errorHtml = '<ul style="color:red">';
                    $.each(errors, function (key, value) {
                        errorHtml += '<li>' + value[0] + '</li>';
                    });
                    errorHtml += '</ul>';
                    $("#formMessage").html(errorHtml);
                } else {
                    $("#formMessage").html('<p style="color:red">Something went wrong!</p>');
                }
            }
        });
    });
});

</script>
@endsection
