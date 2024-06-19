<x-layout>

    @if (session('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-center" role="alert">
            {{ session('message') }}
        </div>
    @endif
    
    <h1 class="text-3xl text-center py-3">LISTA PERSONE</h1>
    <div class="container mx-auto px-4">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-200">
                    <th scope="col" class="py-2 px-4 border-b text-center">#</th>
                    <th scope="col" class="py-2 px-4 border-b text-center">Nome</th>
                    <th scope="col" class="py-2 px-4 border-b text-center">Cognome</th>
                    <th scope="col" class="py-2 px-4 border-b text-center">Partecipa ad un evento?</th>
                    <th scope="col" class="py-2 px-4 border-b text-center">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($people as $person)
                    <tr class="hover:bg-gray-50">
                        <th scope="row" class="py-2 px-4 border-b text-center">{{$person->id}}</th>
                        <td class="py-2 px-4 border-b text-center">{{$person->nameP}}</td>
                        <td class="py-2 px-4 border-b text-center">{{$person->surnameP}}</td>
                        <td class="py-2 px-4 border-b text-center">{{$person->event_id ? 'Sì' : 'No'}}</td>
                        <td class="py-2 px-4 border-b text-center">
                            <a href="{{route('editPerson', $person)}}" class="bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-2 rounded">Modifica</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-2">Non sono presenti persone</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-layout>