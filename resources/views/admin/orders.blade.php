@extends('layout.admin.Master')

@section('title', 'Orders - Jaipur Jazbaa Admin')

@section('description', 'Manage all orders for Jaipur Jazbaa')

@section('content')
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>Orders</h3>
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
            <div class="text-tiny">Orders</div>
        </li>
    </ul>
</div>

<div class="wg-box">
    <div class="flex items-center justify-between gap10 flex-wrap">
        <div class="wg-filter flex-grow">
            <form class="form-search" action="{{url('/admin/orders')}}" method="GET">
                <fieldset class="name">
                    <input type="text" placeholder="Search orders..." class="" name="search"
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
                        <th style="width:70px">OrderNo</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Subtotal</th>
                        <th class="text-center">Tax</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Order Date</th>
                        <th class="text-center">Total Items</th>
                        <th class="text-center">Delivered On</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1001</td>
                        <td class="text-center">Priya Sharma</td>
                        <td class="text-center">9876543210</td>
                        <td class="text-center">₹15,900</td>
                        <td class="text-center">₹2,835</td>
                        <td class="text-center">₹18,735</td>
                        <td class="text-center">
                            <span class="badge badge-success">Ordered</span>
                        </td>
                        <td class="text-center">2024-12-20 10:30:00</td>
                        <td class="text-center">1</td>
                        <td class="text-center">-</td>
                        <td class="text-center">
                            <a href="{{url('/admin/orders/1001')}}">
                                <div class="list-icon-function view-icon">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1002</td>
                        <td class="text-center">Anita Verma</td>
                        <td class="text-center">9876543211</td>
                        <td class="text-center">₹21,900</td>
                        <td class="text-center">₹3,942</td>
                        <td class="text-center">₹25,842</td>
                        <td class="text-center">
                            <span class="badge badge-warning">Processing</span>
                        </td>
                        <td class="text-center">2024-12-20 14:15:00</td>
                        <td class="text-center">1</td>
                        <td class="text-center">-</td>
                        <td class="text-center">
                            <a href="{{url('/admin/orders/1002')}}">
                                <div class="list-icon-function view-icon">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1003</td>
                        <td class="text-center">Meera Gupta</td>
                        <td class="text-center">9876543212</td>
                        <td class="text-center">₹18,900</td>
                        <td class="text-center">₹3,402</td>
                        <td class="text-center">₹22,302</td>
                        <td class="text-center">
                            <span class="badge badge-info">Shipped</span>
                        </td>
                        <td class="text-center">2024-12-19 16:45:00</td>
                        <td class="text-center">1</td>
                        <td class="text-center">2024-12-21</td>
                        <td class="text-center">
                            <a href="{{url('/admin/orders/1003')}}">
                                <div class="list-icon-function view-icon">
                                    <div class="item eye">
                                        <i class="icon-eye"></i>
                                    </div>
                                </div>
                            </a>
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