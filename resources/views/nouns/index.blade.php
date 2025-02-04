<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nouns') }}
        </h2>
    </x-slot>

    <div class="px-12 mt-12 max-w-7xl mx-auto">
       <form action="{{ route('nouns.store') }}" method="POST">
            @csrf            
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Word
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="word" name="word" type="text" placeholder="Word" value="{{ request()->word }}">
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Gender
                    </label>
                    <select class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="gender" name="gender">
                        <option value="">Select</option>
                        <option value="en">En</option>
                        <option value="et">Et</option>
                    </select>
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Difficulty
                    </label>
                    <select class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="difficulty" name="difficulty">
                        <option value="">Select Difficulty</option>
                        <option value="easy" {{ request()->difficulty == 'easy' ? 'selected' : '' }}>Easy</option>
                        <option value="medium" {{ request()->difficulty == 'medium' ? 'selected' : '' }}>Medium</option>
                        <option value="hard" {{ request()->difficulty == 'hard' ? 'selected' : '' }}>Hard</option>
                    </select>
                </div>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Add word</button>
        </form>
                        
    </div>

    <div class="py-12">
        <div>{{count($nouns)}} words</div>
        @foreach ($nouns as $noun)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
                <div class="overflow-hidden bg-white sm:rounded-lg p-6 mb-3 flex justify-between">                   
                    <div class="flex flex-row gap-4">
                        <div>{{$noun->word}}</div>
                        <div>{{$noun->gender}}</div>
                        <div>{{$noun->difficulty}}</div>
                    </div>
                <div>                     
                    <a href="{{ route('nouns.edit', $noun) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                </div>

                </div>                               
            </div>     

        @endforeach        
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                {{ $nouns->links() }}

            </div>
            
    </div>
    
</x-app-layout>
