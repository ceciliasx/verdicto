<footer class="bg-customBlue text-customWhite py-12">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
    
    <!-- Left -->
    <div>
      <div class="flex items-center gap-3 mb-4">
        <img src="{{ asset('assets/logo_blue.png') }}" alt="VERDICTO Logo" class="">
      </div>
      <p class="text-sm leading-relaxed">
        Di VERDICTO, kami bangga menjadi sumber informasi dan sumber daya hukum gratis nomor satu di web.
      </p>
    </div>

    <!-- Middle 1 -->
    <div>
      <h3 class="mb-2 text-customWhite font-semibold">
        <a href="{{ url('/aboutus#about-verdicto') }}" class="hover:underline hover:text-customYellow">TENTANG KAMI</a>
      </h3>
      <ul class="space-y-2 text-sm">
        <li><a href="{{ url('/aboutus#about-us') }}" class="hover:underline hover:text-customYellow">Tim Kami</a></li>
        <li><a href="{{ url('/aboutus#accessibility') }}" class="hover:underline hover:text-customYellow">Aksesibilitas</a></li>
        <li><a href="{{ url('/aboutus#contact-us') }}" class="hover:underline hover:text-customYellow">Kontak Kami</a></li>
        <li><a href="{{ url('/faq#faq') }}" class="hover:underline hover:text-customYellow">FAQ</a></li>
      </ul>
    </div>

    <!-- Middle 2 -->
    <div>
      <h3 class="mb-3 font-semibold text-customWhite">LAMAN KAMI</h3>
      <ul class="space-y-2 text-sm">
        <li>
          <a href="{{ route('dashboard') }}" class="hover:underline hover:text-customYellow">
            Beranda
          </a>
        </li>
        <li>
          <a href="{{ route('lawyers.index') }}" class="hover:underline hover:text-customYellow">
            Pengacara
          </a>
        </li>
        <li>
          <a href="{{ route('article.index') }}" class="hover:underline hover:text-customYellow">
            Artikel
          </a>
        </li>
        <li><a href="{{ url('/dashboard#testimonial-section') }}" class="hover:underline hover:text-customYellow">Testimoni</a></li>
      </ul>
    </div>

    <!-- Right -->
    <div class="lg:col-span-1 md:col-span-2">
      <h3 class="mb-3 font-semibold text-customWhite">IKUTI KAMI</h3>
      <div class="flex mb-4 space-x-4 items-center">
        <a href="https://twitter.com" target="_blank">
          <img src="{{ asset('assets/x.png') }}" alt="X" class="w-6 h-6 hover:w-7 hover:h-7 transition-all duration-300">
        </a>
        <a href="https://youtube.com" target="_blank">
          <img src="{{ asset('assets/yt.png') }}" alt="YouTube" class="w-6 h-6 hover:w-7 hover:h-7 transition-all duration-300">
        </a>
        <a href="https://instagram.com" target="_blank">
          <img src="{{ asset('assets/ig.png') }}" alt="Instagram" class="w-6 h-6 hover:w-7 hover:h-7 transition-all duration-300">
        </a>
        <a href="https://facebook.com" target="_blank">
          <img src="{{ asset('assets/fc.png') }}" alt="Facebook" class="w-6 h-6 hover:w-7 hover:h-7 transition-all duration-300">
        </a>
      </div>
      <p class="text-sm text-customWhite mt-10 md:mt-0 lg:mt-0">© 2025 Verdicto. All rights reserved.</p>
    </div>

  </div>
</footer>
