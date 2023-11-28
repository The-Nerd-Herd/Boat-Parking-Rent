<script>
    let navBar = document.getElementById('header');
    navBar.className = 'reveal';
</script>

<main id="user-delete-popup" class="flex z-[55] flex-col items-center justify-center absolute bg-gray-200 h-[150px] w-[400px] rounded-lg shadow-lg">
    <h1 class="font-bold">Are you sure ?</h1>
    <h2>This action will delete <b>EVERYTHING!</b></h2>
    <div class=" flex flex-row gap-10 mt-4">
        <button onclick="closePupup" class=" bg-green-400 rounded-md shadow-xl hover:bg-green-300 transform w-20 w-20 duration-75">Cancel</button>
        <form method="post" action="{{ route('profile.destroy') }}" >
            @csrf
            @method('delete')
            <button class="hover:cursor-pointer text-center text-white p-3 h rounded-md hover:bg-red-500">
                Yes
            </button>
        </form>
    </div>

</main>
