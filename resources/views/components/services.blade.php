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
      
    </section>
