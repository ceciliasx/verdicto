<x-app-layout>
    @section('styles')
        @vite('resources/css/lawyer_style.css')
    @endsection

    <x-search-box id="search" placeholder="Cari pengacara di sini..." />

    <div class="lawyer-grid" id="lawyerGrid"></div>

    <div class="modal" id="lawyerModal">
        <div class="modal-box">
            <span class="close" id="closeModal">&times;</span>
            <div id="modalContent"></div>
        </div>
    </div>

    @section('scripts')
        @vite('resources/js/lawyer_script.js')
    @endsection
</x-app-layout>