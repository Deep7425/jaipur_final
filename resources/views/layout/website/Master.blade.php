<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
  <title>@yield('title', 'Jaipur Jazbaa - Elegant Indian Fashion')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="Jaipur Jazbaa" />
  <meta name="description" content="@yield('description', 'Discover our exquisite collection of handcrafted Indian wear, where tradition meets contemporary style')">
  <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}" type="image/x-icon">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- CSS -->
  <link rel="stylesheet" href="{{url('assets/css/plugins/swiper.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{url('assets/css/style.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{url('assets/css/custom.css')}}" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  
  <style>
    :root {
      --primary-color: #f5f2f0;
      --secondary-color: #8b7355;
      --accent-color: #d4c5b9;
      --text-dark: #2c2c2c;
      --text-light: #666;
      --border-color: #e8e8e8;
      --white: #ffffff;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--white);
      color: var(--text-dark);
      line-height: 1.6;
      margin: 0;
      padding: 0;
    }

    .font-playfair {
      font-family: 'Playfair Display', serif;
    }

    .hero-section {
      background: linear-gradient(135deg, var(--primary-color) 0%, #f8f6f4 100%);
      min-height: 80vh;
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
    }

    .hero-content {
      z-index: 2;
      position: relative;
    }

    .hero-title {
      font-size: 3.5rem;
      font-weight: 300;
      color: var(--text-dark);
      margin-bottom: 1rem;
      line-height: 1.2;
    }

    .hero-subtitle {
      font-size: 1.2rem;
      color: var(--text-light);
      margin-bottom: 2rem;
      font-weight: 400;
    }

    .btn-elegant {
      background: var(--text-dark);
      color: var(--white);
      padding: 12px 30px;
      border: none;
      text-decoration: none;
      font-weight: 500;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
      display: inline-block;
    }

    .btn-elegant:hover {
      background: var(--secondary-color);
      color: var(--white);
      transform: translateY(-2px);
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: 400;
      text-align: center;
      margin-bottom: 3rem;
      color: var(--text-dark);
    }

    .collection-card {
      position: relative;
      overflow: hidden;
      border-radius: 8px;
      margin-bottom: 2rem;
      transition: transform 0.3s ease;
    }

    .collection-card:hover {
      transform: translateY(-5px);
    }

    .collection-card img {
      width: 100%;
      height: 400px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .collection-card:hover img {
      transform: scale(1.05);
    }

    .collection-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(transparent, rgba(0,0,0,0.7));
      padding: 2rem;
      color: white;
    }

    .collection-title {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .celebrity-section {
      background: var(--primary-color);
      padding: 5rem 0;
    }

    .celebrity-card {
      text-align: center;
      margin-bottom: 2rem;
    }

    .celebrity-image {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 1rem;
      border: 3px solid var(--white);
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .celebrity-name {
      font-size: 1.1rem;
      font-weight: 600;
      color: var(--text-dark);
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      margin-top: 3rem;
    }

    .product-card-elegant {
      background: var(--white);
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
      transition: all 0.3s ease;
    }

    .product-card-elegant:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }

    .product-image {
      width: 100%;
      height: 350px;
      object-fit: cover;
    }

    .product-info {
      padding: 1.5rem;
    }

    .product-title {
      font-size: 1.1rem;
      font-weight: 500;
      margin-bottom: 0.5rem;
      color: var(--text-dark);
    }

    .product-price {
      font-size: 1.2rem;
      font-weight: 600;
      color: var(--secondary-color);
    }

    .newsletter-section {
      background: var(--text-dark);
      color: var(--white);
      padding: 4rem 0;
      text-align: center;
    }

    .newsletter-title {
      font-size: 2rem;
      margin-bottom: 1rem;
      font-weight: 300;
    }

    .newsletter-form {
      max-width: 400px;
      margin: 0 auto;
      display: flex;
      gap: 1rem;
    }

    .newsletter-input {
      flex: 1;
      padding: 12px 16px;
      border: 1px solid var(--border-color);
      background: var(--white);
      color: var(--text-dark);
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.5rem;
      }
      
      .section-title {
        font-size: 2rem;
      }
      
      .celebrity-image {
        width: 150px;
        height: 150px;
      }
      
      .newsletter-form {
        flex-direction: column;
      }
    }

    /* Additional utility classes */
    .py-5 { padding: 3rem 0; }
    .py-4 { padding: 2rem 0; }
    .mb-4 { margin-bottom: 1.5rem; }
    .mb-5 { margin-bottom: 3rem; }
    .mt-4 { margin-top: 1.5rem; }
    .mt-5 { margin-top: 3rem; }
    .text-center { text-align: center; }
    .d-flex { display: flex; }
    .align-items-center { align-items: center; }
    .justify-content-between { justify-content: space-between; }
    .gap-3 { gap: 1rem; }
    .text-decoration-none { text-decoration: none; }
    .list-unstyled { list-style: none; padding: 0; }
  </style>
  
  @yield('additional_css')
</head>

<body>
  <!-- Header -->
  @include('layout.website.header')

  <!-- Top Navigation (Mobile) -->
  @include('layout.website.top-nav')

  <!-- Main Content -->
  <main style="margin-top: 80px;">
    @yield('content')
  </main>

  <!-- Footer -->
  @include('layout.website.footer')

  <!-- SVG Icons -->
  <svg class="d-none">
    <symbol id="icon_search" viewBox="0 0 20 20">
      <g clip-path="url(#clip0_6_7)">
        <path
          d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.84769 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.84769 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.84769 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z"
          fill="currentColor" />
        <path
          d="M19.7618 18.6122L15.1006 13.9509C14.783 13.6333 14.2686 13.6333 13.951 13.9509C13.6334 14.2683 13.6334 14.7832 13.951 15.1005L18.6122 19.7618C18.771 19.9206 18.9789 20 19.187 20C19.3949 20 19.603 19.9206 19.7618 19.7618C20.0795 19.4444 20.0795 18.9295 19.7618 18.6122Z"
          fill="currentColor" />
      </g>
      <defs>
        <clipPath id="clip0_6_7">
          <rect width="20" height="20" fill="white" />
        </clipPath>
      </defs>
    </symbol>
    <symbol id="icon_user" viewBox="0 0 20 20">
      <g clip-path="url(#clip0_6_29)">
        <path
          d="M10 11.2652C3.99077 11.2652 0.681274 14.108 0.681274 19.2701C0.681274 19.6732 1.00803 20 1.4112 20H18.5888C18.992 20 19.3187 19.6732 19.3187 19.2701C19.3188 14.1083 16.0093 11.2652 10 11.2652ZM2.16768 18.5402C2.45479 14.6805 5.08616 12.7251 10 12.7251C14.9139 12.7251 17.5453 14.6805 17.8326 18.5402H2.16768Z"
          fill="currentColor" />
        <path
          d="M10 0C7.23969 0 5.1582 2.12336 5.1582 4.93895C5.1582 7.83699 7.33023 10.1944 10 10.1944C12.6698 10.1944 14.8419 7.83699 14.8419 4.93918C14.8419 2.12336 12.7604 0 10 0ZM10 8.7348C8.13508 8.7348 6.61805 7.03211 6.61805 4.93918C6.61805 2.92313 8.04043 1.45984 10 1.45984C11.9283 1.45984 13.382 2.95547 13.382 4.93918C13.382 7.03211 11.865 8.7348 10 8.7348Z"
          fill="currentColor" />
      </g>
      <defs>
        <clipPath id="clip0_6_29">
          <rect width="20" height="20" fill="white" />
        </clipPath>
      </defs>
    </symbol>
    <symbol id="icon_cart" viewBox="0 0 20 20">
      <path
        d="M17.6562 4.6875H15.2755C14.9652 2.05164 12.7179 0 10 0C7.28215 0 5.0348 2.05164 4.72445 4.6875H2.34375C1.91227 4.6875 1.5625 5.03727 1.5625 5.46875V19.2188C1.5625 19.6502 1.91227 20 2.34375 20H17.6562C18.0877 20 18.4375 19.6502 18.4375 19.2188V5.46875C18.4375 5.03727 18.0877 4.6875 17.6562 4.6875ZM10 1.5625C11.8548 1.5625 13.3992 2.91621 13.6976 4.6875H6.30238C6.60082 2.91621 8.14516 1.5625 10 1.5625ZM16.875 18.4375H3.125V6.25H4.6875V8.59375C4.6875 9.02523 5.03727 9.375 5.46875 9.375C5.90023 9.375 6.25 9.02523 6.25 8.59375V6.25H13.75V8.59375C13.75 9.02523 14.0998 9.375 14.5312 9.375C14.9627 9.375 15.3125 9.02523 15.3125 8.59375V6.25H16.875V18.4375Z"
        fill="currentColor" />
    </symbol>
    <symbol id="icon_heart" viewBox="0 0 20 20">
      <g clip-path="url(#clip0_6_54)">
        <path
          d="M18.3932 3.30806C16.218 1.13348 12.6795 1.13348 10.5049 3.30806L9.99983 3.81285L9.49504 3.30806C7.32046 1.13319 3.78163 1.13319 1.60706 3.30806C-0.523361 5.43848 -0.537195 8.81542 1.57498 11.1634C3.50142 13.3041 9.18304 17.929 9.4241 18.1248C9.58775 18.2578 9.78467 18.3226 9.9804 18.3226C9.98688 18.3226 9.99335 18.3226 9.99953 18.3223C10.202 18.3317 10.406 18.2622 10.575 18.1248C10.816 17.929 16.4982 13.3041 18.4253 11.1631C20.5371 8.81542 20.5233 5.43848 18.3932 3.30806ZM17.1125 9.98188C15.6105 11.6505 11.4818 15.0919 9.99953 16.3131C8.51724 15.0922 4.38944 11.6511 2.88773 9.98218C1.41427 8.34448 1.40044 6.01214 2.85564 4.55693C3.59885 3.81402 4.57488 3.44227 5.5509 3.44227C6.52693 3.44227 7.50295 3.81373 8.24616 4.55693L9.3564 5.66718C9.48856 5.79934 9.65516 5.87822 9.82999 5.90589C10.1137 5.96682 10.4216 5.88764 10.6424 5.66747L11.7532 4.55693C13.2399 3.07082 15.6582 3.07111 17.144 4.55693C18.5992 6.01214 18.5854 8.34448 17.1125 9.98188Z"
          fill="currentColor" />
      </g>
      <defs>
        <clipPath id="clip0_6_54">
          <rect width="20" height="20" fill="white" />
        </clipPath>
      </defs>
    </symbol>
    <symbol id="icon_nav" viewBox="0 0 25 18">
      <rect width="25" height="2" />
      <rect y="8" width="20" height="2" />
      <rect y="16" width="25" height="2" />
    </symbol>
  </svg>

  <!-- JavaScript -->
  <script src="{{url('assets/js/plugins/jquery.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/js/plugins/swiper.min.js')}}"></script>
  <script src="{{url('assets/js/theme.js')}}"></script>
  
  @yield('additional_js')
</body>

</html>
