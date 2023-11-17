<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="/dashboard">{{__("Back")}}</a>
            <a href="event/create">{{__("Create")}}</a>
        </h2>
    </x-slot>

    @foreach($events as $event)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <a href={{"event/" . $event->id}}>
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{$event->id}} <br>
                            {{$event->name}} <br>
                            {{$event->description}} <br>
                            {{$event->start_date}} <br>
                            {{$event->end_date}} <br>
                            {{$event->image_link}} <br>
                            {{$event->category->name}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
