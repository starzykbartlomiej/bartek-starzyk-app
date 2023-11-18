<x-body>
    <x-slot name="content">
        <x-secondary-navigation>
            <x-slot name="back_link">/</x-slot>
            <x-slot name="create_link">event/create</x-slot>
        </x-secondary-navigation>
        <section class="design-section">
            <div class="timeline">
                @foreach($events as $event)
                        @if($loop->index % 2 == 0)
                            <x-event-card-left :event="$event"/>
                        @else
                            <x-event-card-right :event="$event"/>
                        @endif
                @endforeach
            </div>
        </section>
    </x-slot>
</x-body>
