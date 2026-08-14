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
