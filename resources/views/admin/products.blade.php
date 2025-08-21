@extends('layout.admin.Master')

@section('title', 'Products - Jaipur Jazbaa Admin')

@section('description', 'Manage all products in the Jaipur Jazbaa collection')

@section('content')
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>All Products</h3>
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
            <div class="text-tiny">All Products</div>
        </li>
    </ul>
</div>

<div class="wg-box">
    <div class="flex items-center justify-between gap10 flex-wrap">
        <div class="wg-filter flex-grow">
            <form class="form-search" action="{{url('/admin/products')}}" method="GET">
                <fieldset class="name">
                    <input type="text" placeholder="Search here..." class="" name="search"
                        tabindex="2" value="{{request('search')}}" aria-required="true">
                </fieldset>
                <div class="button-submit">
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
        <a class="tf-button style-1 w208" href="{{url('/admin/products/create')}}"><i
                class="icon-plus"></i>Add new</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Sale Price</th>
                    <th>SKU</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Featured</th>
                    <th>Stock</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="pname">
                        <div class="image">
                            <img src="{{url('assets/admin/images/products/kurta-1.jpg')}}" alt="" class="image">
                        </div>
                        <div class="name">
                            <a href="#" class="body-title-2">Embroidered Silk Kurta</a>
                            <div class="text-tiny mt-3">Premium silk kurta with intricate embroidery</div>
                        </div>
                    </td>
                    <td>₹18,900</td>
                    <td>₹15,900</td>
                    <td>JJ-ESK-001</td>
                    <td>Kurta Sets</td>
                    <td>Jaipur Jazbaa</td>
                    <td>Yes</td>
                    <td>In Stock</td>
                    <td>25</td>
                    <td>
                        <div class="list-icon-function">
                            <a href="{{url('/admin/products/1')}}" target="_blank">
                                <div class="item eye">
                                    <i class="icon-eye"></i>
                                </div>
                            </a>
                            <a href="{{url('/admin/products/1/edit')}}">
                                <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                </div>
                            </a>
                            <form action="{{url('/admin/products/1')}}" method="POST" style="display: inline;">
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
                            <img src="{{url('assets/admin/images/products/kurta-2.jpg')}}" alt="" class="image">
                        </div>
                        <div class="name">
                            <a href="#" class="body-title-2">Designer Kurta Set</a>
                            <div class="text-tiny mt-3">Complete kurta set with dupatta</div>
                        </div>
                    </td>
                    <td>₹24,900</td>
                    <td>₹21,900</td>
                    <td>JJ-DKS-002</td>
                    <td>Kurta Sets</td>
                    <td>Jaipur Jazbaa</td>
                    <td>Yes</td>
                    <td>In Stock</td>
                    <td>18</td>
                    <td>
                        <div class="list-icon-function">
                            <a href="{{url('/admin/products/2')}}" target="_blank">
                                <div class="item eye">
                                    <i class="icon-eye"></i>
                                </div>
                            </a>
                            <a href="{{url('/admin/products/2/edit')}}">
                                <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                </div>
                            </a>
                            <form action="{{url('/admin/products/2')}}" method="POST" style="display: inline;">
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
                            <img src="{{url('assets/admin/images/products/kaftan-1.jpg')}}" alt="" class="image">
                        </div>
                        <div class="name">
                            <a href="#" class="body-title-2">Festive Collection Kaftan</a>
                            <div class="text-tiny mt-3">Elegant kaftan for special occasions</div>
                        </div>
                    </td>
                    <td>₹21,900</td>
                    <td>₹18,900</td>
                    <td>JJ-FCK-003</td>
                    <td>Kaftans</td>
                    <td>Jaipur Jazbaa</td>
                    <td>Yes</td>
                    <td>In Stock</td>
                    <td>12</td>
                    <td>
                        <div class="list-icon-function">
                            <a href="{{url('/admin/products/3')}}" target="_blank">
                                <div class="item eye">
                                    <i class="icon-eye"></i>
                                </div>
                            </a>
                            <a href="{{url('/admin/products/3/edit')}}">
                                <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                </div>
                            </a>
                            <form action="{{url('/admin/products/3')}}" method="POST" style="display: inline;">
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