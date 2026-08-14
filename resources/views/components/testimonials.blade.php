<!--  TESTIMONIALS -->
    <section class="testimonials" id="testimonials">
      <div class="testimonials-header">
        <p class="testimonials-eyebrow">Apa Kata Mereka</p>
        <h2 class="testimonials-title">Pengalaman <em>Tamu Kami</em></h2>
      </div>
      
      @if ($testimonis->isEmpty())
        <div class="testimoni-empty">
          <p class="testimoni-empty-eyebrow">Data Kosong</p>
          <h3 class="testimoni-empty-title">Data Testimoni tak tersedia</h3>
          <p class="testimoni-empty-desc">
            Hubungi pengembang untuk menambahkan data Testimoni.
          </p>
          <a
            href="https://wa.me/6288976086371?text={{ urlencode('Halo, saya ingin bertanya tentang fasilitas yang tersedia') }}"
            class="facility-btn"
            target="_blank"
            >Hubungi Pengembang</a
          >
        </div>
      @endif

      
      <div class="swiper testimonialsSwiper">
        <div class="swiper-wrapper">
          @foreach ($testimonis as $testimoni)
            <div class="swiper-slide testimonial-card">
                {{-- Mengrepeat jumlah star bedasarkan rating dri coulum database --}}
                <div class="testimonial-stars">{{ str_repeat('★', $testimoni->rating) }}</div>
                <p class="testimonial-text">
                    "{{ $testimoni->testimoni }}"
                </p>
                <div class="testimonial-author">
                  {{-- Untuk huruf besar --}}
                    <div class="testimonial-avatar">{{ strtoupper(substr($testimoni->nama, 0, 1)) }}</div>
                    <div>
                        <span class="testimonial-name">{{ $testimoni->nama }}</span>
                        <span class="testimonial-origin">{{ $testimoni->asal }}</span>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
        <div class="swiper-pagination testimonials-pagination"></div>
      </div>
    </section>
