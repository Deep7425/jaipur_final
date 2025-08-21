@extends('layout.admin.Master')

@section('title', 'Slider - Jaipur Jazbaa Admin')

@section('description', 'Manage website slider images and content')

@section('content')
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>Slider</h3>
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
            <div class="text-tiny">Slider</div>
        </li>
    </ul>
</div>

<div class="wg-box">
    <div class="flex items-center justify-between gap10 flex-wrap">
        <div class="wg-filter flex-grow">
            <form class="form-search" action="{{url('/admin/slider')}}" method="GET">
                <fieldset class="name">
                    <input type="text" placeholder="Search slides..." class="" name="search"
                        tabindex="2" value="{{request('search')}}" aria-required="true">
                </fieldset>
                <div class="button-submit">
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
        <a class="tf-button style-1 w208" href="{{url('/admin/slider/create')}}"><i
                class="icon-plus"></i>Add new</a>
    </div>
    <div class="wg-table table-all-user">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Tagline</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="pname">
                        <div class="image">
                            <img src="{{url('assets/admin/images/slider/slide-1.jpg')}}" alt="" class="image">
                        </div>
                    </td>
                    <td>New Collection</td>
                    <td>Timeless Elegance</td>
                    <td>Discover Heritage Fashion</td>
                    <td>{{url('/shop')}}</td>
                    <td>
                        <div class="list-icon-function">
                            <a href="{{url('/admin/slider/1/edit')}}">
                                <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                </div>
                            </a>
                            <form action="{{url('/admin/slider/1')}}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <div class="item text-danger delete" onclick="this.closest('form').submit()">
                                    <i class="icon-trash-2"></i>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="pname">
                        <div class="image">
                            <img src="{{url('assets/admin/images/slider/slide-2.jpg')}}" alt="" class="image">
                        </div>
                    </td>
                    <td>Festive Collection</td>
                    <td>Celebrate in Style</td>
                    <td>Exquisite Occasion Wear</td>
                    <td>{{url('/shop/occasion-wear')}}</td>
                    <td>
                        <div class="list-icon-function">
                            <a href="{{url('/admin/slider/2/edit')}}">
                                <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                </div>
                            </a>
                            <form action="{{url('/admin/slider/2')}}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <div class="item text-danger delete" onclick="this.closest('form').submit()">
                                    <i class="icon-trash-2"></i>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="pname">
                        <div class="image">
                            <img src="{{url('assets/admin/images/slider/slide-3.jpg')}}" alt="" class="image">
                        </div>
                    </td>
                    <td>Ready to Ship</td>
                    <td>Instant Elegance</td>
                    <td>Available for Immediate Delivery</td>
                    <td>{{url('/shop/ready-to-ship')}}</td>
                    <td>
                        <div class="list-icon-function">
                            <a href="{{url('/admin/slider/3/edit')}}">
                                <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                </div>
                            </a>
                            <form action="{{url('/admin/slider/3')}}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <div class="item text-danger delete" onclick="this.closest('form').submit()">
                                    <i class="icon-trash-2"></i>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="divider"></div>
    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
        <!-- Pagination will be added here when implementing backend -->
    </div>
</div>
@endsection