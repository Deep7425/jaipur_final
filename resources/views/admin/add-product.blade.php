@extends('layout.admin.Master')

@section('title', 'Add Product - Jaipur Jazbaa Admin')

@section('description', 'Add new product to the Jaipur Jazbaa collection')

@section('content')
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>Add Product</h3>
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
            <a href="{{url('/admin/products')}}">
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
<form class="tf-section-2 form-add-product" method="POST" enctype="multipart/form-data"
    action="{{url('/admin/products')}}">
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
                        <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                        <input type="file" id="myFile" name="image" accept="image/*" required>
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
                <div class="body-title mb-10">Sale price <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="number" placeholder="Enter sale price"
                    name="sale_price" tabindex="0" value="{{old('sale_price')}}" aria-required="true" required="">
            </fieldset>
        </div>

        <div class="cols gap22">
            <fieldset class="name">
                <div class="body-title mb-10">SKU <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="text" placeholder="Enter SKU"
                    name="SKU" tabindex="0" value="{{old('SKU')}}" aria-required="true" required="">
            </fieldset>
            <fieldset class="name">
                <div class="body-title mb-10">Quantity <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="number" placeholder="Enter quantity"
                    name="quantity" tabindex="0" value="{{old('quantity')}}" aria-required="true" required="">
            </fieldset>
        </div>

        <div class="cols gap22">
            <fieldset class="name">
                <div class="body-title mb-10">Stock</div>
                <div class="select mb-10">
                    <select class="" name="stock_status">
                        <option value="instock">InStock</option>
                        <option value="outofstock">Out of Stock</option>
                    </select>
                </div>
            </fieldset>
            <fieldset class="name">
                <div class="body-title mb-10">Featured</div>
                <div class="select mb-10">
                    <select class="" name="featured">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
            </fieldset>
        </div>

        <div class="cols gap10">
            <button class="tf-button w-full" type="submit">Add product</button>
        </div>
    </div>
</form>
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