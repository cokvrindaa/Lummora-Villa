<!-- FACILITIES  -->
    <section class="facilities" id="facilities">
      <div class="facilities-header">
        <p class="facilities-eyebrow">Nikmati Setiap Sudut</p>
        <h2 class="facilities-title">Fasilitas <em>Eksklusif</em></h2>
      </div>

      @if ($fasilitas->isEmpty())
        <div class="facilities-empty">
          <p class="facilities-empty-eyebrow">Data Kosong</p>
          <h3 class="facilities-empty-title">Data fasilitas tak tersedia</h3>
          <p class="facilities-empty-desc">
            Hubungi pengembang untuk menambahkan data fasilitas.
          </p>
          <a
            href="https://wa.me/6288976086371?text={{ urlencode('Halo, saya ingin bertanya tentang fasilitas yang tersedia') }}"
            class="facility-btn"
            target="_blank"
            >Hubungi Pengembang</a
          >
        </div>
      @else
      <div class="swiper facilities-swiper">
        <div class="swiper-wrapper">
          @foreach ($fasilitas as $fasilitasview)
          <div class="swiper-slide facility-slide">
            <div class="facility-img">
              <img src="{{ Storage::url($fasilitasview->foto) }}" alt="{{ $fasilitasview->judul }}">
              <div class="facility-overlay"></div>
            </div>
            <div class="facility-info">
              <h3> {{ $fasilitasview->judul }}</h3>
              <p>
                {{ $fasilitasview->deskripsi }}
              </p>
            </div>
          </div>
          @endforeach

          {{-- <div class="swiper-slide facility-slide">
            <div class="facility-img">
              <img src="{{ asset('image/garden-lounge.jpg') }}" alt="Garden Lounge" />
              <div class="facility-overlay"></div>
            </div>
            <div class="facility-info">
              <h3>Garden Lounge</h3>
              <p>
                Area santai di tengah taman tropis yang asri dan menenangkan.
              </p>
            </div>
          </div>

          <div class="swiper-slide facility-slide">
            <div class="facility-img">
              <img src="{{ asset('image/outdoor-spa.jpg') }}" alt="Outdoor Spa" />
              <div class="facility-overlay"></div>
            </div>
            <div class="facility-info">
              <h3>Outdoor Spa</h3>
              <p>
                Manjakan diri dengan perawatan spa di bawah naungan pepohonan.
              </p>
            </div>
          </div>

          <div class="swiper-slide facility-slide">
            <div class="facility-img">
              <img src="{{ asset('image/priavte-dinning.jpg') }}" alt="Ruang Makan Privat" />
              <div class="facility-overlay"></div>
            </div>
            <div class="facility-info">
              <h3>Ruang Makan Privat</h3>
              <p>Santap malam romantis dengan pemandangan bintang dan lilin.</p>
            </div>
          </div>

          <div class="swiper-slide facility-slide">
            <div class="facility-img">
              <img src="{{ asset('image/yoga-pavilion.jpg') }}" alt="Yoga Pavilion" />
              <div class="facility-overlay"></div>
            </div>
            <div class="facility-info">
              <h3>Yoga Pavilion</h3>
              <p>
                Mulai pagi dengan sesi yoga di pavilion terbuka menghadap sawah.
              </p>
            </div>
          </div> --}}
        </div>
      </div>
      @endif
    </section>
