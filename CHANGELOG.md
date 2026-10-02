# Changelog

All notable changes to Magelan_CategoryDesc.

## 1.0.1 - 2026-10-02

- Hyvä support in the module itself: `hyva/category/long_description.phtml` sets the text in the theme's typography (`prose`); on Hyvä headings, paragraphs and lists had lost their spacing to Tailwind's reset. Luma is unchanged.
- The module registers itself for the Hyvä Tailwind build (`hyva_config_generate_before`; `view/frontend/tailwind/module.css` for Tailwind 4, `tailwind.config.js` for Tailwind 3). No Hyvä package is required.
- Images inserted with the editor (`{{media url="..."}}`) are turned into real URLs on Luma and Hyvä (catalog output helper); text without them renders exactly as before.
- Plain editor without Page Builder, with images; no stylesheet request for the partial `_extend.less`; declared properties for PHP 8.2 (unreleased since 1.0.0).
- `en_US.csv`, README, LICENSE, composer version and archive.

## 1.0.0

- First release.
