<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="/dashboard">{{__("Back")}}</a>
            <a href="/category/create">{{__("Create")}}</a>
        </h2>
    </x-slot>

    @foreach($categories as $category)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <a href={{"/category/" . $category->id}}>
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{$category->id}} <br>
                            {{$category->name}} <br>
                            color: {{$category->color}} <br>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
