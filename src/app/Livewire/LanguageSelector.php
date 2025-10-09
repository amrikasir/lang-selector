<?php

namespace LanguageSelector\App\Livewire;

use Illuminate\Support\Facades\App;
use Livewire\Component;

class LanguageSelector extends Component
{
	public $currentLanguage;

	public $languageNames;
	
	/**
	 * Initialize the component with the current application locale.
	 */
	public function mount()
	{
		$this->languageNames = config('lang-selector.supported_languages');

		$this->currentLanguage = session('locale', config('app.locale'));
	}

	/**
	 * Get the icon for the current language.
	 *
	 * @return string
	 */
	public function getLanguageIcon()
	{
		return $this->getLanguageIconFromCode($this->currentLanguage);
	}

	public function getLanguageIconFromCode($code)
	{
		$languageIcons = config('lang-selector.icons');

		return $languageIcons[$code] ?? '🌐';
	}

	/**
	 * Get the name of the current language.
	 *
	 * @return string
	 */
	public function getLanguageName()
	{
		return $this->languageNames[$this->currentLanguage] ?? 'Unknown';
	}

	/**
	 * Switch the application language.
	 *
	 * @param string $language
	 */
	public function switchLanguage($language)
	{
		if (array_key_exists($language, $this->languageNames)) {
			App::setLocale($language);
			$this->currentLanguage = $language;

			// Store the selected language in the session
			session(['locale' => $language]);

			// or dispatch a browser event to handle the UI update
			// Uncomment the line below if you want to use a browser event
			$this->dispatch('language-switched', ['language' => $language]);
		}
	}

	/**
	 * Change the language when the button is clicked.
	 */
	public function changeLanguage()
	{
		$switchConfig = config('lang-selector.language_switch');
		if (!isset($switchConfig['first']) || !isset($switchConfig['second'])) {
			throw new \Exception("Both 'first' and 'second' languages must be defined in the 'language_switch' configuration.");
		}
		
		$this->switchLanguage(
			$this->currentLanguage === $switchConfig['first'] 
				? $switchConfig['second'] 
				: $switchConfig['first']
		);
	}

	/**
	 * Render the component view.
	 * @return \Illuminate\View\View
	 */
	public function render()
	{
		if (config('lang-selector.mode') === 'buttons') {
			return view('lang-selector::livewire.language-buttons');
		}
		return view('lang-selector::livewire.language-dropdown');
	}
}
