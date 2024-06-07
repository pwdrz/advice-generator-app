# Frontend Mentor - Advice generator app solution

This is a solution to the [Advice generator app challenge on Frontend Mentor](https://www.frontendmentor.io/challenges/advice-generator-app-QdUG-13db). Frontend Mentor challenges help you improve your coding skills by building realistic projects.

## Table of contents

- [Overview](#overview)
  - [The challenge](#the-challenge)
  - [Screenshot](#screenshots)
  - [Links](#links)
- [My process](#my-process)
  - [Built with](#built-with)
  - [What I learned](#what-i-learned)
  - [Continued development](#continued-development)
  - [Useful resources](#useful-resources)
- [Author](#author)

## Overview

### The challenge

Users should be able to:

- View the optimal layout for the app depending on their device's screen size
- See hover states for all interactive elements on the page
- Generate a new piece of advice by clicking the dice icon

### Screenshots



<img src="public/gfx/screenshots/L2 - Advice generator app - desktop.png" alt="desktop" width="1000"/>



<img src="public/gfx/screenshots/L2 - Advice generator app - mobile.png" alt="desktop" width="300"/>



<img src="public/gfx/screenshots/L2 - Advice generator app - hover.png" alt="desktop" width="1000"/>



### Links

- Solution URL: [GitHub](https://github.com/pwdrz/advice-generator-app)
- Live Site URL: [GitHub Pages](https://pwdrz.github.io/advice-generator-app/)

## My process

### Built with

- Semantic HTML5 markup
- Tailwind CSS
- CSS custom properties
- Flexbox
- Mobile-first workflow
- Laravel - PHP framework
- Livewire - Full Stack Framework for Laravel
- Volt API - SFC support

### What I learned

I am currently trying to get into Full Stack Dev with the TALL-Stack. For this project I did not have to use Alpine at all. It's quite amazing how you did not have to leave the backend for this FRONTEND challenge. I pretty much lack everything, so this challenge was ideal for me to learn from. Loved the design and idea of having advices every refresh that kept me going. My main challenge towards the end was to get the mobile divider SVG fitting into 320px screens. It kept messing up the viewport. Thats where I stumpled upon viewBox for the first time. Really handy when the SVG needs to be responsive.

Things i learned along the way:

- working with a simple API
- responsive SVGs with viewBox
- Tailwind CSS custom properties in the tailwind config
- creating livewire templates for the SVGs to keep the index file clean
- refresher for relative positioning to create that cool overflowing effect
- animations
- transitions / duration

**Code snippets**

*Fetching the API*

```php
public function fetchAdvice()
{
    $response = Http::get('https://api.adviceslip.com/advice');
    $this->obj = json_decode($response->body())->slip;
}
```
*Including blade template*

```php
@include('icons.divider-desktop', [
    'class' => 'h-4 w-[444px]',
])
```
*Tailwind config*

```css
theme: {
      fontWeight: {
          normal: 400,
          medium: 500,
          bold: 800,
      },
      extend: {
          colors: {
              primary: {
                  lightCyan: "#cee3e9",
                  neonGreen: "#52ffa8",
              },
              neutral: {
                  grayishBlue: "#4e5d73",
                  darkGrayishBlue: "#323a49",
                  darkBlue: "#1f2632",
              }
          },
          fontFamily: {
              manrope : ["Manrope", "sans-serif"],
          },
          boxShadow: {
              'custom': '0 0 32px  hsl(150, 100%, 66%)',
            },
```

### Continued development

In the future it would be nice to not waste as much time trying to figure out which classes have to be assigned to elements so that they are positioned correctly. Further more I would love to get into more challenging stuff, where algorithms, classes and methods are needed. It would also be nice to work on something like a filter, list or table. Someday...!

### Useful resources

- [MDN on viewBox](https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/viewBox) - viewBox explained.
- [Handling templates](https://laravel.com/docs/11.x/blade#including-subviews) - Docs that explain how to render templates and pass additional data.
- [Tailwind configuration](https://tailwindcss.com/docs/configuration) - Adding own variables in the tailwind config.

## Author

- Frontend Mentor - [@pwdrz](https://www.frontendmentor.io/profile/pwdrz)
- GitHub - [@pwdrz](https://github.com/pwdrz/)
