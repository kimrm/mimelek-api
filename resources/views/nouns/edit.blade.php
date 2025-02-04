<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nouns') }}
        </h2>
    </x-slot>

    <div class="px-12 mt-12 max-w-7xl mx-auto">
       <form action="{{ route('nouns.update', $noun) }}" method="POST">
            @csrf       
            @method('PUT') 
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Word
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="word" name="word" type="text" placeholder="Word" value="{{ old('word', $noun->word) }}">
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Gender
                    </label>
                    <select class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="gender" name="gender">
                        <option value="" {{ old('gender', $noun->gender) == '' ? 'selected' : '' }}>Select</option>
                        <option value="en" {{ old('gender', $noun->gender) == 'en' ? 'selected' : '' }}>En</option>
                        <option value="et" {{ old('gender', $noun->gender) == 'et' ? 'selected' : '' }}>Et</option>
                    </select>
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Difficulty
                    </label>
                    <select class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="difficulty" name="difficulty">
                        <option value="">Select Difficulty</option>
                        <option value="easy" {{ old('difficulty', $noun->difficulty) == 'easy' ? 'selected' : '' }}>Easy</option>
                        <option value="medium" {{ old('difficulty', $noun->difficulty) == 'medium' ? 'selected' : '' }}>Medium</option>
                        <option value="hard" {{ old('difficulty', $noun->difficulty) ? 'selected' : '' }}>Hard</option>
                    </select>
                </div>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Update word</button>
        </form>
                        
    </div>

   
    
</x-app-layout>
