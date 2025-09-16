<style>
  .header-elegant {
    background: var(--white);
    box-shadow: 0 2px 20px rgba(0,0,0,0.1);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
  }

  .logo-elegant {
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--text-dark);
    text-decoration: none;
  }

  .logo-elegant:hover {
    color: var(--secondary-color);
    text-decoration: none;
  }

  .nav-elegant {
    display: flex;
    gap: 2rem;
    align-items: center;
  }

  .nav-elegant a {
    color: var(--text-dark);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
    position: relative;
  }

  .nav-elegant a:hover {
    color: var(--secondary-color);
  }

  .nav-elegant a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -5px;
    left: 50%;
    background-color: var(--secondary-color);
    transition: all 0.3s ease;
    transform: translateX(-50%);
  }

  .nav-elegant a:hover::after {
    width: 100%;
  }

  .header-tools {
    display: flex;
    align-items: center;
    gap: 1rem;
  }

  .header-tools a {
    color: var(--text-dark);
    transition: color 0.3s ease;
    position: relative;
  }

  .header-tools a:hover {
    color: var(--secondary-color);
  }

  .cart-badge {
    position: absolute;
    top: -8px;
    right: -8px;
    background: var(--text-dark);
    color: var(--white);
    border-radius: 50%;
    width: 18px;
    height: 18px;
    font-size: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
  }

  .mobile-menu-toggle {
    display: none;
    background: none;
    border: none;
    color: var(--text-dark);
    font-size: 1.5rem;
    cursor: pointer;
  }

  @media (max-width: 768px) {
    .nav-elegant {
      display: none;
    }

    .mobile-menu-toggle {
      display: block;
    }

    .logo-elegant {
      font-size: 1.5rem;
    }
  }
.logo__image{
    width: 100%;
    height:80px;
}

/* Base styles */
.search-modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.6);
  z-index: 9999;
  display: none;
  justify-content: center;
  align-items: center;
}

.search-modal-content {
  background-color: #fff;
  width: 90%;
  max-width: 600px;
  padding: 20px;
  border-radius: 8px;
}

.search-form {
  display: flex;
  align-items: center;
  gap: 10px;
}

.search-input {
  flex: 1;
  padding: 10px 12px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.search-submit {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 10px;
  border-radius: 4px;
  cursor: pointer;
}

.search-close {
  background: none;
  border: none;
  font-size: 24px;
  line-height: 1;
  color: #333;
  cursor: pointer;
}

/* Responsive behavior */
@media (max-width: 600px) {
  .search-modal-content {
    width: 95%;
    padding: 15px;
  }

  .search-form {
    flex-direction: column;
    align-items: stretch;
  }

  .search-input,
  .search-submit,
  .search-close {
    width: 100%;
    margin-bottom: 10px;
  }

  .search-submit,
  .search-close {
    font-size: 18px;
    padding: 10px;
  }

  .search-close {
    position: absolute;
    top: 20px;
    right: 20px;
    margin-bottom: 0;
  }
  .logo__image{
    width: 60px;
    height:82px;
}
}


</style>

<header class="header-elegant">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center py-3" >
      <!-- Logo -->
      <a href="{{url('/')}}" class="logo-elegant font-playfair "><img class="logo__image" style="" src="{{url('assets/images/logo.png')}}" alt=""></a>

      <!-- Desktop Navigation -->
      <nav class="nav-elegant d-none d-md-flex">
        <a href="{{url('/')}}">Home</a>
        <a href="{{url('shop')}}">Shop All</a>
        <a href="#">Occasion Wear</a>
        <a href="{{url('/about')}}">About</a>
        <a href="{{url('/contact')}}">Contact</a>
      </nav>

      <!-- Header Tools -->
      <div class="header-tools">
        <!-- Search -->
        <a href="#" class="search-toggle" title="Search">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
            <use href="#icon_search" />
          </svg>
        </a>

        <!-- User Account -->
        <a href="{{url('/login')}}" title="Account">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
            <use href="#icon_user" />
          </svg>
        </a>

        <!-- Wishlist -->
        <a href="#" title="Wishlist">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
            <use href="#icon_heart" />
          </svg>
        </a>

        <!-- Shopping Cart -->
        <a href="#" class="position-relative" title="Shopping Cart">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
            <use href="#icon_cart" />
          </svg>
          <span class="cart-badge">0</span>
        </a>

        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle d-md-none" id="mobileMenuToggle">
          <svg width="25" height="18" viewBox="0 0 25 18" fill="currentColor">
            <use href="#icon_nav" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>

<!-- Search Modal -->
<div class="search-modal" id="searchModal" style="display: none;">
  <div class="search-modal-content">
    <div class="container">
      <form class="search-form">
        <input type="text" class="search-input" placeholder="What are you looking for?" autofocus>
        <button type="submit" class="search-submit">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
            <use href="#icon_search" />
          </svg>
        </button>
        <button type="button" class="search-close" id="searchClose">
          <span>&times;</span>
        </button>
      </form>
    </div>
  </div>
</div>
<hr></hr>
<hr></hr>

<style>
  .search-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    z-index: 2000;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .search-modal-content {
    background: var(--white);
    width: 90%;
    max-width: 600px;
    padding: 2rem;
    border-radius: 8px;
  }

  .search-form {
    display: flex;
    align-items: center;
    gap: 1rem;
  }

  .search-input {
    flex: 1;
    padding: 12px 16px;
    border: 2px solid var(--border-color);
    border-radius: 4px;
    font-size: 1.1rem;
    outline: none;
  }

  .search-input:focus {
    border-color: var(--secondary-color);
  }

  .search-submit, .search-close {
    background: var(--text-dark);
    color: var(--white);
    border: none;
    padding: 12px;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  .search-submit:hover, .search-close:hover {
    background: var(--secondary-color);
  }

  .search-close {
    font-size: 1.5rem;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchToggle = document.querySelector('.search-toggle');
  const searchModal = document.getElementById('searchModal');
  const searchClose = document.getElementById('searchClose');

  if (searchToggle && searchModal) {
    searchToggle.addEventListener('click', function(e) {
      e.preventDefault();
      searchModal.style.display = 'flex';
      document.body.style.overflow = 'hidden';
    });
  }

  if (searchClose) {
    searchClose.addEventListener('click', function() {
      searchModal.style.display = 'none';
      document.body.style.overflow = 'auto';
    });
  }

  // Close on background click
  if (searchModal) {
    searchModal.addEventListener('click', function(e) {
      if (e.target === searchModal) {
        searchModal.style.display = 'none';
        document.body.style.overflow = 'auto';
      }
    });
  }
});
</script>
