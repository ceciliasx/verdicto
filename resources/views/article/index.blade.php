<x-app-layout>
    @section('styles')
        @vite('resources/css/article_style.css')
    @endsection

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400..700;1,400..700&family=Inter:wght@100..900&family=Nunito+Sans:opsz,wght@6..12,500&family=Poppins:wght@300&display=swap" rel="stylesheet">

    <x-search-box class="search-input" placeholder="Cari artikel di sini..."/>
    <div class="article-web">
        <h2 class="rec-text", id="rec-title">Rekomendasi Artikel untuk Anda</h2>
        <div class="article-rec">
            <div class="flex-box", data-id='1'>
                <div class="image-half">
                    <img src = "https://upes-production-cvb3e7frghdda0a4.z01.azurefd.net/drupal-data/2024-11/Emerging%20Legal%20Specializations-%20What%20to%20Focus%20on%20During%20Your%20LLB.jpeg", alt="image">
                </div>
                <div class="p-5 text-gray-800 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-customBlue mb-2">Dasar Hukum Keterbukaan Informasi</h3>
                    <p class="text-gray-600 text-sm mb-3">Dasar hukum keterbukaan informasi publik di Indonesia adalah Undang-Undang...</p>
                    <span class="text-customBlue font-semibold text-xs">Baca Lebih →</span>
                </div>
            </div>
            <div class="flex-box", data-id='2'>
                <div class="image-half">
                    <img src="https://londonsba.org.uk/wp-content/uploads/2023/09/closeup-shot-person-writing-book-with-gavel-table-1.jpg", alt="image">
                </div>
                <div class="p-5 text-gray-800 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-customBlue mb-2">Mitos Positivisme Hukum</h3>
                    <p class="text-gray-600 text-sm mb-3">Polemik dan kecurigaan mencuat setiap kali proses penyelidikan...</p>
                    <span class="text-customBlue text-xs font-semibold">Baca Lebih →</span>
                </div>
            </div>
            <div class="flex-box", data-id='3'>
                <div class="image-half">
                    <img src="https://cdn0-production-images-kly.akamaized.net/2kjnefq7e62SMvPs80_TZwxBJA8=/0x984:4168x3333/800x450/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4521473/original/034839000_1690870751-3776960_77429.jpg", alt="image">
                </div>
                <div class="p-5 text-gray-800 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-customBlue mb-2">Disabilitas dan Kesetaraan di Hadapan Hukum</h3>
                    <p class="text-gray-600 text-sm mb-3">Kasus yang menimpa Agus, seorang penyandang disabilitas...</p>
                    <span class="text-customBlue text-xs font-semibold">Baca Lebih →</span>
                </div>
            </div>
            <div class="flex-box", data-id='4'>
                <div class="image-half">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS72LZvz8ZGlLMifsOsNgjbCf2MzOuoYD0Uxg&s",alt="image">
                </div>
                <div class="p-5 text-gray-800 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-customBlue mb-2">Penerapan "Strict Liability" dalam Penegakan Hukum Lingkungan di Indonesia</h3>
                    <p class="text-gray-600 text-sm mb-3">Senin (12/3/2018) Badan Penerbit Fakultas Hukum Universitas...</p>
                    <span class="text-customBlue text-xs font-semibold">Baca Lebih →</span>
                </div>
            </div>
            <div class="flex-box", data-id='5'>
                <div class="image-half">
                    <img src="https://blog.maukuliah.id/wp-content/uploads/2020/07/Jurusan-Hukum.jpg", alt="image">
                </div>
                <div class="p-5 text-gray-800 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-customBlue mb-2">Populisme Hukum</h3>
                    <p class="text-gray-600 text-sm mb-3">Monopoly on violence atau monopoli kekerasan (Weber, 1919) dimiliki...</p>
                    <span class="text-customBlue text-xs font-semibold">Baca Lebih →</span>
                </div>
            </div>
        </div>
        <div id="search-results" class="search-results hidden"></div>
    </div>
    @section('scripts')
        @vite('resources/js/article_script.js')
    @endsection
</x-app-layout>
