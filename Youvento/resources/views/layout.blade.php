<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode - Gestion des Clubs et Événements</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">YouCode</a>
            <div>
                <a href="#" class="mx-2">Clubs</a>
                <a href="#" class="mx-2">Événements</a>
                <a href="#" class="mx-2">Calendrier</a>
                <a href="#" class="mx-2">Tableau de Bord</a>
                <a href="#" class="mx-2 bg-blue-800 px-4 py-2 rounded">Connexion</a>
            </div>
        </div>
    </nav>

    @yield('content');
    
<!-- Footer -->
<footer class="bg-blue-600 text-white text-center py-4 mt-10 w-full fixed bottom-0">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 YouCode. Tous droits réservés.</p>
        </div>
    </footer>



    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    {
                        title: 'Atelier IA',
                        start: '2023-10-15T14:00:00',
                        end: '2023-10-15T16:00:00'
                    },
                    // Add more events here
                ]
            });
            calendar.render();
        });
    </script>
</body>
</html>
