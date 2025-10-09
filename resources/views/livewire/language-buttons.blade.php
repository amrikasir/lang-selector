<button 
	class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none"
	wire:click="changeLanguage"
	@language-switched="location.reload()"
>
	{{ $this->getLanguageIcon() }} {{ $this->getLanguageName() }}
</button>