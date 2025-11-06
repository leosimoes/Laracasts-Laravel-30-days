# Day 5 - Style the Currently Active Navigation Link

## Information
To ensure the container fills the height of the viewport, use the `h-full` class:

```html
<html class="h-full bg-gray-100">
<body class="h-full">
```

- Use the helper function `request()` with the `is('...')` method to check if the current URL matches a pattern.
- In Blade components, differentiate between:
  * Attributes: HTML attributes such as href, id, class;
  * Props: Custom properties passed to the component, for example, `@props(['active' => false])`.
- The `aria-current` attribute can be used for accessibility, to indicate the current page.
- Blade directives (which begin with `@_`) provide a shorthand way to represent PHP logic within templates.
- Some Blade directives are `if`, `dump`, `unless`, `foreach`.
- Preceding properties with a colon `:` indicates to Blade that the value should be interpreted as a PHP expression.


## Activities
- Extend the NavLink component by adding a new property called `type`.
- This property determines whether the component will be rendered as a `<a>` tag or a `<button>` tag.

- In **resources/views/components/nav-link.blade.php**: I replaced the content with:

```php
@props(['type' => 'a'])
@if($type === 'button')
    <button {{$attributes}}> {{$slot}} </button>
@else
    <a {{$attributes}}> {{$slot}} </a>
@endif
```

- In **resources/views/components/layout.blade.php**: I replaced part of the code that refers to nav-link:

```html
<x-nav-link href="/" class="text-sm/6 font-semibold text-gray-900" :type="request()->is('/')?'button':'a'">Home</x-nav-link>
<x-nav-link href="/about" class="text-sm/6 font-semibold text-gray-900" :type="request()->is('about')?'button':'a'">About</x-nav-link>
<x-nav-link href="/contact" class="text-sm/6 font-semibold text-gray-900" :type="request()->is('contact')?'button':'a'">Contact</x-nav-link>
```


## References
https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/5
