# WP Base theme

## Overview

This a child of the default 2015 theme. It:

- enqueues the parent theme file
- enqueues a `main.css` file which includes any custom CSS
- in `functions.php` it unplugs 2015's `twentyfifteen_fonts_url` function so it doesn't load any external fonts
- includes a `main.scss` file which should be compiled to `main.css`

## Usage

- Select the Wp Base theme from Appearance > Themes
- Add your own CSS to `main.scss` (probably via SASS includes)
- Compile `main.css` from `main.scss`

## Variables

WP Base generally makes no assumptions about your child theme. However, it comes with a few variables you can use throughout your CSS (if you're using SASS). These are:

- $main-font
- $secondary-font
- $mob-large
- $tab-small
- $tab-large
- $desk-small
- $desk-med
- $desk-large
- $desk-xl

See https://wordpress.org/support/topic/media-query-breakpoints for a list of Twenty Fifteen breakpoints.
