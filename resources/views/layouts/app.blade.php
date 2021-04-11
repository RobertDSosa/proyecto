<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', '') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
       
        <!-- Full Callendar Styles -->

        <link href='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.css' rel='stylesheet' />
        <link href='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            <div class="sticky">
                @livewire('navigation')
            </div>
            

            <!-- Page Heading -->
            {{-- class="bg-cover bg-no-repeat" style="background-image: url({{Storage::url('Fondo5.jpg')}});" --}}

            <!-- Page Content -->
            <main class="bg-cover bg-no-repeat" style="background-image: url({{Storage::url('Fondo5.jpg')}});">
                {{ $slot }}
            </main>
        </div>
        <div class="">
            @livewire('footer')
        </div>
        
        @stack('modals')

        <!-- Full Callendar Scripts -->

        <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/moment.min.js'></script>
        <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/jquery.min.js'></script>
        <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.js'></script>
    <script>
      jQuery(document).ready(function($) {
        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
          },
          navLinks: true, // can click day/week names to navigate views
          editable: true,
          eventLimit: true, // allow "more" link when too many events
               
        });
      });
    </script>

        @livewireScripts
    </body>
</html>
