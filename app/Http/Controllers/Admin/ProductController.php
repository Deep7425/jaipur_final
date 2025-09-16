<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::withTrashed()->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.products', compact('products'));
    }

    public function create()
    {

        return view('admin.add-product');
    }

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:products',
        'description' => 'required|string',
        'short_description' => 'required|string|max:500',
        'regular_price' => 'required|numeric|min:0',
        'sale_price' => 'nullable|numeric|min:0',
        'sku' => 'nullable|string|max:255|unique:products',
        'quantity' => 'required|integer|min:0',
        'stock_status' => 'required|in:instock,outofstock',

        // Multiple images validation
        'image.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        'thumbnail_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'is_active' => 'required|boolean',
        'featured' => 'required|boolean',
        'thumbnail_status' => 'required|in:show,hide',
        'category_id' => 'nullable|integer',
        'brand_id' => 'nullable|integer',
    ]);

    $data = $request->except(['image']); // note: form field is `image[]`

    // Handle multiple product images
    $imageNames = [];
    if ($request->hasFile('image')) {
        foreach ($request->file('image') as $image) {
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/products'), $imageName);
            $imageNames[] = $imageName;
        }
    }
    $data['image'] = json_encode($imageNames); // 👈 match DB column name (`image`)

    // Handle thumbnail image upload
    if ($request->hasFile('thumbnail_image')) {
        $thumbnail = $request->file('thumbnail_image');
        $thumbnailName = time() . '_thumb_' . Str::random(10) . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move(public_path('assets/images/products/thumbnails'), $thumbnailName);
        $data['thumbnail_image'] = $thumbnailName;
    }

    // Auto-generate SKU if empty
    if (empty($data['sku'])) {
        $data['sku'] = 'JJ-' . strtoupper(Str::random(8));
    }

    Product::create($data);

    return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');
}


    public function show(Product $product)
    {
        return view('admin.product-details', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.edit-product', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
            'description' => 'required|string',
            'short_description' => 'required|string|max:500',
            'regular_price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
            'sku' => 'required|string|max:255|unique:products,sku,' . $product->id,
            'quantity' => 'required|integer|min:0',
            'stock_status' => 'required|in:instock,outofstock',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_active' => 'required|boolean',
            'featured' => 'required|boolean',
            'thumbnail_status' => 'required|in:show,hide',
            'category_id' => 'nullable|integer',
            'brand_id' => 'nullable|integer',
        ]);

        $data = $request->all();

        // Handle main image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($product->image && file_exists(public_path('assets/images/products/' . $product->image))) {
                unlink(public_path('assets/images/products/' . $product->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/products'), $imageName);
            $data['image'] = $imageName;
        }

        // Handle thumbnail image upload
        if ($request->hasFile('thumbnail_image')) {
            // Delete old thumbnail
            if ($product->thumbnail_image && file_exists(public_path('assets/images/products/thumbnails/' . $product->thumbnail_image))) {
                unlink(public_path('assets/images/products/thumbnails/' . $product->thumbnail_image));
            }

            $thumbnail = $request->file('thumbnail_image');
            $thumbnailName = time() . '_thumb_' . Str::random(10) . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('assets/images/products/thumbnails'), $thumbnailName);
            $data['thumbnail_image'] = $thumbnailName;
        }

        $product->update($data);

        return redirect()->route('admin.products')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted successfully!');
    }

    public function restore($id)
    {
        $product = Product::withTrashed()->findOrFail($id);
        $product->restore();
        return redirect()->route('admin.products')->with('success', 'Product restored successfully!');
    }

    public function toggleThumbnailStatus(Request $request, Product $product)
    {
        $newStatus = $product->thumbnail_status === 'show' ? 'hide' : 'show';
        $product->update(['thumbnail_status' => $newStatus]);

        return response()->json([
            'success' => true,
            'status' => $newStatus,
            'message' => 'Thumbnail status updated successfully!'
        ]);
    }

    public function toggleFeatured(Request $request, Product $product)
    {
        $product->update(['featured' => !$product->featured]);

        return response()->json([
            'success' => true,
            'featured' => $product->featured,
            'message' => 'Featured status updated successfully!'
        ]);
    }
}
