@extends('layout.admin.Master')

@section('title', 'Products - Jaipur Jazbaa Admin')

@section('description', 'Manage products in the Jaipur Jazbaa collection')

@section('content')
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>Products</h3>
    <div class="flex items-center gap20">
        <a href="{{ route('admin.products.create') }}" class="tf-button">
            <i class="icon-plus"></i> Add Product
        </a>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success mb-20">
        {{ session('success') }}
    </div>
@endif

<div class="wg-box">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>SKU</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Thumbnail Status</th>
                    <th>Featured</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>
                            <div class="product-image">
                                @if($product->thumbnail_image)
                                    <img src="{{ asset('public/assets/images/products/thumbnails/' . $product->thumbnail_image) }}"
                                         alt="{{ $product->name }}" style="width: 50px; height: 50px; object-fit: cover;">
                                @elseif($product->image)
                                    <img src="{{ asset('public/assets/images/products/' . $product->image) }}"
                                         alt="{{ $product->name }}" style="width: 50px; height: 50px; object-fit: cover;">
                                @else
                                    <div class="placeholder" style="width: 50px; height: 50px; background: #f0f0f0; display: flex; align-items: center; justify-content: center;">
                                        <i class="icon-image"></i>
                                    </div>
                                @endif
                            </div>
                        </td>
                        <td>
                            <div class="product-name">
                                <strong>{{ $product->name }}</strong>
                                <div class="text-tiny">{{ Str::limit($product->short_description, 50) }}</div>
                            </div>
                        </td>
                        <td>{{ $product->sku }}</td>
                        <td>
                            @if($product->is_on_sale)
                                <span class="sale-price">{{ number_format($product->sale_price) }}</span>
                                <div class="text-tiny text-muted">{{ number_format($product->regular_price) }}</div>
                            @else
                                {{ number_format($product->regular_price) }}
                            @endif
                        </td>
                        <td>
                            <span class="badge {{ $product->stock_status === 'instock' ? 'badge-success' : 'badge-danger' }}">
                                {{ ucfirst($product->stock_status) }}
                            </span>
                            <div class="text-tiny">Qty: {{ $product->quantity }}</div>
                        </td>
                        <td>
                            <button class="btn btn-sm toggle-thumbnail {{ $product->thumbnail_status === 'show' ? 'btn-success' : 'btn-secondary' }}"
                                    data-product-id="{{ $product->id }}"
                                    data-status="{{ $product->thumbnail_status }}">
                                {{ $product->thumbnail_status === 'show' ? 'Show' : 'Hide' }}
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-sm toggle-featured {{ $product->featured ? 'btn-warning' : 'btn-secondary' }}"
                                    data-product-id="{{ $product->id }}"
                                    data-featured="{{ $product->featured }}">
                                {{ $product->featured ? 'Featured' : 'Normal' }}
                            </button>
                        </td>
                        <td>
                            <span class="badge {{ $product->is_active ? 'badge-success' : 'badge-danger' }}">
                                {{ $product->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-primary">
                                    <i class="icon-edit"></i>
                                </a>
                                <form method="POST" action="{{ route('admin.products.destroy', $product) }}"
                                      style="display: inline-block;"
                                      onsubmit="return confirm('Are you sure you want to delete this product?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="icon-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">
                            <div class="empty-state">
                                <i class="icon-package"></i>
                                <h4>No products found</h4>
                                <p>Start by adding your first product.</p>
                                <a href="{{ route('admin.products.create') }}" class="tf-button">
                                    Add Product
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($products->hasPages())
        <div class="pagination-wrapper">
            {{ $products->links() }}
        </div>
    @endif
</div>
@endsection

@section('additional_js')
<script>
$(document).ready(function() {
    // Toggle thumbnail status
    $('.toggle-thumbnail').on('click', function() {
        const productId = $(this).data('product-id');
        const currentStatus = $(this).data('status');
        const button = $(this);

        $.ajax({
            url: '/admin/products/' + productId + '/toggle-thumbnail',
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    button.data('status', response.status);
                    button.text(response.status === 'show' ? 'Show' : 'Hide');
                    button.removeClass('btn-success btn-secondary')
                           .addClass(response.status === 'show' ? 'btn-success' : 'btn-secondary');

                    // Show success message
                    showNotification('Thumbnail status updated successfully!', 'success');
                }
            },
            error: function() {
                showNotification('Error updating thumbnail status!', 'error');
            }
        });
    });

    // Toggle featured status
    $('.toggle-featured').on('click', function() {
        const productId = $(this).data('product-id');
        const currentFeatured = $(this).data('featured');
        const button = $(this);

        $.ajax({
            url: '/admin/products/' + productId + '/toggle-featured',
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    button.data('featured', response.featured);
                    button.text(response.featured ? 'Featured' : 'Normal');
                    button.removeClass('btn-warning btn-secondary')
                           .addClass(response.featured ? 'btn-warning' : 'btn-secondary');

                    // Show success message
                    showNotification('Featured status updated successfully!', 'success');
                }
            },
            error: function() {
                showNotification('Error updating featured status!', 'error');
            }
        });
    });

    function showNotification(message, type) {
        const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
        const notification = '<div class="alert ' + alertClass + ' alert-dismissible fade show" role="alert">' +
                             message +
                             '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
                             '</div>';

        $('.wg-box').prepend(notification);

        // Auto remove after 3 seconds
        setTimeout(function() {
            $('.alert').fadeOut();
        }, 3000);
    }
});
</script>
@endsection
