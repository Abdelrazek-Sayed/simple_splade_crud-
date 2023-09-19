<!DOCTYPE html>
<html lang="en">
    <x-partials.head />
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <x-partials.nav />
            {{ $slot }}
        </main>
        <!-- Footer-->
        <x-partials.footer />
    </body>
</html>
