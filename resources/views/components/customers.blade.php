@props(['customers']);

<div class="max-w-screen-xl mx-auto mt-20 content-center">
    <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">عملاء الشركة</h1>

    <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
        @unless(count($customers) == 0)

        @foreach($customers as $customer)
        <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
            <img class="w-28" src='{{asset("storage/" . $customer->getMedia("customers")[0]->id . "/" .
            $customer->getMedia("customers")[0]->file_name)}}' alt="{{$customer->name}}" />
        </div>
        @endforeach

        @else
        <p></p>
        @endunless
    </div>
</div>
