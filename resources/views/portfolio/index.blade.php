 
@extends('layouts.app')

@section('content')
<section class="portfolio" id="portfolio">
    <h2>My Work</h2>
    <div class="portfolio-gallery">
        {{-- Dynamic Portfolio Items --}}
        @foreach(\App\Models\Portfolio::all() as $item)
            <div class="portfolio-item">
                <a href="{{ $item->link }}" target="_blank">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                </a>
                <div class="portfolio-info">
                    <h3>{{ $item->title }}</h3>
                    <p>Tap to View</p>
                </div>
            </div>
        @endforeach

        {{-- Static Demo Items --}}
        <div class="portfolio-item">
            <a href="http://127.0.0.1:5500/index.html" target="_blank">
                <img src="Screenshot (165).png" alt="Project 1">
            </a>
            <div class="portfolio-info">
                <h3>VILLA AGENCY</h3>
                <p>Tap to View</p>
            </div>
        </div>
        <div class="portfolio-item">
            <a href="https://templatemo.com/live/templatemo_589_lugx_gaming" target="_blank">
                <img src="Screenshot (167).png" alt="Project 2">
            </a>
            <div class="portfolio-info">
                <h3>GAMING SITE</h3>
                <p>Tap to View</p>
            </div>
        </div>
        <div class="portfolio-item">
            <a href="https://templatemo.com/live/templatemo_581_kind_heart_charity" target="_blank">
                <img src="Screenshot (168).png" alt="Project 3">
            </a>
            <div class="portfolio-info">
                <h3>HOSPITAL SITE</h3>
                <p>Tap to View</p>
            </div>
        </div>
        <div class="portfolio-item">
            <a href="https://templatemo.com/live/templatemo_585_barber_shop" target="_blank">
                <img src="Screenshot (169).png" alt="Project 4">
            </a>
            <div class="portfolio-info">
                <h3>HAIRCUT SITE</h3>
                <p>Tap to View</p>
            </div>
        </div>
    </div>
</section>
@endsection