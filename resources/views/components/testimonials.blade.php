<section class="py-10 mt-20 rounded-3xl text-customWhite">
    <div class="text-center mb-8">
        <div class="w-12 h-1 bg-customWhite mx-auto mt-2 rounded"></div>
        <h2 class="font-semibold text-2xl text-customWhite">Apa Kata Pengguna Verdicto?</h2>
    </div>

    <div class="swiper mySwiper max-w-4xl mx-auto">
        <div class="swiper-wrapper">
            @forelse($testimonials as $testimonial)
                <div class="swiper-slide bg-white text-gray-800 rounded-lg p-6 shadow-lg">
                    <p class="italic mb-4">"{{ $testimonial->content }}"</p>
                    <div class="flex items-center">
                        <img src="{{ $testimonial->user->photo_path ? asset('storage/' . $testimonial->user->photo_path) : asset('storage/profile-pictures/default-profile.png') }}" alt="{{ $testimonial->user->name }}" class="w-12 h-12 rounded-full mr-4 border">
                        <div>
                            <h4 class="font-semibold text-customBlue">{{ $testimonial->user->name }}</h4>
                            <p class="text-sm text-gray-500">{{ $testimonial->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="swiper-slide bg-customWhite text-gray-800 rounded-lg p-6 shadow-lg">
                    <p class="italic">Tidak ada testimoni tersedia saat ini.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination & Navigation -->
        <div class="swiper-pagination mt-4"></div>
    </div>

    <div class="text-center mb-8">
        <a href="{{ route('testimonials.create') }}" class="inline-block mt-4 px-6 py-2 text-customWhite underline font-semibold rounded-lg shadow hover:text-customYellow transition">
            Tulis Testimoni
        </a>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.mySwiper', {
            loop: true,
            grabCursor: true,
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 5000,
            },
        });
    });
</script>