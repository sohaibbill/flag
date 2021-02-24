<div class="flex flex-col  space-y-4 ">
    <div class="flex flex-row justify-between items-center capitalize">
        <div class="flex rounded space-x-2 bg-white shadow px-8 items-center">
            <svg class="w-5 h-5 text-gray-700 -ml-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
            </svg>
            <input class="text-sm border-none placeholder-gray-900 dark-bg-secondary no-shadow dark-placeholder-white" type="text" placeholder="search country...">
        </div>
        <div class="text-gray-900">
            filter by region
        </div>
    </div>

    <div class="grid grid-cols-4 gap-4">
        @foreach($country as $c)
        <div class="bg-white dark-bg-secondary text-gray-900  w-full  h-60 rounded-md overflow-hidden shadow-md">
            <img src="{{$c->flag}}" class="w-full h-36 " alt="" srcset="">
            <div class="px-4 py-2 capitalize">
                <h2 class="font-semibold">{{$c->name}}</h2>
                <p class="text-xs font-semibold "> Population : <span class="font-noraml">{{$c->population}}</span></p>
                <p class="text-xs font-semibold "> Region : <span class="font-noraml">{{$c->region}}</span></p>
                <p class="text-xs font-semibold "> Capital : <span class="font-noraml">{{$c->capital}}</span></p>
            </div>
        </div>
        @endforeach
        {{ $country->links() }}

    </div>
</div>