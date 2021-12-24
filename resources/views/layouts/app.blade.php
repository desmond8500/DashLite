<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta5
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="fr">
    @include('layouts.head')
<body>
    <div class="wrapper">
        @livewire('tabler.sidebar')
        @livewire('tabler.header')
        <div class="page-wrapper">
           @yield('content')
        </div>
    </div>
    @livewireScripts
    <script src="https://unpkg.com/@tabler/core@latest/dist/js/tabler.min.js"></script>
    <script>   document.body.style.display = "block"  </script>
</body>

</html>
