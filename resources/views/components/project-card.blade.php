@props(['project'])

<div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 my-4">
    <div class="px-4 py-2">
        <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">{{$project->title}}</h1>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{$project->for}}</p>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{$project->location}}</p>
    </div>
    <img class="object-cover w-full h-48 mt-2" src='{{asset("storage/" . $project->getMedia("projects")[0]->id . "/" .
    $project->getMedia("projects")[0]->file_name)}}' alt="{{$project->name}}" alt="{{$project->title}}">

    <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
        {{-- <h1 class="text-lg font-bold text-white">$129</h1> --}}
        <button
            class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">تم
            التنفيذ</button>
    </div>
</div>
