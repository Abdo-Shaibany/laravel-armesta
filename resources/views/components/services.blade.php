@props(['services'])

<div class="container px-6 py-8 mx-auto font-Almarai">
    <h1 class="text-3xl font-semibold text-blue-800 dark:text-white lg:text-4xl">خدمات الشركة</h1>



    <div class="grid grid-cols-1 gap-8 mt-6 lg:grid-cols-4 xl:mt-12">

        @unless(count($services) == 0)

        @foreach($services as $service)
        <div class="flex w-full max-w-sm overflow-hidden bg-blue rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-center w-12 bg-blue-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-blue-500 dark:text-blue-400">{{$service->name}}</span>
                    <p class="text-sm text-gray-600 dark:text-gray-200">{{$service->description}}</p>
                </div>
            </div>
        </div>
        @endforeach

        @else
        <p></p>
        @endunless

    </div>
</div>
