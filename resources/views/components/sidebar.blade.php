 <div class="main-sidebar sidebar-style-2">
     <aside id="sidebar-wrapper">
         <div class="sidebar-brand">
             <a href="{{ route('dashboard') }}">{{ $pengaturan->nama_web ?? 'Admin Panel' }}</a>
         </div>
         <div class="sidebar-brand sidebar-brand-sm">
             <a href="{{ route('dashboard') }}">CV</a>
         </div>
         <ul class="sidebar-menu">
             <li>
                 <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-home"></i>
                     <span>Dashboard</span></a>
             </li>
             <li>
                 <a class="nav-link" href="{{ route('layanan.index') }}"><i class="fas fa-box"></i>
                     <span>Layanan</span></a>
             </li>
             <li>
                 <a class="nav-link" href="{{ route('portofolio.index') }}"><i class="fas fa-briefcase"></i>
                     <span>Portofolio</span></a>
             <li>
                 <a class="nav-link" href="{{ route('galeri.index') }}"><i class="fas fa-images"></i>
                     <span>Galeri</span></a>
             </li>
             </li>
             <li class="dropdown">
                 <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                     <span>Master</span></a>
                 <ul class="dropdown-menu">
                     <li><a class="nav-link" href="{{ route('testimoni.index') }}">Testimoni</a></li>
                     <li><a class="nav-link" href="{{ route('pesan-masuk.index') }}">Pesan Masuk</a></li>
                     <li><a class="nav-link" href="{{ route('users.index') }}">User</a></li>
                     <li><a class="nav-link" href="{{ route('pengaturan.index') }}">Pengaturan</a></li>
                 </ul>
             </li>

         </ul>
     </aside>
 </div>
