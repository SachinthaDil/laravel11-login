@extends('layouts.front')

@section('title', 'Contact Us')

@section('content')
<section id="contact" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">Get in Touch</h2>
            <p class="text-gray-600 text-lg text-center mb-10">
                Have a question or want to work with us? Fill out the form below, and we'll get back to you shortly.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-2 gap-10 bg-white p-8 rounded-lg shadow-lg">
                <!-- Contact Form (Left Side) -->
                <div class="flex flex-col justify-center">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2">Full Name</label>
                            <input type="text" name="name" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2">Message</label>
                            <textarea name="message" rows="5" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Image (Right Side) -->
                <div class="hidden md:flex justify-center items-center">
                    <img src="{{ asset('images/contact-bg.jpg') }}" alt="Contact Us" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>
@endsection
