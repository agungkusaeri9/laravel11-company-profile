 <!-- Navbar & Hero Start -->
 <div class="container-xxl position-relative p-0">
     <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
         <a href="{{ route('home') }}" class="navbar-brand p-0">
             <img src="{{ $pengaturan->logo() }}" alt="Logo" class="img-fluid">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto py-0">
                 <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                 <a href="{{ route('page.layanan') }}" class="nav-item nav-link">Service</a>
                 <a href="{{ route('page.portofolio') }}" class="nav-item nav-link">Portofolio</a>
                 <a href="{{ route('testi') }}" class="nav-item nav-link">Testimoni</a>
                 <a href="{{ route('page.galeri') }}" class="nav-item nav-link">Galeri</a>
                 <a href="{{ route('tentang') }}" class="nav-item nav-link">Tentang</a>
                 <a href="{{ route('kontak') }}" class="nav-item nav-link">Kontak</a>
             </div>
         </div>
     </nav>
