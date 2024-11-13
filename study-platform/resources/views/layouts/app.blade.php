
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title', 'Study Platform App')</title>
     <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
     <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
 </head>
 <body class="bg-gray-100">

<nav class="navbar">
    <div class="containerf">
        <a href="{{ route('home') }}" class="navbar-brand">Study Platform</a>
        <div class="navbar-links">
            <a href="{{ route('notes.index') }}" class="navbar-link">Notes</a>
            <a href="{{ url('/assignment-chatroom') }}" class="navbar-link">Chatroom</a>
            <a href="{{ url('/group-study') }}" class="navbar-link">Group Study</a>
        </div>
    </div>
</nav>



     <!-- Header with centered content -->
     <header class="bg-cover bg-center h-screen flex flex-col justify-center items-center text-center text-white relative" style="background-image: url('{{ asset('images/book.jpg') }}');">
         <div class="absolute inset-0 bg-black bg-opacity-50"></div>
         <div class="relative z-10 p-8">
             <h1 class="text-5xl font-bold mb-4">Welcome to Our Study Platform App</h1>
             <p class="text-lg mb-6">A comprehensive platform to share notes, collaborate on assignments, and engage in study groups.</p>
         </div>
     </header>
 
     


 
     <!-- Main Content -->
     <main class="container mx-auto p-4">
         @yield('content')
     </main>
 
     <!-- Footer -->
     {{-- <footer class="bg-gray-800 text-white p-4 text-center">
         <p>&copy; 2024 Study Platform App</p>
     </footer> --}}
     <footer class="footer">
        <div class="containernav">
            <p class="footer-title">&copy; 2024 Study Platform App</p>
            <div class="footer-links">
                <a href="{{ route('home') }}" class="footer-link">Home</a>
                <a href="{{ route('notes.index') }}" class="footer-link">Notes</a>
                <a href="{{ url('/assignment-chatroom') }}" class="footer-link">Chatroom</a>
                <a href="{{ url('/group-study') }}" class="footer-link">Group Study</a>
            </div>
            <p class="footer-rights">All Rights Reserved</p>
        </div>
    </footer>
    
     <!-- JavaScript -->
     <script src="{{ asset('js/app.js') }}"></script>
 </body>
 </html>
  

   