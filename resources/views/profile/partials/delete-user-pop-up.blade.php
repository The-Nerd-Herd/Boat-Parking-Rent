<script>
    let navBar = document.getElementById('header');
    navBar.className = 'reveal';
</script>

<main id="user-delete-popup" style="display: none" class="z-[55]">
    <div class="bg-white rounded-md shadow-xl w-96 flex items-center justify-center flex-col p-4">
    <p class="font-bold text-2xl">Are you sure ?</p>
    <p>This action will delete <b class="text-red-600 font-bold">EVERYTHING!</b></p>
    <p>This action cannot be undone.</p>
    <div class="flex flex-row gap-10 pt-6">
        <button id="popupClose" class="w-20 bg-gray-200 rounded-md hover:bg-gray-200">Cancel</button>
        <form method="POST" action="{{ route('profile.destroy') }}" class="m-0" >
            @csrf
            @method('DELETE')
            <button type="submit" class="w-20 text-center p-3 rounded-md bg-red-500 hover:bg-red-500">
                Delete
            </button>
        </form>
    </div>
    </div>
</main>
