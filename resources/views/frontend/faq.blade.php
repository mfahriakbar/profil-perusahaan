@extends('layouts.frontend')

@section('title', 'FAQ')

@section('content')

    <div id="imageModal" class="modal">
        <div id="caption"></div>
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>
    
<main>
    <div class="contentFAQ" bg-primary>
        <div class="faqHeader">
            <h2>Frequently Asked Question (FAQ)</h2>
        </div>
        <div class="chatBox" id="chatBox">
            <ul class="chat-list">
                <!-- Pesan akan muncul di sini -->
            </ul>
        </div>
        <!-- Tombol Mulai -->
        <button id="startBtn" style="display: none;" onclick="showOptions()">Mulai</button>
    </div>

</main>

<script src="{{ asset('assets/frontend/js/faq.js') }}"></script>

@endsection
