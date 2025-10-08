<div class="relative" x-data="{ open: false }" x-on:click.away="open = false">
	<button 
		class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none"
		x-on:click="open = !open"
		x-on:language-switched.window="location.reload()"
	>
		{{ $this->getLanguageIcon() }} {{ $this->getLanguageName() }}
		<svg class="ml-1 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
		</svg>
	</button>

	<div
		x-show="open"
		x-transition:enter="transition ease-out duration-100"
		x-transition:enter-start="transform opacity-0 scale-95"
		x-transition:enter-end="transform opacity-100 scale-100"
		x-transition:leave="transition ease-in duration-75"
		x-transition:leave-start="transform opacity-100 scale-100"
		x-transition:leave-end="transform opacity-0 scale-95"
		x-cloak
		class="absolute mt-2 w-40 rounded-md shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 z-50"
	>
	    <div wire:loading class="m-5 text-center"> 
			{{ __('Change Language...') }}
		</div>
		<div wire:loading.remove>
		@foreach($languageNames as $code => $name)
			<button
				wire:click="switchLanguage('{{ $code }}')"
				class="flex items-center w-full px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700"
			>
				{{ $this->getLanguageIconFromCode($code) }} {{ $name }}
			</button>
		@endforeach
		</div>
	</div>
</div>
