<x-layout>

    <div class="container mx-auto my-4">
        <div class="flex justify-center">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <form class="p-3 shadow-md rounded-lg my-3 bg-white" method="post" action="{{ route('updatePerson', $person) }}">
                    @method('put')
                    @csrf

                    <div class="mb-3">
                        <label for="InputName" class="text-sm mb-1 font-medium">Nome</label>
                        <input name="nameP" type="text" value="{{$person->nameP}}" class="w-full rounded-md border-2 pl-2 py-1 placeholder:text-gray-400 @error('nameP') border-red-500 @enderror" placeholder="Mario" id="InputName" aria-describedby="nameHelp">
                        @error('nameP')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="InputSurname" class="text-sm mb-1 font-medium">Cognome</label>
                        <input name="surnameP" type="text" value="{{$person->surnameP}}" class="w-full rounded-md border-2 pl-2 py-1 placeholder:text-gray-400 @error('surnameP') border-red-500 @enderror" placeholder="Rossi" id="InputSurname" aria-describedby="surnameHelp">
                        @error('surnameP')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="InputEvent" class="text-sm mb-1 font-medium">Evento a cui partecipa</label>
                        <select name="event_id" class="form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" id="InputEvent" aria-label="Default select example">
                            <option value="">---</option>
                            @foreach ($events as $event)
                             <option value="{{ $event->id }}">{{$event->nameE}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-5 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Invia</button>
                </form>
                
            </div>
        </div>
    </div>

</x-layout>