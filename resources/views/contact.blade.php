@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="card shadow p-5 mt-5" data-aos="fade-up" data-aos-delay="600">
    <h1 class="text-center mb-5 section-title" data-aos="fade-up">Contact Me</h1>

    <div class="row justify-content-center">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">

            <div class="card mb-4 p-4">
                <h3 class="mb-4"><i class="bi bi-info-circle text-primary me-2"></i> Contact Details</h3>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <strong>Phone:</strong> +63 997 739 4657
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-envelope-fill me-2"></i>
                        <strong>Email:</strong> anfonekristine264@example.com
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        <strong>Address:</strong> Nagcasunog Bindoy, Negros Oriental, Philippines
                    </li>
                    <li>
                        <i class="bi bi-globe me-2"></i>
                        <strong>Website:</strong> www.kristineanfone.com
                    </li>
                </ul>
            </div>

            <div class="card p-4" data-aos="fade-left" data-aos-delay="400">
                <h3 class="mb-4"><i class="bi bi-chat-left-text text-primary me-2"></i> Send a Message</h3>

                <!-- Success message -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Validation errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" value="{{ old('name') }}" required />
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required />
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" rows="5" class="form-control" placeholder="Write your message here" required>{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        <i class="bi bi-send-fill me-1"></i> Send Message
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
