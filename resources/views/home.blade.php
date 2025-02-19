@extends('layouts.front')

@section('title', 'Home')

@section('content')
   <!-- Hero Section -->
   <section id="home" class="bg-gradient-to-r from-blue-600 to-teal-600 text-white text-center py-32">
        <div class="max-w-3xl mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-semibold mb-6 leading-tight">Welcome to Our Website</h1>
            <p class="text-lg md:text-xl mb-8">We create beautiful, functional websites using modern tools like Laravel and Tailwind CSS.</p>
            <a href="#services" class="bg-white text-blue-600 py-2 px-6 rounded-lg text-lg font-semibold hover:bg-blue-100 transition duration-300">Explore Services</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">Our Services</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    <h3 class="text-xl font-semibold mb-4">Web Design</h3>
                    <p class="text-gray-600">We create stunning and user-friendly websites for all your needs.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    <h3 class="text-xl font-semibold mb-4">Development</h3>
                    <p class="text-gray-600">We develop custom solutions using modern frameworks like Laravel and React.js.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    <h3 class="text-xl font-semibold mb-4">SEO Optimization</h3>
                    <p class="text-gray-600">We optimize websites to improve search engine rankings and traffic.</p>
                </div>
            </div>
        </div>
    </section>
@endsection


    

    
