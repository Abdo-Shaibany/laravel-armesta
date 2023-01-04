<x-layout>
    <div class="container px-6 py-8 mx-auto font-Almarai">
        <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">مشاريع الشركة</h1>
        <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-8">

            @unless(count($projects) == 0)

            @foreach($projects as $project)
            <div class="flex items-center justify-center col-span-2 md:col-span-2 lg:col-span-2">
                <x-project-card :project="$project" />
            </div>
            @endforeach

            @else
            <p></p>
            @endunless

        </div>
    </div>
</x-layout>
