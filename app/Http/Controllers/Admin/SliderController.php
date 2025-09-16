<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Slider::query();

        // Search functionality
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('tagline', 'like', "%{$search}%")
                  ->orWhere('subtitle', 'like', "%{$search}%");
            });
        }

        $sliders = $query->orderBy('order', 'asc')->paginate(10);

        return view('admin.slider', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add-slide');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'link' => 'nullable|url|max:500',
            'status' => 'boolean'
        ]);

        // dd($request->all());


            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();

                // Store image in public/slider folder
                $image->move(public_path('slider'), $imageName);
            }

            // Get the next order number
            $nextOrder = Slider::max('order') + 1;

            // Create slider
            Slider::create([
                'title' => $request->title,
                'tagline' => $request->tagline,
                'subtitle' => $request->subtitle,
                'image' => $imageName,
                'link' => $request->link,
                'status' => $request->status ?? true,
                'order' => $nextOrder
            ]);

            return redirect()->route('admin.slider.index')
                           ->with('success', 'Slider created successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        return view('admin.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.edit-slider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'link' => 'nullable|url|max:500',
            'status' => 'boolean'
        ]);

        try {
            $data = [
                'title' => $request->title,
                'tagline' => $request->tagline,
                'subtitle' => $request->subtitle,
                'link' => $request->link,
                'status' => $request->status ?? true
            ];

            // Handle image upload if new image is provided
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();

                // Store new image
                $image->move(public_path('slider'), $imageName);

                // Delete old image
                if ($slider->image && file_exists(public_path('slider/' . $slider->image))) {
                    unlink(public_path('slider/' . $slider->image));
                }

                $data['image'] = $imageName;
            }

            $slider->update($data);

            return redirect()->route('admin.slider.index')
                           ->with('success', 'Slider updated successfully!');

        } catch (\Exception $e) {
            return back()->withInput()
                        ->with('error', 'Failed to update slider. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        try {
            // Delete image file
            if ($slider->image && file_exists(public_path('slider/' . $slider->image))) {
                unlink(public_path('slider/' . $slider->image));
            }

            $slider->delete();

            return redirect()->route('admin.slider.index')
                           ->with('success', 'Slider deleted successfully!');

        } catch (\Exception $e) {
            return back()->with('error', 'Failed to delete slider. Please try again.');
        }
    }

    /**
     * Update slider order
     */
    public function updateOrder(Request $request)
    {
        $request->validate([
            'sliders' => 'required|array',
            'sliders.*.id' => 'required|exists:sliders,id',
            'sliders.*.order' => 'required|integer|min:0'
        ]);

        try {
            foreach ($request->sliders as $sliderData) {
                Slider::where('id', $sliderData['id'])
                      ->update(['order' => $sliderData['order']]);
            }

            return response()->json(['success' => true, 'message' => 'Order updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to update order'], 500);
        }
    }

    /**
     * Toggle slider status
     */
    public function toggleStatus(Slider $slider)
    {
        try {
            $slider->update(['status' => !$slider->status]);

            $message = $slider->status ? 'Slider activated successfully!' : 'Slider deactivated successfully!';

            return response()->json([
                'success' => true,
                'message' => $message,
                'status' => $slider->status
            ]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to update status'], 500);
        }
    }
}
