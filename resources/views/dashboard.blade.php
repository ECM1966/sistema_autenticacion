<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Bienvenido a la Aplicación de Gestión
                    </div>

                    <div class="mt-6 text-gray-500">
                        Utiliza el menú de navegación para gestionar maquinaria, parcelas y acciones.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('maquinaria') }}">
                                Maquinaria
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('terrenos') }}">
                                Terrenos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('acciones') }}">
                                Acciones
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>
                <p>Bienvenido al Dashboard</p>
            </main>
        </div>
    </div> -->

    @vite('resources/js/app.js')
</body>
</html>


