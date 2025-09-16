@extends('layout.website.Master')

@section('title', 'Jaipur Jazba - Timeless Elegance Redefined')

@section('description', 'Discover our exquisite collection of handcrafted Indian wear, where tradition meets contemporary style. Shop Kurta Sets, Kaftans, and Occasion Wear.')

@section('content')

<style>

.collection-title{
  color: var(--white);
}

.collection-card img{
object-fit: fill;
}
.celebrity-image{
    object-fit: fill;
}
.product-image{
    object-fit: fill;
}
.noor img{
    height: 120vh;
}

.noory img{
    height: 80vh;
}

.product-image{
    height: 80vh;
}

/* For mobile screens */
@media(max-width: 767px) {
  .noory img{
    height: 500px !important;
  }
  .noor img{
    height: 500px;
}
.product-image{
    height: 500px;
}
}

</style>
<!-- Hero Section -->
<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-lg-6">
        <div class="hero-content fade-in-up">
          <h1 class="hero-title font-playfair">Timeless Elegance<br>Redefined</h1>
          <p class="hero-subtitle">
            Discover our exquisite collection of handcrafted Indian wear,
            where tradition meets contemporary style
          </p>
          <a href="#" class="btn-elegant">Explore Collection</a>
        </div>
      </div>

      <!-- Hero Image -->
      <div class="col-lg-6 text-center">
        <img
          src="{{url('assets/images/Adobe Express - file.webp')}}"
          alt="Elegant Fashion"
          class="img-fluid rounded hero-image fade-in-up"
          style="max-height: 600px; object-fit: cover;"
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
        <div class="collection-card noory">
          <img src="{{url('images/4/KRS_1853.jpg')}}" alt="Kurta Sets">
          <div class="collection-overlay">
            <h3 class="collection-title" style="color: var(--white);">Kurta Sets</h3>
            <p>Elegant and comfortable everyday wear</p>
            <a href="#" class="btn-elegant mt-2">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="collection-card noory">
          <img src="{{url('images/6/KRS_1843.jpg')}}" alt="Kaftans">
          <div class="collection-overlay">
            <h3 class="collection-title">Suits</h3>
            <p>Flowing silhouettes for effortless style</p>
            <a href="#" class="btn-elegant mt-2">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="collection-card noory">
          <img src="{{url('images/7/KRS_1813.jpg')}}" alt="Silk Velvets">
          <div class="collection-overlay">
            <h3 class="collection-title">Silk Velvets</h3>
            <p>Luxurious textures for special occasions</p>
            <a href="#" class="btn-elegant mt-2">Shop Now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-6">
        <div class="collection-card noor">
          <img src="{{url('images/7/KRS_1812.jpg')}}" alt="Daur Collection">
          <div class="collection-overlay">
            <h3 class="collection-title">Noor Collection</h3>
            <p>Contemporary designs with traditional roots</p>
            <a href="#" class="btn-elegant mt-2">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="collection-card noor">
          <img src="{{url('images/4/KRS_1853.jpg')}}" alt="Love Riot Collection">
          <div class="collection-overlay">
            <h3 class="collection-title">Love Riot Collection</h3>
            <p>Bold patterns and vibrant expressions</p>
            <a href="#" class="btn-elegant mt-2">Explore</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Celebrity Section -->
<!--<section class="celebrity-section">-->
<!--  <div class="container">-->
<!--    <h2 class="section-title font-playfair text-center mb-5">Women of Jaipur Jazba</h2>-->
<!--    <div class="row">-->
<!--      <div class="col-md-3 col-sm-6">-->
<!--        <div class="celebrity-card">-->
<!--          <img src="{{url('assets/images/jaipur/Kareena_Kapoor_Khan_-_Tappe_home.webp')}}" alt="Kareena Kapoor Khan" class="celebrity-image">-->
<!--          <h4 class="celebrity-name">Kareena Kapoor Khan</h4>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="col-md-3 col-sm-6">-->
<!--        <div class="celebrity-card">-->
<!--          <img src="{{url('assets/images/jaipur/Dia_Mirza_-_Tappe.webp')}}" alt="Dia Mirza" class="celebrity-image">-->
<!--          <h4 class="celebrity-name">Dia Mirza</h4>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="col-md-3 col-sm-6">-->
<!--        <div class="celebrity-card">-->
<!--          <img src="{{url('assets/images/jaipur/Kriti-Sanon-Lamha.webp')}}" alt="Kriti Sanon" class="celebrity-image">-->
<!--          <h4 class="celebrity-name">Kriti Sanon</h4>-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="col-md-3 col-sm-6">-->
<!--        <div class="celebrity-card">-->
<!--          <img src="{{url('assets/images/jaipur/1_Anshika_Singh.avif')}}" alt="Anshika Singh" class="celebrity-image">-->
<!--          <h4 class="celebrity-name">Anshika Singh</h4>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<!-- Featured Products -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title font-playfair">Featured Products</h2>
    <div class="product-grid">
      <div class="product-card-elegant">
        <img src="{{url('images/4/KRS_1853.jpg')}}" alt="Elegant Kurta" class="product-image">
        <div class="product-info">
          <h3 class="product-title">Embroidered Silk Kurta</h3>
          <p class="product-price">INR (To Be Annonced)</p>
          <div class="mt-3">
            <a href="#" class="btn-elegant-cart">Add to Cart</a>
          </div>
        </div>
      </div>
      <div class="product-card-elegant">
        <img src="{{url('images/8/KRS_1799.jpg')}}" alt="Designer Set" class="product-image">
        <div class="product-info">
          <h3 class="product-title">Designer Kurta Set</h3>
          <p class="product-price">INR (To Be Annonced)</p>
          <div class="mt-3">
            <a href="#" class="btn-elegant-cart">Add to Cart</a>
          </div>
        </div>
      </div>
      <div class="product-card-elegant">
        <img src="{{url('images/10/KRS_1760.jpg')}}" alt="Festive Wear" class="product-image">
        <div class="product-info">
          <h3 class="product-title">Festive Collection</h3>
          <p class="product-price">INR (To Be Annonced)</p>
          <div class="mt-3">
            <a href="#" class="btn-elegant-cart">Add to Cart</a>
          </div>
        </div>
      </div>
      <div class="product-card-elegant">
        <img src="{{url('images/11/KRS_1747.jpg')}}" alt="Casual Elegance" class="product-image">
        <div class="product-info">
          <h3 class="product-title">Casual Elegance</h3>
          <p class="product-price">INR (To Be Annonced)</p>
          <div class="mt-3">
            <a href="#" class="btn-elegant-cart">Add to Cart</a>
          </div>
        </div>
      </div>

        <div class="product-card-elegant">
        <img src="{{url('images/5/KRS_1737.jpg')}}" alt="Casual Elegance" class="product-image">
        <div class="product-info">
          <h3 class="product-title">Casual Elegance</h3>
          <p class="product-price">INR (To Be Annonced)</p>
          <div class="mt-3">
            <a href="#" class="btn-elegant-cart">Add to Cart</a>
          </div>
        </div>
      </div>

        <div class="product-card-elegant">
        <img src="{{url('images/6/KRS_1842.jpg')}}" alt="Casual Elegance" class="product-image">
        <div class="product-info">
          <h3 class="product-title">Casual Elegance</h3>
          <p class="product-price">INR (To Be Annonced)</p>
          <div class="mt-3">
            <a href="#" class="btn-elegant-cart">Add to Cart</a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="#" class="btn-elegant">View All Products</a>
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
          <p class="mb-4">Discover our curated selection of ready-to-ship pieces, perfect for those special moments that can't wait. Each piece is crafted with the same attention to detail and quality you expect from Jaipur Jazba.</p>
          <a href="#" class="btn-elegant">Shop Ready to Ship</a>
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
          <p>"I had the best experience shopping with Jaipur Jazba from beginning to end. They were very responsive and helpful. The packaging was amazing and the quality and design of the outfit are stunning."</p>
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

  /* Enhanced Add to Cart Button */
  .btn-elegant-cart {
    background: linear-gradient(135deg, var(--text-dark) 0%, var(--secondary-color) 100%);
    color: var(--white);
    padding: 14px 28px;
    border: none;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-size: 0.85rem;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    box-shadow: 0 8px 25px rgba(44, 44, 44, 0.15);
    transform: translateY(0);
    width: 100%;
  }

  .btn-elegant-cart::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
  }

  .btn-elegant-cart:hover::before {
    left: 100%;
  }

  .btn-elegant-cart:hover {
    background: linear-gradient(135deg, var(--secondary-color) 0%, #a08660 100%);
    color: var(--white);
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(44, 44, 44, 0.25);
    text-decoration: none;
  }

  .btn-elegant-cart:active {
    transform: translateY(-1px);
    box-shadow: 0 5px 15px rgba(44, 44, 44, 0.2);
  }

  .btn-elegant-cart::after {
    content: '🛒';
    font-size: 0.9rem;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .btn-elegant-cart:hover::after {
    opacity: 1;
  }

  /* Ripple effect */
  .btn-elegant-cart {
    position: relative;
    overflow: hidden;
  }

  @keyframes ripple {
    0% {
      transform: scale(0);
      opacity: 0.6;
    }
    100% {
      transform: scale(4);
      opacity: 0;
    }
  }

  .btn-elegant-cart .ripple {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: scale(0);
    animation: ripple 0.6s linear;
    pointer-events: none;
  }

  /* Loading state */
  .btn-elegant-cart.loading {
    pointer-events: none;
    opacity: 0.8;
  }

  .btn-elegant-cart.loading::after {
    content: '';
    width: 16px;
    height: 16px;
    border: 2px solid transparent;
    border-top: 2px solid currentColor;
    border-radius: 50%;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

  /* Mobile responsiveness */
  @media (max-width: 768px) {
    .btn-elegant-cart {
      padding: 12px 24px;
      font-size: 0.8rem;
      letter-spacing: 0.5px;
    }
  }

  .fade-in-up {
  opacity: 0;
  transform: translateY(40px);
  transition: all 1.2s ease-in-out;
}

/* Active state (visible) */
.fade-in-up.show {
  opacity: 1;
  transform: translateY(0);
}

/* Delay image slightly for smooth stagger */
.hero-image {
  transition-delay: 0.3s;
}

</style>



<script>
   window.addEventListener("load", function () {
  // Select all animated elements
  const elements = document.querySelectorAll(".fade-in-up");

  elements.forEach((el, index) => {
    setTimeout(() => {
      el.classList.add("show");
    }, index * 100); // staggered delay for nicer effect
  });
});

  // Add ripple effect to cart buttons
  document.addEventListener('DOMContentLoaded', function() {
    const cartButtons = document.querySelectorAll('.btn-elegant-cart');

    cartButtons.forEach(button => {
      button.addEventListener('click', function(e) {
        // Prevent default for demo
        e.preventDefault();

        // Create ripple effect
        const ripple = document.createElement('span');
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;

        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('ripple');

        this.appendChild(ripple);

        // Add loading state
        this.classList.add('loading');

        // Remove ripple and loading after animation
        setTimeout(() => {
          ripple.remove();
          this.classList.remove('loading');

          // Show success feedback
          const originalText = this.innerHTML;
          this.innerHTML = '✓ Added!';
          this.style.background = 'linear-gradient(135deg, #28a745 0%, #20c997 100%)';

          setTimeout(() => {
            this.innerHTML = originalText;
            this.style.background = '';
          }, 2000);
        }, 600);
      });
    });
  });
</script>
@endsection
