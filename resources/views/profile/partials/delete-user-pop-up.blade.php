<script>
    let navBar = document.getElementById('header');
    navBar.className = 'reveal';
</script>

<main id="user-delete-popup" style="display: none" class="z-[55] p-4 flex-col items-center justify-center absolute bg-gray-200 h-[150px] w-[400px] rounded-lg shadow-lg">
    <p class="font-bold text-2xl">Are you sure ?</p>
    <p class="">This action will delete <b class="text-red-600 font-bold">EVERYTHING!</b></p>
    <div class=" flex flex-row gap-10 mt-4">
        <button id="popupClose" class=" bg-gray-400 rounded-md shadow-xl hover:bg-green-500 transform w-20 w-20 duration-75">Cancel</button>
        <form method="post" action="{{ route('profile.destroy') }}" >
            @csrf
            @method('delete')
            <button class="hover:cursor-pointer text-center  p-3 h rounded-md hover:bg-red-500 hover:text-white">
                Yes
            </button>
        </form>
    </div>

</main>
