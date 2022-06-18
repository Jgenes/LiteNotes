
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div  style="margin-top: 20px" class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
            <form method="POST" action="{{ route('notes.store') }}">
                @csrf
                <x-input 
                type="text"
                 name="title"
                  placeholder="Note Title" 
                  class="w-full mt-6" 
                  :value="@old('title')"
                  ></x-input>
                @error('title')
                    <div class="text-red-600">
                        {{$message}}
                    </div>
                @enderror
                <br />
                <x-textarea
                 placeholder="Description" 
                 name="text" 
                 rows="10"
                  class="w-full mt-6"
                  :value="@old('text')"
                  >

                </x-textarea>
                @error('text')
                <div class="text-red-600">
                    {{$message}}
                </div>
            @enderror
                <x-button class="mt-6">Save Note</x-button>
            </form>
        </div>
    </div>
</x-app-layout>
