<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(Request $request){
        return view('admin.index');
    }

    public function brands(Request $request){
        return view('admin.brands');
    }

    public function addBrand(Request $request){
        return view('admin.add-brand');
    }

    public function categories(Request $request){
        $categories = Category::orderBy('sort_order')->orderBy('name')->get();
        return view('admin.categories', compact('categories'));
    }

    public function addCategory(Request $request){
        return view('admin.add-category');
    }

    public function storeCategory(Request $request){
        try {
            // Validate the request
            $validated = $request->validate([
                'name' => 'required|string|max:255|unique:categories,name',
                'slug' => 'nullable|string|max:255|unique:categories,slug',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'description' => 'nullable|string',
                'is_active' => 'boolean'
            ]);

            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                
                // Create categories directory if it doesn't exist
                $categoriesPath = public_path('assets/images/categories');
                if (!file_exists($categoriesPath)) {
                    mkdir($categoriesPath, 0755, true);
                }
                
                // Move uploaded file
                $image->move($categoriesPath, $imageName);
                $validated['image'] = $imageName;
            }

            // Auto-generate slug if not provided
            if (empty($validated['slug'])) {
                $validated['slug'] = Str::slug($validated['name']);
            }

            // Set default values
            $validated['is_active'] = $request->has('is_active') ? true : false;
            $validated['sort_order'] = 0;

            // Create category
            $category = Category::create($validated);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Category created successfully!',
                    'category' => $category,
                    'redirect' => route('admin.categories')
                ], 200);
            }

            return redirect()->route('admin.categories')->with('success', 'Category created successfully!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $e->errors()
                ], 422);
            }
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred while creating the category: ' . $e->getMessage()
                ], 500);
            }
            return back()->with('error', 'An error occurred while creating the category.');
        }
    }

    public function orders(Request $request){
        return view('admin.orders');
    }

    public function orderDetails(Request $request, $id){
        return view('admin.order-details', compact('id'));
    }

    public function orderTracking(Request $request){
        return view('admin.order-tracking');
    }

    public function coupons(Request $request){
        return view('admin.coupons');
    }

    public function users(Request $request){
        return view('admin.users');
    }

    public function settings(Request $request){
        return view('admin.settings');
    }
}
