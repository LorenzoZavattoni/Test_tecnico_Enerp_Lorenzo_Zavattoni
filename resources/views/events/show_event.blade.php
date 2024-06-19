<x-layout>

    <div class="flex justify-center mt-4">
        <div class="bg-white shadow-lg rounded-lg w-full md:w-3/4 lg:w-2/3">
            <div class="p-4">
                <h3 class="text-xl font-semibold">{{$event->nameE}}</h3>
                <h5 class="text-gray-600 mb-3">{{$event->dateE}}</h5>
                <h6 class="text-center">Partecipanti:</h6>
                <div class="mt-3">
                    <table class="table-auto border-collapse border border-gray-500 mx-auto w-full">
                        <thead>
                            <tr class="bg-gray-200">
                                <th scope="col" class="py-2 px-4 border-b text-center">#</th>
                                <th scope="col" class="py-2 px-4 border-b text-center">Nome</th>
                                <th scope="col" class="py-2 px-4 border-b text-center">Cognome</th>
                                <th scope="col" class="py-2 px-4 border-b text-center">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($event->people as $person)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-2 px-4 border-b text-center">{{$person->id}}</td>
                                    <td class="py-2 px-4 border-b text-center">{{$person->nameP}}</td>
                                    <td class="py-2 px-4 border-b text-center">{{$person->surnameP}}</td>
                                    <td class="py-2 px-4 border-b text-center">
                                        <a onclick="event.preventDefault();document.querySelector('#detach{{$person->id}}').submit()" href="#" class="text-red-500"><i class="bi bi-x-circle-fill"></i></a>
                                        <form id="detach{{$person->id}}" class="hidden" method="post" action="{{route('detach', $person)}}">
                                            @method('put')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-3">Non ci sono partecipanti a questo evento</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-between mt-4">
                    <a href="{{route('editEvent', $event)}}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md">Modifica</a>
                    <a href="{{route('editPartecipant', $event)}}" class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded-md">Aggiungi partecipanti</a>
                    <a href="{{route('homePage')}}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md"><i class="bi bi-arrow-return-left"></i></a>
                </div>
            </div>
        </div>
    </div>

</x-layout>