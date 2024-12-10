 <!-- Navbar & Hero Start -->
 <div class="container-xxl position-relative p-0">
     <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
         <a href="{{ route('home') }}" class="navbar-brand p-0">
             <img src="{{ $pengaturan->logo() }}" alt="Logo">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto py-0">
                 <a href="#page_home" class="nav-item nav-link active">Home</a>
                 <a href="#page_service" class="nav-item nav-link">Service</a>
                 <a href="service.html" class="nav-item nav-link">Portofolio</a>
                 <a href="#page_testi" class="nav-item nav-link">Testimoni</a>
                 <a href="service.html" class="nav-item nav-link">Galeri</a>
                 <a href="#page_about" class="nav-item nav-link">Tentang</a>
                 <a href="#page_contact" class="nav-item nav-link">Kontak</a>
             </div>
         </div>
     </nav>
