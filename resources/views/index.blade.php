@extends('layout.website.Master')

@section('title', 'Jaipur Jazbaa - Timeless Elegance Redefined')

@section('description', 'Discover our exquisite collection of handcrafted Indian wear, where tradition meets contemporary style. Shop Kurta Sets, Kaftans, and Occasion Wear.')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hero-content">
          <h1 class="hero-title font-playfair">Timeless Elegance<br>Redefined</h1>
          <p class="hero-subtitle">Discover our exquisite collection of handcrafted Indian wear, where tradition meets contemporary style</p>
          <a href="{{url('/shop')}}" class="btn-elegant">Explore Collection</a>
        </div>
      </div>
      <div class="col-lg-6 text-center">
        <img 
          src="{{url('assets/images/jaipur/SC-LB-830-removebg-preview.png')}}" 
          alt="Elegant Fashion" 
          class="img-fluid rounded hero-image"
          style="max-height: 600px; object-fit: cover; opacity:0; transform: translateY(30px); transition: all 1s ease-in-out;"
        >
      </div>
    </div>
  </div>
</section>

<!-- Collections Section -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title font-playfair">Our Collections</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="collection-card">
          <img src="{{url('assets/images/jaipur/Kurta_Sets_2.webp')}}" alt="Kurta Sets">
          <div class="collection-overlay">
            <h3 class="collection-title">Kurta Sets</h3>
            <p>Elegant and comfortable everyday wear</p>
            <a href="{{url('/shop/kurta-sets')}}" class="btn-elegant mt-2">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="collection-card">
          <img src="{{url('assets/images/jaipur/Kaftans_b51ca44c-acd9-4df4-b5ad-f191ed56e91b.webp')}}" alt="Kaftans">
          <div class="collection-overlay">
            <h3 class="collection-title">Kaftans</h3>
            <p>Flowing silhouettes for effortless style</p>
            <a href="{{url('/shop/kaftans')}}" class="btn-elegant mt-2">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="collection-card">
          <img src="{{url('assets/images/jaipur/Silk_Velvets_e34cbd7c-5c00-483d-a631-4f21805c2be8.webp')}}" alt="Silk Velvets">
          <div class="collection-overlay">
            <h3 class="collection-title">Silk Velvets</h3>
            <p>Luxurious textures for special occasions</p>
            <a href="{{url('/shop/silk-velvets')}}" class="btn-elegant mt-2">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="collection-card">
          <img src="{{url('assets/images/jaipur/Website_-_Daur_Collection_Image.webp')}}" alt="Daur Collection">
          <div class="collection-overlay">
            <h3 class="collection-title">Daur Collection</h3>
            <p>Contemporary designs with traditional roots</p>
            <a href="{{url('/collections/daur')}}" class="btn-elegant mt-2">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="collection-card">
          <img src="{{url('assets/images/jaipur/Website_-_Love_Riot_Collection_Image.webp')}}" alt="Love Riot Collection">
          <div class="collection-overlay">
            <h3 class="collection-title">Love Riot Collection</h3>
            <p>Bold patterns and vibrant expressions</p>
            <a href="{{url('/collections/love-riot')}}" class="btn-elegant mt-2">Explore</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Celebrity Section -->
<section class="celebrity-section">
  <div class="container">
    <h2 class="section-title font-playfair text-center mb-5">Women of Jaipur Jazbaa</h2>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="celebrity-card">
          <img src="{{url('assets/images/jaipur/Kareena_Kapoor_Khan_-_Tappe_home.webp')}}" alt="Kareena Kapoor Khan" class="celebrity-image">
          <h4 class="celebrity-name">Kareena Kapoor Khan</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="celebrity-card">
          <img src="{{url('assets/images/jaipur/Dia_Mirza_-_Tappe.webp')}}" alt="Dia Mirza" class="celebrity-image">
          <h4 class="celebrity-name">Dia Mirza</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="celebrity-card">
          <img src="{{url('assets/images/jaipur/Kriti-Sanon-Lamha.webp')}}" alt="Kriti Sanon" class="celebrity-image">
          <h4 class="celebrity-name">Kriti Sanon</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="celebrity-card">
          <img src="{{url('assets/images/jaipur/1_Anshika_Singh.avif')}}" alt="Anshika Singh" class="celebrity-image">
          <h4 class="celebrity-name">Anshika Singh</h4>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Featured Products -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title font-playfair">Featured Products</h2>
    <div class="product-grid">
      <div class="product-card-elegant">
        <img src="{{url('assets/images/jaipur/SC-LB-167.webp')}}" alt="Elegant Kurta" class="product-image">
        <div class="product-info">
          <h3 class="product-title">Embroidered Silk Kurta</h3>
          <p class="product-price">INR 15,900</p>
          <div class="mt-3">
            <a href="#" class="btn-elegant">Add to Cart</a>
          </div>
        </div>
      </div>
      <div class="product-card-elegant">
        <img src="{{url('assets/images/jaipur/SC-LB-830.webp')}}" alt="Designer Set" class="product-image">
        <div class="product-info">
          <h3 class="product-title">Designer Kurta Set</h3>
          <p class="product-price">INR 21,900</p>
          <div class="mt-3">
            <a href="#" class="btn-elegant">Add to Cart</a>
          </div>
        </div>
      </div>
      <div class="product-card-elegant">
        <img src="{{url('assets/images/jaipur/SC-LB-998.webp')}}" alt="Festive Wear" class="product-image">
        <div class="product-info">
          <h3 class="product-title">Festive Collection</h3>
          <p class="product-price">INR 18,900</p>
          <div class="mt-3">
            <a href="#" class="btn-elegant">Add to Cart</a>
          </div>
        </div>
      </div>
      <div class="product-card-elegant">
        <img src="{{url('assets/images/jaipur/SC-LB-63.webp')}}" alt="Casual Elegance" class="product-image">
        <div class="product-info">
          <h3 class="product-title">Casual Elegance</h3>
          <p class="product-price">INR 13,900</p>
          <div class="mt-3">
            <a href="#" class="btn-elegant">Add to Cart</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="text-center mt-5">
      <a href="{{url('/shop')}}" class="btn-elegant">View All Products</a>
    </div>
  </div>
</section>

<!-- Ready to Ship -->
<section class="py-5" style="background: var(--primary-color);">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img src="{{url('assets/images/jaipur/Ready_to_Ship_2.webp')}}" alt="Ready to Ship" class="img-fluid rounded">
      </div>
      <div class="col-lg-6">
        <div class="ps-lg-5">
          <h2 class="font-playfair mb-4">Ready To Ship</h2>
          <p class="mb-4">Discover our curated selection of ready-to-ship pieces, perfect for those special moments that can't wait. Each piece is crafted with the same attention to detail and quality you expect from Jaipur Jazbaa.</p>
          <a href="{{url('/shop/ready-to-ship')}}" class="btn-elegant">Shop Ready to Ship</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title font-playfair">What Our Customers Say</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="testimonial-card" style="background: var(--white); padding: 2rem; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
          <div class="d-flex align-items-center mb-3">
            <img src="{{url('assets/images/jaipur/2_Zohara_Basith.webp')}}" alt="Zohara Basith" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
            <div>
              <h5 class="mb-0">Zohara Basith</h5>
              <div style="color: #ffc107;">★★★★★</div>
            </div>
          </div>
          <p>"I had the best experience shopping with Jaipur Jazbaa from beginning to end. They were very responsive and helpful. The packaging was amazing and the quality and design of the outfit are stunning."</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="testimonial-card" style="background: var(--white); padding: 2rem; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
          <div class="d-flex align-items-center mb-3">
            <img src="{{url('assets/images/jaipur/3_Rhea_Mutha.avif')}}" alt="Rhea Mutha" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
            <div>
              <h5 class="mb-0">Rhea Mutha</h5>
              <div style="color: #ffc107;">★★★★★</div>
            </div>
          </div>
          <p>"Thank you so much for delivering this outfit on such short notice! It was such a perfect choice for my mehendi! So comfortable and so beautiful ♥"</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="testimonial-card" style="background: var(--white); padding: 2rem; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
          <div class="d-flex align-items-center mb-3">
            <img src="{{url('assets/images/jaipur/1_Anshika_Singh.avif')}}" alt="Anshika Singh" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
            <div>
              <h5 class="mb-0">Anshika Singh</h5>
              <div style="color: #ffc107;">★★★★★</div>
            </div>
          </div>
          <p>"Gorgeous brand, gorgeous designs. Got many compliments and they even accommodated my request to customise my dupatta which I deeply appreciated."</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('additional_css')
<style>
  .testimonial-card {
    transition: transform 0.3s ease;
  }
  
  .testimonial-card:hover {
    transform: translateY(-5px);
  }
  
  .collection-overlay .btn-elegant {
    font-size: 0.9rem;
    padding: 8px 20px;
  }
  
  .product-info .btn-elegant {
    font-size: 0.9rem;
    padding: 8px 20px;
    width: 100%;
  }
</style>

<script>
    window.addEventListener("load", function() {
    const heroImg = document.querySelector(".hero-image");
    heroImg.style.opacity = "1";
    heroImg.style.transform = "translateY(0)";
  });
</script>
@endsection
