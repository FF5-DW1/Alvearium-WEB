<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            Roadmap - Editar
        </h2>
    </x-slot>
    <div class="mx-auto w-1/2 my-8">
        <form method="POST" action="{{ route('roadmaps.update', $roadmapNode->id) }}" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="phase" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fase:</label>
                <input type="text" id="phase" name="phase" value="{{ $roadmapNode->phase }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="mb-6">
                <label for="year_interval"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervalo
                    años:</label>
                <input type="text" id="year_interval" name="year_interval" value="{{ $roadmapNode->year_interval }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="mb-6">
                <div>
                    @if ($roadmapNode->image_path)
                        <img src="/images/{{ $roadmapNode->image_path }}" alt="Imagen de la fase"
                            class="w-28 h-28 justify-items-center">
                    @else
                        {{ $roadmapNode->id }}
                    @endif
                </div>
                <label for="image_path"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen:</label>
                <input type="file" id="image_path" name="image_path" value="{{ $roadmapNode->image_path }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            </div>

            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título
                    imagen:</label>
                <input type="text" id="title" name="title" value="{{ $roadmapNode->title }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">



                <button type="submit"
                    class="mt-3  inline-flex  py-2 px-6 
                border border-transparent shadow-sm text-sm font-medium 
                rounded-md text-white bg-indigo-600 hover:bg-indigo-700 
                focus:outline-none focus:ring-2 focus:ring-offset-2 
                focus:ring-indigo-500 
                mb-8
                ">Guardar</button>
        </form>
    </div>


</x-app-layout>
