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

      <!-- Grid Kamar -->
      <div class="rooms-grid">
        <!-- Deluxe Villa -->
        @foreach ( $kamars as $kamar )
        <div class="room-card">
          <div class="room-img">
            <span class="room-availability">{{$kamar->kamar_tersedia}} kamar Tersedia</span>
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
              <a
                href="https://wa.me/6288976086371?text={{ urlencode('Halo, saya tertarik dengan ' . $kamar->nama_kamar) }}"
                class="room-btn"
                target="_blank"
                >Lihat Detail</a
              >
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
