<!-- Mobile Navigation Overlay -->
<div class="mobile-nav-overlay" id="mobileNavOverlay"></div>

<!-- Mobile Navigation Menu -->
<div class="mobile-nav-menu" id="mobileNavMenu">
  <div class="mobile-nav-header">
    <h3 class="font-playfair">Jaipur Jazbaa</h3>
    <button class="mobile-nav-close" id="mobileNavClose">
      <span>&times;</span>
    </button>
  </div>

  <div class="mobile-nav-content">
    <!-- Search Bar -->
    <div class="mobile-search-bar">
      <form class="mobile-search-form">
        <input type="text" class="mobile-search-input" placeholder="Search products...">
        <button type="submit" class="mobile-search-btn">
          <svg width="18" height="18" viewBox="0 0 20 20" fill="currentColor">
            <use href="#icon_search" />
          </svg>
        </button>
      </form>
    </div>

    <!-- Navigation Links -->
    <nav class="mobile-nav-links">
      <ul class="list-unstyled">
        <li><a href="{{url('/')}}" class="mobile-nav-link">Home</a></li>
        <li><a href="{{url('/shop')}}" class="mobile-nav-link">Shop All</a></li>
        <li>
          <a href="#" class="mobile-nav-link mobile-nav-toggle" data-target="collections">
            Collections <span class="mobile-nav-arrow">›</span>
          </a>
          <ul class="mobile-submenu" id="collections">
            <li><a href="{{url('/shop/kurta-sets')}}" class="mobile-nav-link">Kurta Sets</a></li>
            <li><a href="{{url('/shop/kaftans')}}" class="mobile-nav-link">Kaftans</a></li>
            <li><a href="{{url('/shop/occasion-wear')}}" class="mobile-nav-link">Occasion Wear</a></li>
            <li><a href="{{url('/shop/silk-velvets')}}" class="mobile-nav-link">Silk Velvets</a></li>
            <li><a href="{{url('/shop/ready-to-ship')}}" class="mobile-nav-link">Ready to Ship</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="mobile-nav-link mobile-nav-toggle" data-target="special-collections">
            Special Collections <span class="mobile-nav-arrow">›</span>
          </a>
          <ul class="mobile-submenu" id="special-collections">
            <li><a href="{{url('/collections/indra')}}" class="mobile-nav-link">Indra</a></li>
            <li><a href="{{url('/collections/love-riot')}}" class="mobile-nav-link">Love Riot</a></li>
            <li><a href="{{url('/collections/daur')}}" class="mobile-nav-link">Daur</a></li>
          </ul>
        </li>
        <li><a href="{{url('/about')}}" class="mobile-nav-link">About</a></li>
        <li><a href="{{url('/contact')}}" class="mobile-nav-link">Contact</a></li>
      </ul>
    </nav>

    <!-- Account Links -->
    <div class="mobile-account-section">
      <h5>My Account</h5>
      <ul class="list-unstyled">
        <li><a href="{{url('/login')}}" class="mobile-nav-link">Sign In</a></li>
        <li><a href="{{url('/register')}}" class="mobile-nav-link">Create Account</a></li>
        <li><a href="{{url('/wishlist')}}" class="mobile-nav-link">Wishlist</a></li>
        <li><a href="{{url('/cart')}}" class="mobile-nav-link">Shopping Cart</a></li>
      </ul>
    </div>

    <!-- Social Links -->
    <div class="mobile-social-section">
      <h5>Follow Us</h5>
      <div class="mobile-social-links">
        <a href="#" class="mobile-social-link">
          <i class="fa fa-facebook-square"></i>
        </a>
        <a href="#" class="mobile-social-link">
          <i class="fa fa-instagram"></i>
        </a>
        <a href="#" class="mobile-social-link">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="#" class="mobile-social-link">
          <i class="fa fa-pinterest"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<style>
  .mobile-nav-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 1998;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
  }

  .mobile-nav-overlay.active {
    opacity: 1;
    visibility: visible;
  }

  .mobile-nav-menu {
    position: fixed;
    top: 0;
    right: -100%;
    width: 320px;
    max-width: 85%;
    height: 100%;
    background: var(--white);
    z-index: 1999;
    transition: right 0.3s ease;
    overflow-y: auto;
  }

  .mobile-nav-menu.active {
    right: 0;
  }

  .mobile-nav-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1.5rem;
    border-bottom: 1px solid var(--border-color);
    background: var(--primary-color);
  }

  .mobile-nav-header h3 {
    margin: 0;
    color: var(--text-dark);
    font-size: 1.5rem;
  }

  .mobile-nav-close {
    background: none;
    border: none;
    font-size: 2rem;
    color: var(--text-dark);
    cursor: pointer;
    padding: 0;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .mobile-nav-content {
    padding: 1.5rem;
  }

  .mobile-search-bar {
    margin-bottom: 2rem;
  }

  .mobile-search-form {
    display: flex;
    gap: 0.5rem;
  }

  .mobile-search-input {
    flex: 1;
    padding: 10px 12px;
    border: 1px solid var(--border-color);
    border-radius: 4px;
    font-size: 14px;
  }

  .mobile-search-btn {
    background: var(--text-dark);
    color: var(--white);
    border: none;
    padding: 10px 12px;
    border-radius: 4px;
    cursor: pointer;
  }

  .mobile-nav-links {
    margin-bottom: 2rem;
  }

  .mobile-nav-link {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 0;
    color: var(--text-dark);
    text-decoration: none;
    font-weight: 500;
    border-bottom: 1px solid var(--border-color);
    transition: color 0.3s ease;
  }

  .mobile-nav-link:hover {
    color: var(--secondary-color);
  }

  .mobile-nav-arrow {
    font-size: 1.2rem;
    transition: transform 0.3s ease;
  }

  .mobile-nav-toggle.active .mobile-nav-arrow {
    transform: rotate(90deg);
  }

  .mobile-submenu {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
    padding-left: 1rem;
  }

  .mobile-submenu.active {
    max-height: 300px;
  }

  .mobile-submenu .mobile-nav-link {
    border-bottom: none;
    padding: 8px 0;
    font-weight: 400;
    color: var(--text-light);
  }

  .mobile-account-section,
  .mobile-social-section {
    margin-bottom: 2rem;
  }

  .mobile-account-section h5,
  .mobile-social-section h5 {
    color: var(--text-dark);
    font-weight: 600;
    margin-bottom: 1rem;
    font-size: 1rem;
  }

  .mobile-social-links {
    display: flex;
    gap: 1rem;
  }

  .mobile-social-link {
    color: var(--text-dark);
    font-size: 1.5rem;
    transition: color 0.3s ease;
  }

  .mobile-social-link:hover {
    color: var(--secondary-color);
  }

  @media (min-width: 769px) {
    .mobile-nav-overlay,
    .mobile-nav-menu {
      display: none;
    }
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const mobileMenuToggle = document.getElementById('mobileMenuToggle');
  const mobileNavMenu = document.getElementById('mobileNavMenu');
  const mobileNavOverlay = document.getElementById('mobileNavOverlay');
  const mobileNavClose = document.getElementById('mobileNavClose');
  const mobileNavToggles = document.querySelectorAll('.mobile-nav-toggle');

  // Open mobile menu
  if (mobileMenuToggle) {
    mobileMenuToggle.addEventListener('click', function() {
      mobileNavMenu.classList.add('active');
      mobileNavOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  }

  // Close mobile menu
  function closeMobileMenu() {
    mobileNavMenu.classList.remove('active');
    mobileNavOverlay.classList.remove('active');
    document.body.style.overflow = 'auto';
  }

  if (mobileNavClose) {
    mobileNavClose.addEventListener('click', closeMobileMenu);
  }

  if (mobileNavOverlay) {
    mobileNavOverlay.addEventListener('click', closeMobileMenu);
  }

  // Submenu toggles
  mobileNavToggles.forEach(toggle => {
    toggle.addEventListener('click', function(e) {
      e.preventDefault();
      const target = this.dataset.target;
      const submenu = document.getElementById(target);
      
      if (submenu) {
        this.classList.toggle('active');
        submenu.classList.toggle('active');
      }
    });
  });

  // Close menu when clicking on links
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-link:not(.mobile-nav-toggle)');
  mobileNavLinks.forEach(link => {
    link.addEventListener('click', function() {
      // Small delay to allow navigation
      setTimeout(closeMobileMenu, 100);
    });
  });
});
</script>
