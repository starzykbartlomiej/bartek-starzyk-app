<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href={{'/event/' . $event->id}}>{{__("Back")}}</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{'/event/' . $event->id}}" method='post'>
                        @csrf
                        @method('PATCH')
                        <label for="name">name</label><br>
                        <input type="text" id="name" name="name" value={{$event->name}}><br>

                        <label for="description">description</label><br>
                        <input type="text" id="description" name="description" value={{$event->description}}><br>

                        <label for="start_date">start_date</label><br>
                        <input type="date" id="start_date" name="start_date" value={{$event->start_date}}><br>

                        <label for="end_date">end_date</label><br>
                        <input type="date" id="end_date" name="end_date" value={{$event->end_date}}><br>

                        <label for="image_link">image_link</label><br>
                        <input type="text" id="image_link" name="image_link" value={{$event->image_link}}><br>

                        <label for="category">category</label><br>
                        <select id="category_id" name="category_id">
                            @foreach($categories as $category)
                                <option value={{$category->id}} @selected($category->id == $event->category_id)>
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>

                        <input type="submit" value="Submit">
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
