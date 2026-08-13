<!--  SERVICES  -->
    <section class="services" id="services">
      <!-- Header -->
      <div class="services-header">
        <p class="services-eyebrow">Apa yang Kami Tawarkan</p>
        <h2 class="services-title">
          Pengalaman yang Tak<br /><em>Terlupakan</em>
        </h2>
        <p class="services-desc">
          Setiap detail dirancang untuk menghadirkan kemewahan yang autentik —
          dari villa hingga momen pribadi Anda.
        </p>
      </div>
      <!-- Grid Layanan -->
      @if ($layanans->isEmpty())
        <div class="services-empty">
          <p class="services-empty-eyebrow">Data Kosong</p>
          <h3 class="services-empty-title">Data fasilitas tak tersedia</h3>
          <p class="services-empty-desc">
            Hubungi pengembang untuk menambahkan data layanan.
          </p>
          <a
            href="https://wa.me/6288976086371?text={{ urlencode('Halo, saya ingin bertanya tentang layanan yang tersedia') }}"
            class="room-btn"
            target="_blank"
            >Hubungi Pengembang</a
          >
        </div>
      @else
      <div class="services-grid">
        @foreach ($layanans as $layanan)
          <div class="service-card {{ $layanan->unggulan ? 'service-card--featured' : '' }}">
            @if ($layanan->unggulan)
              <div class="service-badge">Unggulan</div>
            @endif
            <div class="service-img">
              <img src="{{ Storage::url($layanan->foto) }}" alt="{{ $layanan->judul }}">
            </div>
            <div class="service-body">
              <h3 class="service-name">{{ $layanan->judul }}</h3>
              <p class="service-desc">
                {{ $layanan->deskripsi }}
              </p>
            </div>
          </div>
        @endforeach
      </div>
      @endif

        {{-- <div class="service-card service-card--featured">
          <div class="service-badge">Unggulan</div>
          <div class="service-img">
            <img src="{{ asset('image/spa.jpg') }}" alt="Spa & Wellness" />
          </div>
          <div class="service-body">
            <h3 class="service-name">Spa & Wellness</h3>
            <p class="service-desc">
              Rasakan ketenangan jiwa lewat perawatan spa tradisional Bali yang
              dilakukan oleh terapis berpengalaman.
            </p>
          </div>
        </div>

        <div class="service-card">
          <div class="service-img">
            <img src="{{ asset('image/fine-dining.jpg') }}" alt="Fine Dining" />
          </div>
          <div class="service-body">
            <h3 class="service-name">Fine Dining</h3>
            <p class="service-desc">
              Sajian kuliner kelas dunia dengan bahan-bahan lokal segar,
              dinikmati di bawah langit terbuka.
            </p>
          </div>
        </div>

        <div class="service-card">
          <div class="service-img">
            <img src="{{ asset('image/layanan.webp') }}" alt="Concierge 24/7" />
          </div>
          <div class="service-body">
            <h3 class="service-name">Concierge 24/7</h3>
            <p class="service-desc">
              Tim concierge kami siap membantu kapan saja — dari transportasi
              hingga reservasi eksklusif.
            </p>
          </div>
        </div>

        <div class="service-card">
          <div class="service-img">
            <img src="{{ asset('image/hero.jpg') }}" alt="Nature Experience" />
          </div>
          <div class="service-body">
            <h3 class="service-name">Nature Experience</h3>
            <p class="service-desc">
              Jelajahi hutan tropis, sawah, dan pantai tersembunyi bersama
              pemandu lokal kami yang berpengalaman.
            </p>
          </div>
        </div>

        <div class="service-card">
          <div class="service-img">
            <img src="{{ asset('image/eventandwedding.jpg') }}" alt="Event & Wedding" />
          </div>
          <div class="service-body">
            <h3 class="service-name">Event & Wedding</h3>
            <p class="service-desc">
              Wujudkan momen spesial Anda di lokasi yang memukau — pernikahan,
              anniversary, hingga retreat bisnis.
            </p>
          </div>
        </div> --}}
      </div>
    </section>
