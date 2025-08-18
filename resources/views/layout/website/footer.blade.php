<!-- Newsletter Section -->
<section class="newsletter-section">
  <div class="container">
    <h2 class="newsletter-title font-playfair">Get On The List</h2>
    <p class="mb-4">A window to our world. Sign up to make the most of your shopping experience.</p>
    <form class="newsletter-form" action="#" method="POST">
      @csrf
      <input type="email" name="email" class="newsletter-input" placeholder="Enter your email" required>
      <button type="submit" class="btn-elegant">Join</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="py-5" style="background: var(--primary-color);">
  <div class="container">
    <div class="row">
      <!-- Brand Section -->
      <div class="col-lg-4 mb-4">
        <h3 class="font-playfair mb-3">Jaipur Jazbaa</h3>
        <p class="mb-3">Crafting timeless elegance through authentic Indian fashion. Each piece tells a story of heritage, artistry, and contemporary style.</p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="text-dark" title="Facebook">
            <i class="fa fa-facebook-square" style="font-size: 1.5rem;"></i>
          </a>
          <a href="#" class="text-dark" title="Instagram">
            <i class="fa fa-instagram" style="font-size: 1.5rem;"></i>
          </a>
          <a href="#" class="text-dark" title="Twitter">
            <i class="fa fa-twitter" style="font-size: 1.5rem;"></i>
          </a>
          <a href="#" class="text-dark" title="Pinterest">
            <i class="fa fa-pinterest" style="font-size: 1.5rem;"></i>
          </a>
        </div>
      </div>

      <!-- Shop Section -->
      <div class="col-lg-2 col-md-6 mb-4">
        <h5 class="mb-3 font-weight-600">Shop</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="{{url('/shop')}}" class="text-dark text-decoration-none">New Arrivals</a></li>
          <li class="mb-2"><a href="{{url('/shop/kurta-sets')}}" class="text-dark text-decoration-none">Kurta Sets</a></li>
          <li class="mb-2"><a href="{{url('/shop/kaftans')}}" class="text-dark text-decoration-none">Kaftans</a></li>
          <li class="mb-2"><a href="{{url('/shop/occasion-wear')}}" class="text-dark text-decoration-none">Occasion Wear</a></li>
          <li class="mb-2"><a href="{{url('/shop/ready-to-ship')}}" class="text-dark text-decoration-none">Ready to Ship</a></li>
        </ul>
      </div>

      <!-- Support Section -->
      <div class="col-lg-2 col-md-6 mb-4">
        <h5 class="mb-3 font-weight-600">Support</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="{{url('/contact')}}" class="text-dark text-decoration-none">Contact Us</a></li>
          <li class="mb-2"><a href="{{url('/shipping')}}" class="text-dark text-decoration-none">Shipping & Delivery</a></li>
          <li class="mb-2"><a href="{{url('/returns')}}" class="text-dark text-decoration-none">Returns/Exchange</a></li>
          <li class="mb-2"><a href="{{url('/size-guide')}}" class="text-dark text-decoration-none">Size Guide</a></li>
          <li class="mb-2"><a href="{{url('/faq')}}" class="text-dark text-decoration-none">FAQs</a></li>
        </ul>
      </div>

      <!-- Brand Section -->
      <div class="col-lg-2 col-md-6 mb-4">
        <h5 class="mb-3 font-weight-600">Brand</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="{{url('/about')}}" class="text-dark text-decoration-none">About Us</a></li>
          <li class="mb-2"><a href="{{url('/our-story')}}" class="text-dark text-decoration-none">Our Story</a></li>
          <li class="mb-2"><a href="{{url('/careers')}}" class="text-dark text-decoration-none">Careers</a></li>
          <li class="mb-2"><a href="{{url('/press')}}" class="text-dark text-decoration-none">Press</a></li>
          <li class="mb-2"><a href="{{url('/testimonials')}}" class="text-dark text-decoration-none">Testimonials</a></li>
        </ul>
      </div>

      <!-- Collections Section -->
      <div class="col-lg-2 col-md-6 mb-4">
        <h5 class="mb-3 font-weight-600">Collections</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="{{url('/collections/indra')}}" class="text-dark text-decoration-none">Indra</a></li>
          <li class="mb-2"><a href="{{url('/collections/love-riot')}}" class="text-dark text-decoration-none">Love Riot</a></li>
          <li class="mb-2"><a href="{{url('/collections/daur')}}" class="text-dark text-decoration-none">Daur</a></li>
          <li class="mb-2"><a href="{{url('/collections/silk-velvets')}}" class="text-dark text-decoration-none">Silk Velvets</a></li>
          <li class="mb-2"><a href="{{url('/gift-cards')}}" class="text-dark text-decoration-none">Gift Cards</a></li>
        </ul>
      </div>
    </div>

    <!-- Footer Bottom -->
    <hr class="my-4" style="border-color: var(--border-color);">
    <div class="row align-items-center">
      <div class="col-md-6">
        <p class="mb-0 text-muted">&copy; 2024 Jaipur Jazbaa. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <a href="{{url('/privacy-policy')}}" class="text-dark text-decoration-none me-3">Privacy Policy</a>
        <a href="{{url('/terms-conditions')}}" class="text-dark text-decoration-none">Terms & Conditions</a>
      </div>
    </div>
  </div>
</footer>

<style>
  .footer a:hover {
    color: var(--secondary-color) !important;
    transition: color 0.3s ease;
  }

  .footer h5 {
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 1rem;
  }

  .footer .social-links a:hover i {
    color: var(--secondary-color);
    transform: translateY(-2px);
    transition: all 0.3s ease;
  }

  .newsletter-form button:hover {
    background: var(--secondary-color);
    transform: translateY(-1px);
  }

  @media (max-width: 768px) {
    .newsletter-form {
      flex-direction: column;
      gap: 0.5rem;
    }

    .newsletter-input {
      margin-bottom: 0.5rem;
    }

    .footer .row > div {
      margin-bottom: 2rem;
    }

    .footer .col-md-6.text-md-end {
      text-align: left !important;
    }
  }
</style>
