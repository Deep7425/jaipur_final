@extends('layout.admin.Master')

@section('title', 'Users - Jaipur Jazbaa Admin')

@section('description', 'Manage all system users and customers')

@section('content')
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>Users</h3>
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
            <div class="text-tiny">All Users</div>
        </li>
    </ul>
</div>

<div class="wg-box">
    <div class="flex items-center justify-between gap10 flex-wrap">
        <div class="wg-filter flex-grow">
            <form class="form-search" action="{{url('/admin/users')}}" method="GET">
                <fieldset class="name">
                    <input type="text" placeholder="Search users..." class="" name="search"
                        tabindex="2" value="{{request('search')}}" aria-required="true">
                </fieldset>
                <div class="button-submit">
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="wg-table table-all-user">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th class="text-center">Total Orders</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="pname">
                            <div class="image">
                                <img src="{{url('assets/admin/images/avatar/admin.jpg')}}" alt="" class="image">
                            </div>
                            <div class="name">
                                <a href="#" class="body-title-2">Admin User</a>
                                <div class="text-tiny mt-3">Administrator</div>
                            </div>
                        </td>
                        <td>+91 9876543210</td>
                        <td>admin@jaipurjazbaa.com</td>
                        <td class="text-center"><a href="{{url('/admin/orders')}}" target="_blank">0</a></td>
                        <td>
                            <div class="list-icon-function">
                                <a href="{{url('/admin/users/1/edit')}}">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="pname">
                            <div class="image">
                                <img src="{{url('assets/admin/images/avatar/user-2.jpg')}}" alt="" class="image">
                            </div>
                            <div class="name">
                                <a href="#" class="body-title-2">Priya Sharma</a>
                                <div class="text-tiny mt-3">Customer</div>
                            </div>
                        </td>
                        <td>+91 9876543211</td>
                        <td>priya.sharma@email.com</td>
                        <td class="text-center"><a href="{{url('/admin/orders')}}" target="_blank">3</a></td>
                        <td>
                            <div class="list-icon-function">
                                <a href="{{url('/admin/users/2')}}">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                </a>
                                <a href="{{url('/admin/users/2/edit')}}">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="pname">
                            <div class="image">
                                <img src="{{url('assets/admin/images/avatar/user-3.jpg')}}" alt="" class="image">
                            </div>
                            <div class="name">
                                <a href="#" class="body-title-2">Anita Verma</a>
                                <div class="text-tiny mt-3">Customer</div>
                            </div>
                        </td>
                        <td>+91 9876543212</td>
                        <td>anita.verma@email.com</td>
                        <td class="text-center"><a href="{{url('/admin/orders')}}" target="_blank">1</a></td>
                        <td>
                            <div class="list-icon-function">
                                <a href="{{url('/admin/users/3')}}">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                </a>
                                <a href="{{url('/admin/users/3/edit')}}">
                                    <div class="item edit">
                                        <i class="icon-edit-3"></i>
                                    </div>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="divider"></div>
    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
        <!-- Pagination will be added here when implementing backend -->
    </div>
</div>
@endsection