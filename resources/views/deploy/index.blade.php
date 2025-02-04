<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Deployment') }}
        </h2>
    </x-slot>

    <div class="px-12 mt-12 max-w-7xl mx-auto">
       <form action="{{ route('deploy.store') }}" method="POST">
            @csrf            
           <input type="hidden" name="deploy" value="deploy">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Deploy frontend</button>
        </form>
        {{ $output }} 
    </div>

    
</x-app-layout>
