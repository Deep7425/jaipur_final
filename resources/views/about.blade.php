@extends('layout.website.Master')

@section('title', 'About Us - Jaipur Jazbaa')

@section('description', 'Learn about Jaipur Jazbaa\'s journey in crafting timeless elegance through authentic Indian fashion, where tradition meets contemporary style.')

@section('content')
<section class="contact-us container">
  <div class="mw-930">
    <h2 class="page-title">About Us</h2>
  </div>

  <div class="about-us__content pb-5 mb-5">
    <p class="mb-5">
      <img loading="lazy" class="w-100 h-auto d-block" src="{{url('assets/images/about/about-1.jpg')}}" width="1410"
        height="550" alt="About Jaipur Jazbaa" />
    </p>
    <div class="mw-930">
      <h3 class="mb-4">OUR STORY</h3>
      <p class="fs-6 fw-medium mb-4">At Jaipur Jazbaa, we believe in crafting timeless elegance through authentic Indian fashion. Each piece in our collection tells a story of heritage, artistry, and contemporary style, bringing you the finest in traditional Indian wear.</p>
      <p class="mb-4">Our journey began with a passion for preserving the rich textile traditions of India while embracing modern design sensibilities. From the vibrant streets of Jaipur to fashion-conscious women worldwide, we create pieces that celebrate femininity, grace, and cultural heritage. Every kurta set, kaftan, and occasion wear piece is meticulously crafted by skilled artisans who have inherited their craft through generations.</p>
      <div class="row mb-3">
        <div class="col-md-6">
          <h5 class="mb-3">Our Mission</h5>
          <p class="mb-3">To empower women with clothing that celebrates their individuality while honoring traditional Indian craftsmanship and contemporary design excellence.</p>
        </div>
        <div class="col-md-6">
          <h5 class="mb-3">Our Vision</h5>
          <p class="mb-3">To be the global destination for premium Indian ethnic wear, where every piece reflects our commitment to quality, authenticity, and timeless elegance.</p>
        </div>
      </div>
    </div>
    <div class="mw-930 d-lg-flex align-items-lg-center">
      <div class="image-wrapper col-lg-6">
        <img class="h-auto" loading="lazy" src="{{url('assets/images/about/about-1.jpg')}}" width="450" height="500" alt="Our Craftsmanship">
      </div>
      <div class="content-wrapper col-lg-6 px-lg-4">
        <h5 class="mb-3">The Brand</h5>
        <p>Jaipur Jazbaa represents the perfect fusion of traditional Indian artistry and contemporary fashion. Our collections feature handpicked fabrics, intricate embroidery, and designs that resonate with the modern woman who values her cultural roots. From everyday elegance to special occasion glamour, we offer pieces that make every moment memorable.</p>
      </div>
    </div>
  </div>
</section>
@endsection