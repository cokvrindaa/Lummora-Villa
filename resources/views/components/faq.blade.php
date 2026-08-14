<!--  FAQ  -->
    <section class="faq" id="faq">
      <div class="faq-header">
        <p class="faq-eyebrow">Pertanyaan Umum</p>
        <h2 class="faq-title">Yang Sering <em>Ditanyakan</em></h2>
        <p class="faq-desc">
          Temukan jawaban atas pertanyaan yang paling sering diajukan tentang
          Lummora Private Villa & Resort.
        </p>
      </div>

      @if ($faqs->isEmpty())
        <div class="faq-empty">
          <p class="faq-empty-eyebrow">Data Kosong</p>
          <h3 class="faq-empty-title">Data FAQ tak tersedia</h3>
          <p class="faq-empty-desc">
            Hubungi pengembang untuk menambahkan data FAQ.
          </p>
          <a
            href="https://wa.me/6288976086371?text={{ urlencode('Halo, saya ingin bertanya tentang fasilitas yang tersedia') }}"
            class="facility-btn"
            target="_blank"
            >Hubungi Pengembang</a
          >
        </div>
      @endif

      <div class="faq-container">
        @foreach ($faqs as $faq )
          <div class="faq-item">
            <button class="faq-question">
              {{ $faq->pertanyaan }}
            </button>
            <div class="faq-answer">
              <p>
                {{ $faq->jawaban }}
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </section>
