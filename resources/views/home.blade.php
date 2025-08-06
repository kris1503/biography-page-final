@extends('layout')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-blue-100 to-white py-16">
    <div class="container mx-auto text-center px-6">
        <!-- Profile Picture -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/tal.jpg') }}" alt="Kristine Amada Anfone"
                 class="w-40 h-40 object-cover rounded-full shadow-xl border-4 border-white">
        </div>

        <!-- Heading -->
        <h1 class="text-5xl font-extrabold text-gray-800 mb-4">Hi! I'm <span class="text-blue-600">Kristine Amada Anfone</span></h1>

        <!-- Short Bio -->
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-6">
            Aspiring IT Professional from Negros Oriental, currently pursuing my
            Bachelor of Science in Information Technology at <strong>NORSU</strong>.
        </p>

        <!-- Quote -->
        <blockquote class="text-xl italic text-blue-700 font-medium mb-10">
            "Ayaw kahadlok masayop, kay didto ka makat-on unsaon paglambo."
        </blockquote>

        <!-- Call to Action Buttons -->
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/biography"
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-full shadow-md transition duration-300">
               View My Biography
            </a>
            <a href="/skills"
               class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-full shadow-md transition duration-300">
               View My Skills
            </a>
            <a href="/contact"
               class="bg-gray-600 hover:bg-gray-700 text-white font-semibold px-6 py-3 rounded-full shadow-md transition duration-300">
               Contact Me
            </a>
        </div>
    </div>
</section>
@endsection
