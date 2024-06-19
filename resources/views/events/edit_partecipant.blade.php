<x-layout>

    <h1 class="text-3xl text-center py-3">AGGIUNGI PARTECIPANTI</h1>
    <div class="container">
        <table class="table-auto border-collapse border border-gray-500 w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th scope="col" class="py-2 px-4 border-b text-center">#</th>
                    <th scope="col" class="py-2 px-4 border-b text-center">Nome</th>
                    <th scope="col" class="py-2 px-4 border-b text-center">Cognome</th>
                    <th scope="col" class="py-2 px-4 border-b text-center">Azioni</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($people as $person)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b text-center">{{ $person->id }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $person->nameP }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $person->surnameP }}</td>
                        <td class="py-2 px-4 border-b text-center">
                            <a onclick="event.preventDefault(); document.querySelector('#partecipant{{$person->id}}').submit()" href="#" class="text-green-500 hover:text-green-700">
                                <i class="bi bi-plus-circle-fill text-xl"></i>
                            </a>
                            <form id="partecipant{{$person->id}}" class="hidden" method="post" action="{{ route('updatePartecipant', ['person' => $person, 'event' => $event]) }}">
                                @method('put')
                                @csrf
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">Non sono presenti persone</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-layout>