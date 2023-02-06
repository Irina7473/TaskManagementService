{{--<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">--}}
<div class="container mt-5">
    <div class="row">
        <div class="col-8">
            {{ $logo }}
        </div>

        {{--            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">--}}
        <div class="col-4 ">
            <div class="container mt-3">
                <h2 class="text-primary">Task Servis </h2>
            </div>
            <div class="container mt-5">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
