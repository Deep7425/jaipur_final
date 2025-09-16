@extends('layout.admin.Master')

@section('title', 'Categories - Jaipur Jazbaa Admin')

@section('description', 'Manage product categories')

@section('content')
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>Categories</h3>
    <div class="flex items-center gap20">
        <a href="{{ route('admin.categories.create') }}" class="tf-button">
            <i class="icon-plus"></i> Add Category
        </a>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success mb-20">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-error mb-20">
        {{ session('error') }}
    </div>
@endif

<div class="wg-box">
    <div class="wg-table">
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Products</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>
                            @if($category->image)
                                <img src="{{ asset('assets/images/categories/' . $category->image) }}" 
                                     alt="{{ $category->name }}" 
                                     style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;">
                            @else
                                <div style="width: 50px; height: 50px; background: #f0f0f0; border-radius: 4px; display: flex; align-items: center; justify-content: center;">
                                    <i class="icon-image" style="color: #999;"></i>
                                </div>
                            @endif
                        </td>
                        <td>
                            <div class="body-title-2">{{ $category->name }}</div>
                        </td>
                        <td>
                            <div class="text-tiny">{{ $category->slug }}</div>
                        </td>
                        <td>
                            @if($category->is_active)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <div class="text-tiny">{{ $category->products->count() }} products</div>
                        </td>
                        <td>
                            <div class="text-tiny">{{ $category->created_at->format('M d, Y') }}</div>
                        </td>
                        <td>
                            <div class="flex items-center gap10">
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" onclick="deleteCategory({{ $category->id }})">Delete</button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            <div class="text-tiny">No categories found. <a href="{{ route('admin.categories.create') }}">Create your first category</a></div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('additional_js')
<script>
    function deleteCategory(categoryId) {
        if (confirm('Are you sure you want to delete this category?')) {
            // Add delete functionality here
            console.log('Delete category:', categoryId);
        }
    }
</script>
@endsection
