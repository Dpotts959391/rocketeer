<div class="bg-white">
    <div class="container mx-auto flex items-center py-4">
        <div class="w-2/5">
            <a href="#" class="text-sm mr-4 font-semibold pb-4 text-grey-darker border-b-2 border-solid border-transparent hover:text-purple hover:border-purple"><i class="fal fa-home"></i> Home</a>
            <a href="#" class="text-sm mr-4 font-semibold pb-4 text-grey-darker border-b-2 border-solid border-transparent hover:text-purple hover:border-purple"><i class="fal fa-bell"></i> Notifications</a>
            <a href="#" class="text-sm mr-4 font-semibold pb-4 text-grey-darker border-b-2 border-solid border-transparent hover:text-purple hover:border-purple"><i class="fal fa-envelope"></i> Messages</a>
        </div>
        <div class="w-1/5 text-center">
            <a href="#"><i class="fal fa-rocket fa-lg"></i></a>
        </div>
        <div class="w-2/5 flex justify-end">
            <div class="relative">
                <input type="text" class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 -mb-3 -mt-3 rounded-full" placeholder="Search Pooper">
                <span class="flex items-center absolute pin-r pin-y mr-3 pt-1"><i class="fal fa-search text-grey"></i></span>
            </div>
            <div><a href="#"><img src="{{ Auth::user()->getAvatar() }}" alt="Avatar" class="h-8 w-8 rounded-full -mb-3 -mt-3 mr-6 ml-6"></a></div>
            <div><button class="bg-purple hover:bg-purple-dark text-white text-sm -m-2 py-2 px-6 rounded-full">Poop</button></div>
        </div>
    </div>
</div>
