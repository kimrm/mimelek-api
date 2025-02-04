<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adjectives') }}
        </h2>
    </x-slot>

    <div class="px-12 mt-12 max-w-7xl mx-auto">
       <form action="{{ route('adjectives.update', $adjective) }}" method="POST">
            @csrf            
            @method('PUT')
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-[300px] mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Word
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="word" name="word" type="text" placeholder="Word" value="{{ old('word', $adjective->word) }}">
                </div>
                <div class="w-full md:w-[200px] mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        En
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="en" name="en" type="text" placeholder="En" value="{{ old('en', $adjective->en) }}">
                </div>
                <div class="w-full md:w-[200px] mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Et
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="et" name="et" type="text" placeholder="Et" value="{{ old('et', $adjective->et) }}">
                </div>
                <div class="w-full md:w-[200px] px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Difficulty
                    </label>
                    <select class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="difficulty" name="difficulty">
                        <option value="">Select Difficulty</option>
                        <option value="easy" {{ old('difficulty', $adjective->difficulty) == 'easy' ? 'selected' : '' }}>Easy</option>
                        <option value="medium" {{ old('difficulty', $adjective->difficulty) == 'medium' ? 'selected' : '' }}>Medium</option>
                        <option value="hard" {{ old('difficulty', $adjective->difficulty) == 'hard' ? 'selected' : '' }}>Hard</option>
                    </select>
                </div>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Update word</button>
        </form>
                        
    </div>

    
    
</x-app-layout>
