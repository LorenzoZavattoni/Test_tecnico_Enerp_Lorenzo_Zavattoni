<nav class="bg-gray-100">
    <div class="container">
        <ul>
            <li class="block pl-3 mb-3 md:inline-block md:my-0 text-gray-700 mr-4">
                <a class="{{Route::currentRouteName() == 'homePage' ? 'font-bold' : 'font-semibold'}} text-xl " href="{{route('homePage')}}">Home</a>
            </li>
            <li class="block pl-3 md:inline-block text-gray-700 mr-4">
                <a class="{{Route::currentRouteName() == 'indexPeople' ? 'font-bold' : 'text-gray-700'}}" href="{{route('indexPeople')}}">Lista persone</a>
            </li>
            <li class="block mt-3 pl-3 md:inline-block md:mt-0 text-gray-700 mr-4">
                <a class="{{Route::currentRouteName() == 'createEvent' ? 'font-bold' : 'text-gray-700'}}" href="{{route('createEvent')}}">Aggiungi evento</a>
            </li>
            <li class="block mt-3 pl-3 md:inline-block md:mt-0 text-gray-700">
                <a class="{{Route::currentRouteName() == 'createPerson' ? 'font-bold' : 'text-gray-700'}}" href="{{route('createPerson')}}">Aggiungi persona</a>
            </li>
        </ul>   
    </div>
</nav>