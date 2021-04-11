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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

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

        <div class="container bg-gray-100 ">
            <br />
            <h1 class="text-center text-primary"><u>Calendario de eventos</u></h1>
            <br />
        
            <div id="calendar"></div>
        
        </div>
        </main>
    
    <div class="">
        @livewire('footer')
    </div>
    
    @stack('modals')

  
<div class="container">
    <br />
    <h1 class="text-center text-primary"><u>Calendario de eventos</u></h1>
    <br />
    <div ">
        <div id="calendar" class="card w-2/3 mx-auto bg-gray-100"></div>
    </div>    
</div>
   
<script>



$(document).ready(function () {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar({
        editable:true,
        header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
        },
        events:'/full-calendar',
        selectable:true,
        selectHelper: true,
        select:function(start, end, allDay)
        {
            var title = prompt('Título del evento:');

            if(title)
            {
                var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');

                var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

                $.ajax({
                    url:"/full-calendar/action",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        type: 'add'
                    },
                    success:function(data)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Se ha registrado el evento exitosamente ");
                    }
                })
            }
        },
        editable:true,
        eventResize: function(event, delta)
        {
            var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
            var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
            var title = event.title;
            var id = event.id;
            $.ajax({
                url:"/full-calendar/action",
                type:"POST",
                data:{
                    title: title,
                    start: start,
                    end: end,
                    id: id,
                    type: 'update'
                },
                success:function(response)
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Se ha actualizado el evento correctamente");
                }
            })
        },
        eventDrop: function(event, delta)
        {
            var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
            var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
            var title = event.title;
            var id = event.id;
            $.ajax({
                url:"/full-calendar/action",
                type:"POST",
                data:{
                    title: title,
                    start: start,
                    end: end,
                    id: id,
                    type: 'update'
                },
                success:function(response)
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Se ha actualizado el evento exitosamente");
                }
            })
        },

        eventClick:function(event)
        {
            if(confirm("¿Estás seguro/a de eliminar este evento del calendario?"))
            {
                var id = event.id;
                $.ajax({
                    url:"/full-calendar/action",
                    type:"POST",
                    data:{
                        id:id,
                        type:"delete"
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Se ha eliminado el evento correctamente");
                    }
                })
            }
        }
    });

});
  
</script>
@livewireScripts
  
</body>
</html>
