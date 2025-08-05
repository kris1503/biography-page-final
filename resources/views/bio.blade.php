@extends('layout')

@section('title', 'Personal Biography')

@section('content')
<div class="card shadow p-5">
    <div class="profile-img-container" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{ asset('images/tal.jpg') }}" alt="Profile Photo" class="profile-img">
    </div>

    <h1 class="text-center mb-4 section-title" data-aos="fade-up">Personal Biography</h1>
    
    <div class="row bio-details">
        <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
            <h4><i class="bi bi-person-circle"></i> Full Name</h4>
            <p>{{ $fullName }}</p>

            <h4><i class="bi bi-calendar-event"></i> Birth Date</h4>
            <p>{{ $birthDate }}</p>
        </div>
        
        <div class="col-md-6" data-aos="fade-left" data-aos-delay="400">
            <h4><i class="bi bi-geo-alt-fill"></i> Place of Birth</h4>
            <p>{{ $birthPlace }}</p>

            <h4><i class="bi bi-mortarboard-fill"></i> Education</h4>
            <p>{{ $education }}</p>
        </div>
    </div>
    
    <div data-aos="fade-up" data-aos-delay="500">
    <h4><i class="bi bi-stars"></i> Hobbies & Interests</h4>
    <div class="row mt-3 mb-4">
        @foreach ($hobbies as $hobby)
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="card h-100 text-center p-3">
                    @php
                        switch (strtolower($hobby)) {
                            case 'reading':
                            case 'reading books':
                                $icon = 'bi-book';
                                break;
                            case 'guitar':
                                $icon = 'bi-music-note-beamed';
                                break;
                            case 'singing':
                                $icon = 'bi-mic-fill';
                                break;
                            case 'traveling':
                            case 'travel':
                                $icon = 'bi-geo-alt-fill';
                                break;
                            default:
                                $icon = 'bi-heart-fill';
                        }
                    @endphp
                    <i class="bi {{ $icon }} text-primary mb-2" style="font-size: 1.5rem;"></i>
                    <h5>{{ $hobby }}</h5>
                </div>
            </div>
        @endforeach
    </div>
</div>

            

    <div data-aos="fade-up" data-aos-delay="600">
        <h4><i class="bi bi-chat-quote-fill"></i> Favorite Quote</h4>
        <blockquote class="blockquote">
            <p>{{ $favoriteQuote }}</p>
        </blockquote>
    </div>
</div>
@endsection
