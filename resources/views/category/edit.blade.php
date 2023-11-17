<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="/category">{{__("Back")}}</a>
        </h2>
    </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form action="{{'/category/' . $category->id}}" method=post>
                            @csrf
                            @method('PATCH')
                            <label for="name">Category name:</label><br>
                            <input type="text" id="name" name="name" value={{$category->name}}><br>

                            <label for="color">Category color:</label><br>
                            <input type="color" id="color" name="color" value={{'#'.$category->color}}><br>
                            <input type="submit" value="Submit">
                        </form>

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
