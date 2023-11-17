<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="/category">{{__("Back")}}</a>

            <a href={{'/category/' . $category->id . '/edit'}}>{{__("Edit")}}</a>

            <form method="post" action="{{'/category/' . $category->id}}" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">{{__("Delete")}}</button>
            </form>
        </h2>
    </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{$category->id}} <br>
                        {{$category->name}} <br>
                        color: {{$category->color}} <br>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
