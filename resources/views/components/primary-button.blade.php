<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-primary-foreground
    border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest
    hover:bg-gray-700 dark:hover:bg-inherit focus:bg-gray-700 dark:focus:bg-inherit active:bg-gray-900
    dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2
    dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}

</button>
