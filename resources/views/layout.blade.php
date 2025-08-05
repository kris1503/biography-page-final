<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'My Biography')</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- AOS Animation Library -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    :root {
      --primary: #3b82f6;
      --primary-dark: #1d4ed8;
      --secondary: #f59e0b;
      --dark: #1e293b;
      --light: #f8fafc;
      --gray: #64748b;
      --success: #10b981;
      --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }
    
    body {
      background-color: var(--light);
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%233b82f6' fill-opacity='0.03'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      font-family: 'Montserrat', sans-serif;
      color: var(--dark);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    
    /* Navigation Styles */
    .navbar {
      background-color: #ffffff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      padding: 15px 0;
    }
    
    .navbar-brand {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 1.5rem;
      color: var(--primary);
      letter-spacing: 0.5px;
    }
    
    .navbar-brand:hover {
      color: var(--primary-dark);
    }
    
    .nav-link {
      font-weight: 500;
      color: var(--dark);
      margin: 0 10px;
      position: relative;
      transition: all 0.3s ease;
    }
    
    .nav-link:hover, .nav-link.active {
      color: var(--primary);
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -2px;
      left: 0;
      background-color: var(--primary);
      transition: width 0.3s ease;
    }
    
    .nav-link:hover::after, .nav-link.active::after {
      width: 100%;
    }
    
    /* Main Content Styles */
    .content-wrapper {
      flex: 1;
      padding: 50px 0;
    }
    
    .card {
      border: none;
      border-radius: 12px;
      box-shadow: var(--card-shadow);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      overflow: hidden;
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }
    
    /* Profile Image Styles */
    .profile-img-container {
      width: 180px;
      height: 180px;
      margin: 0 auto 30px;
      border-radius: 50%;
      padding: 5px;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      position: relative;
    }
    
    .profile-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid white;
    }
    
    /* Section Title Styles */
    .section-title {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      color: var(--dark);
      position: relative;
      display: inline-block;
      padding-bottom: 10px;
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      width: 60px;
      height: 3px;
      background: linear-gradient(to right, var(--primary), var(--secondary));
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
    }
    
    /* Bio Details Styles */
    .bio-details {
      text-align: left;
      font-size: 1.05rem;
      color: var(--gray);
    }
    
    .bio-details h4 {
      color: var(--dark);
      margin-top: 20px;
      margin-bottom: 10px;
      font-weight: 600;
      display: flex;
      align-items: center;
    }
    
    .bio-details h4 i {
      color: var(--primary);
      margin-right: 10px;
    }
    
    .bio-details p {
      margin-bottom: 20px;
      padding-left: 28px;
    }
    
    .bio-details ul {
      list-style-type: none;
      padding-left: 0;
    }
    
    .bio-details li {
      margin-bottom: 8px;
      position: relative;
      padding-left: 25px;
    }
    
    .bio-details li:before {
      content: '\F26A';
      font-family: 'Bootstrap Icons';
      position: absolute;
      left: 0;
      color: var(--primary);
    }
    
    .bio-details strong {
      color: var(--dark);
      font-weight: 600;
    }
    
    /* Skills Progress Bar */
    .skill-progress {
      height: 8px;
      background-color: #e9ecef;
      border-radius: 10px;
      margin-top: 8px;
      overflow: hidden;
    }
    
    .skill-progress-bar {
      height: 100%;
      background: linear-gradient(to right, var(--primary), var(--secondary));
      border-radius: 10px;
      width: 0;
      transition: width 1.5s ease-in-out;
    }
    
    /* Blockquote Styles */
    blockquote {
      background-color: rgba(59, 130, 246, 0.05);
      border-left: 4px solid var(--primary);
      padding: 20px;
      border-radius: 0 8px 8px 0;
      font-style: italic;
      margin: 20px 0;
    }
    
    /* Footer Styles */
    footer {
      background-color: var(--dark);
      color: white;
      padding: 30px 0;
      text-align: center;
      box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.05);
    }
    
    footer a {
      color: rgba(255, 255, 255, 0.8);
      margin: 0 10px;
      font-size: 1.2rem;
      transition: all 0.3s ease;
    }
    
    footer a:hover {
      color: var(--primary);
      transform: translateY(-3px);
    }
    
    /* Animation Keyframes */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    /* Social Links */
    .social-links {
      margin-top: 20px;
    }
    
    .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.1);
      margin: 0 5px;
      transition: all 0.3s ease;
    }
    
    .social-links a:hover {
      background-color: var(--primary);
      transform: translateY(-5px);
    }
  </style>
</head>
<body>
  <!-- Navigation -->
 <nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="/">Kristine Amada Anfone</a>
    <!-- Toggler button hidden on desktop -->
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('biography') ? 'active' : '' }}" href="/biography">Biography</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('biography/skills') ? 'active' : '' }}" href="/biography/skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ request()->is('biography/contact') ? 'active' : '' }}" href="{{ url('/biography/contact') }}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



  <!-- Main Content -->
  <div class="content-wrapper">
    <div class="container">
      @yield('content')
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4>Kristine Amada Anfone</h4>
          <p>Web Developer & Designer</p>
          <div class="social-links">
            <a href="https://www.facebook.com/AnfoneKristineAmada" target="_blank" aria-label="Facebook">
            <i class="bi bi-facebook"></i>
            </a>
            <a href="mailto:anfonekristine264@gmail.com" aria-label="Gmail">
            <i class="bi bi-envelope-fill"></i>
            </a>
            <a href="https://www.instagram.com/anfonekristine" target="_blank" aria-label="Instagram">
            <i class="bi bi-instagram"></i>
           </a>



          </div>
          <p class="mt-4">&copy; {{ date('Y') }} Kristine Amada Anfone. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS Animation Library -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    // Initialize AOS animations
    AOS.init();
    
    // Initialize skill progress bars
    document.addEventListener('DOMContentLoaded', function() {
      const progressBars = document.querySelectorAll('.skill-progress-bar');
      progressBars.forEach(bar => {
        const width = bar.getAttribute('data-width');
        setTimeout(() => {
          bar.style.width = width;
        }, 300);
      });
    });
  </script>
</body>
</html>
