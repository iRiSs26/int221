@extends('layouts.app')

@section('content')
<!-- Navigation Bar -->
<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex items-center justify-between">
        <a href="{{ route('home') }}" class="text-white text-xl">Home</a>
        <div class="space-x-4">
            <a href="{{ route('notes.index') }}" class="text-white">Notes</a>
            <a href="{{ url('/assignment-chatroom') }}" class="text-white">Chatroom</a>
            <a href="{{ url('/group-study') }}" class="text-white">Group Study</a>
        </div>
    </div>
</nav>

<!-- Background Image Section -->
<section class="relative bg-cover bg-center h-screen" style="background-image: url('path-to-your-background-image.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto text-center text-white relative z-10 py-32">
        <h1 class="text-5xl font-semibold mb-4">Welcome to the Collaborative Learning Platform</h1>
        <p class="text-xl">A place to share notes, collaborate on assignments, and join group study sessions.</p>
    </div>
</section>

<!-- Features Section -->
<section class="bg-white py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-8">Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1: Notes -->
            <div class="p-6 bg-gray-100 rounded shadow-md">
                <h3 class="text-xl font-bold mb-4">Notes</h3>
                <p class="mb-4">Upload, search, and download notes shared by your peers on various topics.</p>
                <a href="{{ route('notes.index') }}" class="text-blue-500">Explore Notes</a>
            </div>

            <!-- Feature 2: Chatroom -->
            <div class="p-6 bg-gray-100 rounded shadow-md">
                <h3 class="text-xl font-bold mb-4">Chatroom</h3>
                <p class="mb-4">Discuss assignments and topics with others in real-time using our live chat feature.</p>
                <a href="{{ url('/assignment-chatroom') }}" class="text-blue-500">Join Chatroom</a>
            </div>

            <!-- Feature 3: Group Study -->
            <div class="p-6 bg-gray-100 rounded shadow-md">
                <h3 class="text-xl font-bold mb-4">Group Study</h3>
                <p class="mb-4">Create or join group study sessions and collaborate with others on shared topics.</p>
                <a href="{{ url('/group-study') }}" class="text-blue-500">Join Group Study</a>
            </div>
        </div>
    </div>
</section>
@endsection
