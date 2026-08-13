<!-- ROOMS  -->
    <section class="rooms" id="rooms">
      <!-- Header -->
      <div class="rooms-header">
        <p class="rooms-eyebrow">Pilih Kenyamanan Anda</p>
        <h2 class="rooms-title">Kamar & <em>Villa Tersedia</em></h2>
        <p class="rooms-desc">
          Setiap kamar dirancang dengan detail untuk memberikan pengalaman
          menginap yang tak terlupakan.
        </p>
      </div>

      <!-- Grid Kama tidak tersedias -->
      @if ($kamars->isEmpty())
        <div class="rooms-empty">
          <p class="rooms-empty-eyebrow">Belum Ada Pilihan</p>
          <h3 class="rooms-empty-title">Belum ada kamar tersedia</h3>
          <p class="rooms-empty-desc">
            Kamar dan villa akan segera kami tampilkan kembali. Hubungi kami untuk informasi ketersediaan terbaru.
          </p>
          <a
            href="https://wa.me/6288976086371?text={{ urlencode('Halo, saya ingin bertanya tentang ketersediaan kamar') }}"
            class="room-btn"
            target="_blank"
            >Hubungi Kami</a
          >
        </div>
      @else
      <div class="rooms-grid">
        <!-- Deluxe Villa -->
        @foreach ( $kamars as $kamar )
        {{-- Mengecek apakah kamar tersedia atau tidak bedasarkan data --}}
        @php
          $isSoldOut = (int) $kamar->kamar_tersedia <= 0;
        @endphp
        <div class="room-card {{ $isSoldOut ? 'sold-out' : '' }}">
          <div class="room-img">
            @if ($isSoldOut)
              <span class="room-availability sold-out">Kamar tidak tersedia</span>
            @else
              <span class="room-availability">{{ $kamar->kamar_tersedia }} kamar Tersedia</span>
            @endif
            <img src="{{ Storage::url($kamar->foto) }}" alt="{{ $kamar->nama_kamar }}">
          </div>
          <div class="room-info">
            <h3 class="room-name">{{ $kamar->nama_kamar }}</h3>
            <p class="room-type">{{ $kamar->tipe_kamar}}</p>
            <p class="room-desc">
              {{ $kamar->deskripsi }}
            </p>
            <div class="room-features">
                @foreach (explode(',', $kamar->fasilitas) as $fitur)
                    <span class="room-feature">{{ trim($fitur) }}</span>
                @endforeach
            </div>
            <div class="room-footer">
              <div class="room-price">
                <span class="room-price-amount">Rp{{ number_format($kamar->harga, 0, ',', '.') }}</span>
                <span class="room-price-period">per {{ $kamar->periode }}</span>
              </div>
              @if ($isSoldOut)
                <span class="room-btn disabled">Tidak Tersedia</span>
              @else
                <a
                  href="https://wa.me/6288976086371?text={{ urlencode('Halo, saya tertarik dengan ' . $kamar->nama_kamar) }}"
                  class="room-btn"
                  target="_blank"
                  >Lihat Detail</a
                >
              @endif
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @endif
    </section>
