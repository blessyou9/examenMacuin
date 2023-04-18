<html>
<head>
    <link href="style.css" rel="StyleSheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/notie/dist/notie.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>

<style>
    .navbar .nav-item .dropdown-menu {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
}

.navbar .nav-item .dropdown-menu a.dropdown-item:hover {
    background-color: #007bff;
    color: #fff;
}
</style>

<body>
    <div class="bg-info clearfix navbar">
        <span id="website-title" class="navbar-brand" href="#">Macuin Dashboard</span>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a href="/home" class="nav-link {{ request()->routeIS('Nhome') }}">Home</a>
            </li>
            <li class="nav-item">
                <a href="/usuarios" class="nav-link {{ request()->routeIS('Nusuarios') }}">Usuarios</a>
            </li>
            <li class="nav-item">
                <a href="/departamentos" class="nav-link {{ request()->routeIS('Ndepartamentos') }}">Departamentos</a>
            </li>
            <li class="nav-item">
                <a href="/tickets" class="nav-link {{ request()->routeIS('Ntickets') }}">Tickets</a>
            </li>
            <li class="nav-item">
                <a href="/reportes" class="nav-link {{ request()->routeIS('Nreportes') }}">Reportes</a>
            </li>
            <li class="nav-item">
                <a href="/observaciones" class="nav-link {{ request()->routeIS('Nobservaciones') }}">Observaciones</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ request()->routeIS('NperfilJefe') }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Perfil
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{ route('NperfilJefe') }}">Perfil Jefe</a></li>
                  <li><a class="dropdown-item" href="{{ route('NperfilAuxiliar') }}">Perfil Auxiliar</a></li>
                  <li><a class="dropdown-item" href="{{ route('NperfilCliente') }}">Perfil Cliente</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/" class="nav-link {{ request()->routeIS('Nlogout') }}">Log Out</a>
            </li>
            <li class="nav-item">
                <p class="nav-link" style="color:#fff">Jefe</p>
             </li>
        </ul>
    </div>
    <div class="container-fluid" style="margin-top: 70px;">
        @yield("contenido")
    </div>
</body>

<footer class="w-full border-t bg-white pb-12">
    <div
        class="relative w-full flex items-center invisible md:visible md:pb-12"
        x-data="getCarouselData()"
    >
        <button
            class="absolute bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 ml-12"
            x-on:click="decrement()">
            &#8592;
        </button>
        <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">
            <img class="w-1/6 hover:opacity-75" :src="image">
        </template>
        <button
            class="absolute right-0 bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 mr-12"
            x-on:click="increment()">
            &#8594;
        </button>
    </div>
    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
            <a href="#" class="uppercase px-3">About Us</a>
            <a href="#" class="uppercase px-3">Privacy Policy</a>
            <a href="#" class="uppercase px-3">Terms & Conditions</a>
            <a href="#" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="uppercase pb-6">&copy; Macuin Dashboard.com</div>
    </div>
  </footer>
</html>
