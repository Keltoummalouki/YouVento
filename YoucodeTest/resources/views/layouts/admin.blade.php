<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .youcode-logo {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            font-size: 1.5rem;
        }
        .youcode-logo .you {
            color: #000;
        }
        .youcode-logo .code {
            color: #2563eb;
        }
    </style>
</head>
<body class="bg-gray-100">


        @yield('content')

        <!-- Footer -->
        <footer class="bg-gray-800">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-white">
                        <h3 class="text-lg font-semibold mb-4">Contact</h3>
                        <p class="text-gray-300">Email: contact@youcode.ma</p>
                        <p class="text-gray-300">Tél: +212 5XX XX XX XX</p>
                        <p class="text-gray-300">Youssoufia, Maroc</p>
                    </div>
                    <div class="text-white">
                        <h3 class="text-lg font-semibold mb-4">Liens utiles</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white">À propos</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Formations</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Partenaires</a></li>
                        </ul>
                    </div>
                    <div class="text-white">
                        <h3 class="text-lg font-semibold mb-4">Suivez-nous</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-300 hover:text-white">
                                <i class="fab fa-linkedin text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white">
                                <i class="fab fa-facebook text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white">
                                <i class="fab fa-instagram text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-700 pt-8">
                    <p class="text-center text-gray-300">
                        © 2025 YouCode - Une initiative de la Fondation OCP
                    </p>
                </div>
            </div>
        </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>