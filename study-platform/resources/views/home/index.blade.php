


@extends('layouts.app')

@section('content')
<!-- Features Section -->



<section class="features-section py-20 bg-gray-50">
    <div class="container mx-auto text-center">

        
        <h2 class="text-4xl font-bold text-gray-800 mb-12">Our Key Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Feature 1: Notes -->
            <div class="feature-card p-8 bg-white rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <h3 class="text-2xl font-semibold text-gray-800 mb-5">Notes</h3>
                <p class="text-gray-600 mb-6">Upload, search, and download notes shared by your peers on various topics. Stay organized and collaborate effortlessly.</p>
                <a href="{{ route('notes.index') }}" class="btn-link">Explore Notes</a>
            </div>

            <!-- Feature 2: Chatroom -->
            <div class="feature-card p-8 bg-white rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <h3 class="text-2xl font-semibold text-gray-800 mb-5">Chatroom</h3>
                <p class="text-gray-600 mb-6">Engage with your peers in real-time through our live chat feature. Discuss assignments, topics, and more!</p>
                <a href="{{ url('/assignment-chatroom') }}" class="btn-link">Join Chatroom</a>
            </div>

            <!-- Feature 3: Group Study -->
            <div class="feature-card p-8 bg-white rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <h3 class="text-2xl font-semibold text-gray-800 mb-5">Group Study</h3>
                <p class="text-gray-600 mb-6">Collaborate with fellow students in group study sessions. Share ideas and solve problems together.</p>
                <a href="{{ url('/group-study') }}" class="btn-link">Join Group Study</a>
            </div>
        </div>
    </div>
</section>
@endsection
