@extends('layout.admin.Master')

@section('title', 'Brands - Jaipur Jazbaa Admin')

@section('description', 'Manage all brands in the system')

@section('content')
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>All Brands</h3>
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
            <div class="text-tiny">All Brands</div>
        </li>
    </ul>
</div>

<div class="wg-box">
    <div class="flex items-center justify-between gap10 flex-wrap">
        <div class="wg-filter flex-grow">
            <form class="form-search" action="{{url('/admin/brands')}}" method="GET">
                <fieldset class="name">
                    <input type="text" placeholder="Search brands..." class="" name="search"
                        tabindex="2" value="{{request('search')}}" aria-required="true">
                </fieldset>
                <div class="button-submit">
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
        <a class="tf-button style-1 w208" href="{{url('/admin/brands/create')}}"><i
                class="icon-plus"></i>Add new</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Products</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="pname">
                        <div class="image">
                            <img src="{{url('assets/admin/images/brand/jaipur-jazbaa.jpg')}}" alt="" class="image">
                        </div>
                        <div class="name">
                            <a href="#" class="body-title-2">Jaipur Jazbaa</a>
                        </div>
                    </td>
                    <td>jaipur-jazbaa</td>
                    <td>25</td>
                    <td>
                        <div class="list-icon-function">
                            <a href="{{url('/admin/brands/1')}}">
                                <div class="item eye">
                                    <i class="icon-eye"></i>
                                </div>
                            </a>
                            <a href="{{url('/admin/brands/1/edit')}}">
                                <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                </div>
                            </a>
                            <form action="{{url('/admin/brands/1')}}" method="POST" style="display: inline;">
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