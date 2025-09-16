@extends('layout.admin.Master')

@section('title', 'View Slide - Jaipur Jazbaa Admin')

@section('description', 'View slide details and information')

@section('content')
<div class="flex items-center flex-wrap justify-between gap20 mb-27">
    <h3>View Slide</h3>
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
            <a href="{{route('admin.slider.index')}}">
                <div class="text-tiny">Slider</div>
            </a>
        </li>
        <li>
            <i class="icon-chevron-right"></i>
        </li>
        <li>
            <div class="text-tiny">View Slide</div>
        </li>
    </ul>
</div>

<div class="wg-box">
    <div class="row">
        <div class="col-md-6">
            <div class="slide-image-container">
                <img src="{{asset('slider/' . $slider->image)}}" alt="{{$slider->title}}" 
                     class="img-fluid" style="max-width: 100%; border-radius: 8px;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="slide-details">
                <h4 class="mb-3">{{$slider->title}}</h4>
                
                @if($slider->tagline)
                <div class="detail-item mb-3">
                    <strong>Tagline:</strong>
                    <p class="mb-0">{{$slider->tagline}}</p>
                </div>
                @endif
                
                @if($slider->subtitle)
                <div class="detail-item mb-3">
                    <strong>Subtitle:</strong>
                    <p class="mb-0">{{$slider->subtitle}}</p>
                </div>
                @endif
                
                @if($slider->link)
                <div class="detail-item mb-3">
                    <strong>Link:</strong>
                    <p class="mb-0">
                        <a href="{{$slider->link}}" target="_blank" class="text-primary">
                            {{$slider->link}}
                        </a>
                    </p>
                </div>
                @endif
                
                <div class="detail-item mb-3">
                    <strong>Status:</strong>
                    <span class="badge {{$slider->status ? 'bg-success' : 'bg-secondary'}}">
                        {{$slider->status ? 'Active' : 'Inactive'}}
                    </span>
                </div>
                
                <div class="detail-item mb-3">
                    <strong>Order:</strong>
                    <span class="badge bg-info">{{$slider->order}}</span>
                </div>
                
                <div class="detail-item mb-3">
                    <strong>Created:</strong>
                    <p class="mb-0">{{$slider->created_at->format('F j, Y \a\t g:i A')}}</p>
                </div>
                
                <div class="detail-item mb-3">
                    <strong>Last Updated:</strong>
                    <p class="mb-0">{{$slider->updated_at->format('F j, Y \a\t g:i A')}}</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="divider my-4"></div>
    
    <div class="action-buttons">
        <a href="{{route('admin.slider.edit', $slider->id)}}" class="tf-button style-1 me-3">
            <i class="icon-edit-3"></i> Edit Slide
        </a>
        <a href="{{route('admin.slider.index')}}" class="tf-button style-2">
            <i class="icon-arrow-left"></i> Back to List
        </a>
    </div>
</div>
@endsection

@section('additional_css')
<style>
    .slide-image-container {
        text-align: center;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 8px;
    }
    
    .detail-item {
        padding: 10px 0;
        border-bottom: 1px solid #eee;
    }
    
    .detail-item:last-child {
        border-bottom: none;
    }
    
    .action-buttons {
        text-align: center;
        padding: 20px 0;
    }
    
    .badge {
        font-size: 0.875em;
        padding: 0.5em 0.75em;
    }
</style>
@endsection 