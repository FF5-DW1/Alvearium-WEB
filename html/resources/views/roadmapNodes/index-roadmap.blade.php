<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            Roadmap
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">



                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">


                            <!-- Modal toggle -->
                            <button data-modal-target="staticModal" data-modal-toggle="staticModal"
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 m-4"
                                type="button">
                                Nueva Fase
                            </button>

                            <!-- Main modal -->
                            <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Nueva Fase
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="staticModal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Cerrar modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->

                                        <div class="mx-10 my-8">
                                            <form method="POST" action="{{ route('roadmaps.store') }}"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="mb-4">
                                                    <label for="fase"
                                                        class="block text-sm font-medium text-gray-700">Fase</label>
                                                    <input id="fase" name="phase" type="text"
                                                        class="mt-1 block w-full py-2 
                                                       px-3 border border-gray-300 bg-white rounded-md shadow-sm 
                                                       focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 
                                                       sm:text-sm">
                                                </div>

                                                <div class="mb-4">
                                                    <label for="year-interval"
                                                        class="block text-sm font-medium text-gray-700">Intervalo
                                                        años</label>
                                                    <input id="year-interval" name="year_interval" type="text"
                                                        class="mt-1 block w-full 
                                                       py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm 
                                                       focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 
                                                       sm:text-sm">
                                                </div>

                                                <div class="mb-4">
                                                    <label for="imagen"
                                                        class="block text-sm font-medium text-gray-700">Imagen</label>
                                                    <input id="imagen" name="image_path" type="file"
                                                        accept="image/*"
                                                        class="mt-1 block w-full 
                                                       py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm 
                                                       focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 
                                                       sm:text-sm">
                                                </div>

                                                <div class="mb-4">
                                                    <label for="title-imagen"
                                                        class="block text-sm font-medium text-gray-700">Título
                                                        Imagen</label>
                                                    <input id="title-imagen" name="title" type="text"
                                                        class="mt-1 block w-full 
                                                       py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm 
                                                       focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 
                                                       sm:text-sm">
                                                </div>



                                                <div>
                                                    <button type="submit"
                                                        class="mt-3  inline-flex  py-2 px-6 
                                                               border border-transparent shadow-sm text-sm font-medium 
                                                               rounded-md text-white bg-indigo-600 hover:bg-indigo-700 
                                                               focus:outline-none focus:ring-2 focus:ring-offset-2 
                                                               focus:ring-indigo-500 
                                                               mb-8
                                                               ">
                                                        Enviar
                                                    </button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            {{-- Tabla Roadmap --}}

                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Fase
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Intervalo años
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Imagen
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Título imagen
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($roadmapNodes as $roadmapNode)

                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$roadmapNode->phase}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$roadmapNode->year_interval}}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($roadmapNode->image_path)
                                                <img src="/images/{{ $roadmapNode->image_path}}" alt="Imagen de la fase"
                                                    class="w-10 h-10 rounded-full">
                                                @else
                                                {{$roadmapNode->id}}
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$roadmapNode->title}}
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                @endforeach
                                </tr>

                            </tbody>
                        </table>
                    </div>





                </div>
            </div>
        </div>
    </div>
</x-app-layout>
