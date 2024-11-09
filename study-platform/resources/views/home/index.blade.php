{{-- 


@extends('layouts.app')

@section('content')


<!-- Features Section -->
<section class="bg-white py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-8">Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1: Notes -->
            <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-bold mb-4">Notes</h3>
                <p class="mb-4">Upload, search, and download notes shared by your peers on various topics.</p>
                <a href="{{ route('notes.index') }}" class="text-blue-500 hover:text-blue-700">Explore Notes</a>
            </div>

            <!-- Feature 2: Chatroom -->
            <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-bold mb-4">Chatroom</h3>
                <p class="mb-4">Discuss assignments and topics with others in real-time using our live chat feature.</p>
                <a href="{{ url('/assignment-chatroom') }}" class="text-blue-500 hover:text-blue-700">Join Chatroom</a>
            </div>

            <!-- Feature 3: Group Study -->
            <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-bold mb-4">Group Study</h3>
                <p class="mb-4">Create or join group study sessions and collaborate with others on shared topics.</p>
                <a href="{{ url('/group-study') }}" class="text-blue-500 hover:text-blue-700">Join Group Study</a>
            </div>
        </div>
    </div>
</section>
@endsection  --}}


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
