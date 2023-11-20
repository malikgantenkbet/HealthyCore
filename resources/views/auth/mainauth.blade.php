<!DOCTYPE html>
<html lang="en">
    <head>
    @include('components.head')
    </head>
    <body class="leading-normal tracking-normal text-white-400 m-6 bg-cover bg-fixed" style="background: url('{{ asset('/img/background.jpg') }}'); background-size: cover; background-position: center;">
            <!-- Container -->
            <div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-grey-700 py-10">
                
                <!-- Component -->
                <div class="flex shadow-md">
                    <!-- Form -->
                    <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
                        <div class="w-72">
                        <!-- Heading -->
                        @yield('heading')

                        <!-- Error Message -->
                        @include('components.error')

                        <!-- Form -->
                        @yield('form')

                        <!-- Footer -->
                        <div class="text-center">
                            @yield('footer')
                        </div>
                    </div>
                </div>

                <!-- Banner -->
                @include('components.banner')
            </div>
        </div>
    </body>
</html>