=== Blockylicious ===
Contributors: Jonas Vrbin
Tags: block, gutenberg, custom blocks, react, scss, wordpress
Tested up to: 6.7
Requires at least: 6.0
Stable tag: 0.1.0
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A custom Gutenberg block library plugin built with React, SCSS, and PHP using WordPress's official block development tools.

== Description ==

**Blockylicious** is a modular and developer-friendly WordPress plugin featuring a library of custom Gutenberg blocks.

It was created following modern WordPress standards using `@wordpress/scripts` — no Vite or Webpack configuration required. All blocks are styled with SCSS and built with React.

Included blocks:
- **Curvy**: Custom shape divider block
- **Clicky Group** and **Clicky Button**: Dynamic nested buttons
- **Piccy Image** and **Piccy Gallery**: Image-based blocks with custom alignment and styling

Development is inspired by modern best practices covered in the [Udemy Gutenberg block development course](https://www.udemy.com/course/wordpress-gutenberg-block-development/).

== Installation ==

1. Clone or upload the plugin folder to `/wp-content/plugins/blockylicious`.
2. Run `npm install` to install dependencies.
3. Run `npm run build` to compile production assets (or `npm start` for development).
4. Activate the plugin via the WordPress **Plugins** screen.
5. Use the new blocks directly in the Gutenberg editor.

== Frequently Asked Questions ==

= Do I need Gutenberg installed separately? =  
No — Gutenberg is part of WordPress core since version 5.0.

= Is this plugin dynamic or static? =  
It includes both. Blocks like `Clicky Group` use `render.php` for server-side rendering, while others like `Curvy` are purely static.

= Can I extend the blocks? =  
Yes — the plugin follows modular structure and uses `block.json` registration, allowing easy overrides and extensions.

== Screenshots ==

1. Custom blocks in the editor
2. Live rendering of Piccy Gallery block

== Changelog ==

= 0.1.0 =
* Initial release
* Added Curvy, Piccy, and Clicky block families

== Credits ==

Based on concepts taught in:
[WordPress Gutenberg Block Development with React JS and PHP](https://www.udemy.com/course/wordpress-gutenberg-block-development/)

GitHub Repository: https://github.com/vrbin90s/blockylicious