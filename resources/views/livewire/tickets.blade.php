<div>
    <div class="p-4">
        <h1 class="text-3xl">Support Tickets</h1>
        @foreach($tickets as $ticket)
            <div
                    class="rounded border shadow p-3 my-2 cursor-pointer hover:bg-blue-500 group {{ $active === $ticket->id ? 'bg-blue-500' : '' }}"
                    wire:click="$emit('ticketSelected', {{ $ticket->id }})">
                <p class="group-hover:text-white {{ $active === $ticket->id ? 'text-white' : 'text-gray-800' }}">{{ $ticket->question }}</p>
            </div>
        @endforeach
    </div>
</div>
