<x-layout>

    @if (session('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-center" role="alert">
            {{ session('message') }}
        </div>
    @endif
    
    <h1 class="text-3xl text-center py-3">LISTA EVENTI</h1>
    <div class="container mx-auto px-4">
        <div class="overflow-x-auto">
            <table class="table-auto border-collapse border border-gray-500 mx-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th scope="col" class="py-2 px-4 border-b text-center">#</th>
                        <th scope="col" class="py-2 px-4 border-b text-center">Nome evento</th>
                        <th scope="col" class="py-2 px-4 border-b text-center">Data evento</th>
                        <th scope="col" class="py-2 px-4 border-b text-center">Numero partecipanti</th>
                        <th scope="col" class="py-2 px-4 border-b text-center">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($events as $event)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b text-center">{{$event->id}}</td>
                            <td class="py-2 px-4 border-b text-center">{{$event->nameE}}</td>
                            <td class="py-2 px-4 border-b text-center">{{$event->dateE}}</td>
                            <td class="py-2 px-4 border-b text-center">{{$event->people->count()}}</td>
                            <td class="py-2 px-4 border-b text-center">
                                <a href="{{route('showEvent', $event)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 py-1 rounded">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="border border-gray-300 px-4 py-2 text-center">
                                <h3 class="text-xl">Non sono presenti eventi</h3>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
</x-layout>