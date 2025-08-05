@extends('layout')

@section('title', 'Skills')

@section('content')
<div class="card shadow p-5">
    <h1 class="text-center mb-5 section-title" data-aos="fade-up">Professional Skills</h1>

    <div class="row">
        {{-- Technical Skills --}}
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="card mb-4 p-4">
                <h3 class="mb-4"><i class="bi bi-code-square text-primary me-2"></i> Technical Skills</h3>

                @php
                    $technicalSkills = [
                        ['title' => 'PHP / Laravel', 'icon' => 'code-slash', 'percent' => 90],
                        ['title' => 'JavaScript / Vue.js', 'icon' => 'braces', 'percent' => 85],
                        ['title' => 'HTML5 & CSS3', 'icon' => 'filetype-html', 'percent' => 95],
                        ['title' => 'Bootstrap', 'icon' => 'bootstrap-fill', 'percent' => 90],
                        ['title' => 'Git & Version Control', 'icon' => 'git', 'percent' => 85],
                    ];
                @endphp

                @foreach ($technicalSkills as $skill)
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5><i class="bi bi-{{ $skill['icon'] }} me-2"></i> {{ $skill['title'] }}</h5>
                            <span>{{ $skill['percent'] }}%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="skill-progress-bar" style="width: {{ $skill['percent'] }}%;"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Soft Skills --}}
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
            <div class="card mb-4 p-4">
                <h3 class="mb-4"><i class="bi bi-person-check text-primary me-2"></i> Soft Skills</h3>

                @php
                    $softSkills = [
                        ['title' => 'Team Collaboration', 'icon' => 'people-fill', 'percent' => 95],
                        ['title' => 'Communication', 'icon' => 'chat-dots-fill', 'percent' => 90],
                        ['title' => 'Problem Solving', 'icon' => 'lightbulb-fill', 'percent' => 85],
                        ['title' => 'Time Management', 'icon' => 'clock-fill', 'percent' => 80],
                        ['title' => 'Continuous Learning', 'icon' => 'book-fill', 'percent' => 95],
                    ];
                @endphp

                @foreach ($softSkills as $skill)
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5><i class="bi bi-{{ $skill['icon'] }} me-2"></i> {{ $skill['title'] }}</h5>
                            <span>{{ $skill['percent'] }}%</span>
                        </div>
                        <div class="skill-progress">
                            <div class="skill-progress-bar" style="width: {{ $skill['percent'] }}%;"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Certifications --}}
    <div class="mt-5" data-aos="fade-up" data-aos-delay="600">
        <h3 class="mb-4 text-center"><i class="bi bi-award text-primary me-2"></i> Certifications</h3>

        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card h-100 p-3">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="bi bi-patch-check-fill text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Laravel Certified Developer</h5>
                            <p class="text-muted mb-0">Issued by Laravel, 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card h-100 p-3">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="bi bi-patch-check-fill text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Front-End Web Development</h5>
                            <p class="text-muted mb-0">Issued by Udemy, 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
