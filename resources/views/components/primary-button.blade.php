<button {{ $attributes->merge(['type' => 'submit', 'class' => 'my-8 mx-0 py-3 text-[1rem] inline-flex items-center px-4 py-2 bg-transparent  border-2 border-grey-200 rounded-sm text-xs text-white dark:text-gray-800 tracking-widest hover:bg-gray-100 focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
