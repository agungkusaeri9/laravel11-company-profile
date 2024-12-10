  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
      <div class="container py-5">
          <div class="row g-5">
              <div class="col-md-6">
                  <h5 class="text-white mb-4">Get In Touch</h5>
                  <p><i class="fa fa-map-marker-alt me-3"></i>{{ $pengaturan->alamat }}</p>
                  <p><i class="fa fa-phone-alt me-3"></i>{{ $pengaturan->nomor_telepon }}</p>
                  <p><i class="fa fa-envelope me-3"></i>{{ $pengaturan->email }}</p>
                  <div class="d-flex pt-2">
                      <a class="btn btn-outline-light btn-social" target="_blank"
                          href="https://wa.me/{{ $pengaturan->nomor_wa }}"><i class="fab fa-whatsapp"></i></a>
                      <a class="btn btn-outline-light btn-social" target="_blank"
                          href=""{{ $pengaturan->link_facebook }}><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-outline-light btn-social" target="_blank"
                          href="{{ $pengaturan->link_instagram }}"><i class="fab fa-instagram"></i></a>
                  </div>
              </div>
              <div class="col-md-6">
                  <h5 class="text-white mb-4">Quick Link</h5>
                  <a class="btn btn-link" href="#page_about">Tentang</a>
                  <a class="btn btn-link" href="#page_contact">Kontak</a>
                  <a class="btn btn-link" href="#page_service">Layanan</a>
                  <a class="btn btn-link" href="">Portofolio</a>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="copyright">
              <div class="row">
                  <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                      &copy; <a class="border-bottom" href="#">{{ $pengaturan->nama_web }}</a>, All Right
                      Reserved.
                      <br>Created By: <a class="border-bottom" href="#"
                          target="_blank">{{ $pengaturan->author }}</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End -->
