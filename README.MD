# Laravel Lang Selector

A simple, elegant, and reusable **Livewire 3** language switcher for **Laravel 11**.  
This package provides a ready-to-use dropdown component to switch application locales dynamically — complete with middleware, configuration, and publishable views.

---

## ✨ Features

- ⚡ Built with **Livewire 3**
- 🌍 Easy multi-language switching (session-based)
- ⚙️ Configurable via `config/lang-selector.php`
- 🎨 Publishable views for full customization
- 🧩 Simple integration with your existing layout

---

## 📦 Installation

Require the package via Composer:

```bash
composer require amrikasir/lang-selector
```

---

## ⚙️ Publish Config & Views

You can publish the default configuration and views to customize them:

```bash
php artisan vendor:publish --tag=lang-selector-config
php artisan vendor:publish --tag=lang-selector-views
```

This will create:
```
config/lang-selector.php
resources/views/vendor/lang-selector/
```

---

## 🧩 Usage

1. **Register Middleware**

In `app/Http/Kernel.php`, add the middleware to your web group:

```php
protected $middlewareGroups = [
    'web' => [
        // ...
        \Kaldiaris\LangSelector\Http\Middleware\LocaleMiddleware::class,
    ],
];
```

2. **Add Component to Blade**

Just drop the component anywhere in your layout:

```html
<livewire:language-selector />
```

That’s it! 🎉  
The dropdown will automatically display all available locales from your config.

---

## ⚙️ Configuration

`config/lang-selector.php`

```php
return [
    'available_locales' => [
        'en' => 'English',
        'id' => 'Bahasa Indonesia',
        // add more as needed
    ],
    'default_locale' => 'en',
];
```

---

## 🧠 How It Works

- The `LocaleMiddleware` sets `App::setLocale()` based on the session.
- The `LanguageSelector` Livewire component updates session locale dynamically.
- The selected locale persists until changed again.

---

## 🧰 Example Styling

You can freely modify the published views at:
```
resources/views/vendor/lang-selector/livewire/language-selector.blade.php
```

Example minimal Tailwind version:

```html
<div class="relative">
    <button wire:click="$toggle('open')" class="px-3 py-2 rounded bg-gray-100 hover:bg-gray-200">
        {{ $locales[$current] ?? strtoupper($current) }}
    </button>

    @if ($open ?? false)
        <div class="absolute bg-white border rounded mt-1 shadow">
            @foreach ($locales as $key => $label)
                <button wire:click="setLocale('{{ $key }}')" class="block w-full text-left px-4 py-2 hover:bg-gray-100">
                    {{ $label }}
                </button>
            @endforeach
        </div>
    @endif
</div>
```

---

## 🧾 License

This package is open-sourced software licensed under the [MIT license](LICENSE).

---

