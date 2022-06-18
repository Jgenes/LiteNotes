<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="notes/create" >
               <x-button>+ New Note</x-button>
            </a>
         @forelse($notes as $note)
         <div  style="margin-top: 20px" class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
            <h2  style="font-weight:bold" class="font-black text-xl">
             <a href='{{ route('notes.show', $note->uuid) }}'>{{ $note->title }}</a>
            </h2>

            <p class="mt-5" style="">
                {{ Str::limit($note->description,200) }}
            </p>
            <span class="text-sm opacity-70 block mt-4">{{ $note->updated_at->diffForHumans() }}</span>
         </div>
         @empty
         <p>You have no records </p>
         @endforelse
         <br />
         {{$notes->links()}}
        </div>
    </div>
</x-app-layout>
