 <!doctype html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Address book</title>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 </head>
 <body>
     <nav class="navbar navbar-default">
         <div class="container-fluid">
             <div class="navbar-header">
                 <a href="/agenda/create">Nuovo indirizzo</a>
             </div>
         </div>
     </nav>

     <div class="container">
            <div class="row">
                    @yield('biglist')
                    @yield('content')

            </div>

     </div>
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}"></script>
 </body>
 </html>