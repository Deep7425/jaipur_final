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

<div class="wg-box">
    <div class="flex items-center justify-between gap10 flex-wrap">
        <div class="wg-filter flex-grow">
            <form class="form-search" action="{{route('admin.slider.index')}}" method="GET">
                <fieldset class="name">
                    <input type="text" placeholder="Search slides..." class="" name="search"
                        tabindex="2" value="{{request('search')}}" aria-required="true">
                </fieldset>
                <div class="button-submit">
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
        <a class="tf-button style-1 w208" href="{{route('admin.slider.create')}}"><i
                class="icon-plus"></i>Add new</a>
    </div>

    <div class="wg-table table-all-user">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Tagline</th>
                    <th>Subtitle</th>
                    <th>Link</th>
                    <th>Status</th>
                    <th>Order</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($sliders as $slider)
                <tr data-slider-id="{{$slider->id}}">
                    <td>{{$slider->id}}</td>
                    <td class="pname">
                        <div class="image">
                            <img src="{{asset('public/slider/' . $slider->image)}}" alt="{{$slider->title}}" class="image" style="width: 80px; height: 60px; object-fit: cover;">
                        </div>
                    </td>
                    <td>{{$slider->title}}</td>
                    <td>{{$slider->tagline}}</td>
                    <td>{{$slider->subtitle}}</td>
                    <td>
                        @if($slider->link)
                            <a href="{{$slider->link}}" target="_blank" class="text-primary">{{Str::limit($slider->link, 30)}}</a>
                        @else
                            <span class="text-muted">No link</span>
                        @endif
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input status-toggle" type="checkbox"
                                   data-slider-id="{{$slider->id}}"
                                   {{$slider->status ? 'checked' : ''}}>
                            <label class="form-check-label">
                                {{$slider->status ? 'Active' : 'Inactive'}}
                            </label>
                        </div>
                    </td>
                    <td>
                        <input type="number" class="form-control order-input"
                               value="{{$slider->order}}"
                               data-slider-id="{{$slider->id}}"
                               style="width: 60px;">
                    </td>
                    <td>
                        <div class="list-icon-function">
                            <a href="{{route('admin.slider.edit', $slider->id)}}" title="Edit">
                                <div class="item edit">
                                    <i class="icon-edit-3"></i>
                                </div>
                            </a>
                            <a href="{{route('admin.slider.show', $slider->id)}}" title="View">
                                <div class="item eye">
                                    <i class="icon-eye"></i>
                                </div>
                            </a>
                            <form action="{{route('admin.slider.destroy', $slider->id)}}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <div class="item text-danger delete"
                                     onclick="if(confirm('Are you sure you want to delete this slider?')) this.closest('form').submit()"
                                     title="Delete">
                                    <i class="icon-trash-2"></i>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center py-4">
                        <div class="text-muted">No sliders found. <a href="{{route('admin.slider.create')}}" class="text-primary">Create your first slider</a></div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($sliders->hasPages())
    <div class="divider"></div>
    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
        {{ $sliders->links() }}
    </div>
    @endif
</div>
@endsection

@section('additional_js')
<script>
$(function() {
    // Status toggle functionality
    $('.status-toggle').on('change', function() {
        const sliderId = $(this).data('slider-id');
        const isChecked = $(this).is(':checked');

        $.ajax({
            url: `/admin/slider/${sliderId}/toggle-status`,
            method: 'POST',
            data: {
                _token: '{{csrf_token()}}'
            },
            success: function(response) {
                if (response.success) {
                    // Update label
                    const label = $(this).siblings('label');
                    label.text(isChecked ? 'Active' : 'Inactive');

                    // Show success message
                    showAlert('success', response.message);
                } else {
                    // Revert checkbox if failed
                    $(this).prop('checked', !isChecked);
                    showAlert('error', response.message);
                }
            },
            error: function() {
                // Revert checkbox on error
                $(this).prop('checked', !isChecked);
                showAlert('error', 'Failed to update status');
            }
        });
    });

    // Order update functionality
    let orderTimeout;
    $('.order-input').on('input', function() {
        const sliderId = $(this).data('slider-id');
        const newOrder = $(this).val();

        clearTimeout(orderTimeout);
        orderTimeout = setTimeout(function() {
            updateSliderOrder(sliderId, newOrder);
        }, 1000);
    });

    function updateSliderOrder(sliderId, order) {
        $.ajax({
            url: '/admin/slider/update-order',
            method: 'POST',
            data: {
                _token: '{{csrf_token()}}',
                sliders: [{
                    id: sliderId,
                    order: order
                }]
            },
            success: function(response) {
                if (response.success) {
                    showAlert('success', response.message);
                } else {
                    showAlert('error', response.message);
                }
            },
            error: function() {
                showAlert('error', 'Failed to update order');
            }
        });
    }

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

        // Auto-hide after 3 seconds
        setTimeout(function() {
            $('.alert').fadeOut();
        }, 3000);
    }
});
</script>
@endsection
