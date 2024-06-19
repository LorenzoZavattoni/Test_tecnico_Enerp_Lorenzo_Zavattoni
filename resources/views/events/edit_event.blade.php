<x-layout>

    @if (session('message'))   
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-center" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <div class="container mx-auto my-4">
        <div class="flex justify-center">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <form class="p-3 shadow-md rounded-lg my-3 bg-white" method="post" action="{{route('updateEvent', $event)}}">

                    @method('put')
                    @csrf
                    
                    <div class="mb-3">
                        <label for="InputName" class="text-sm mb-1 font-medium">Nome evento</label>
                        <input name="nameE" type="text" value="{{$event->nameE}}" class="w-full rounded-md border-2 pl-2 py-1 placeholder:text-gray-400 @error('nameE') border-red-500 @enderror" placeholder="Nome evento" id="InputName">
                        @error('nameE')
                        <div class="text-sm text-red-600 py-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="InputDate" class="text-sm mb-1 font-medium">Data evento</label>
                        <input name="dateE" type="date" value="{{$event->dateE}}" class="w-full rounded-md border-2 px-2 py-1 placeholder:text-gray-400 @error('dateE') border-red-500 @enderror" id="InputDate">
                        @error('dateE')
                        <div class="text-sm text-red-600 py-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-md">Invia</button>
                </form>
                
            </div>
        </div>
    </div>

</x-layout>