# Magelan_CategoryDesc

A second, long description for Magento 2 categories, shown on the category page below the
product list - the place for the buying guide or the SEO text that would push the products down
if it stood above them.

## What it does

* **"Long Description" field** in the category form (*Catalog -> Categories*, section
  *Content*), with the standard editor: headings, lists, links and images. Page Builder is
  switched off for this field on purpose, so the text stays plain HTML.
* **Store view scope:** a different text per language or store.
* **Frontend:** the text at the end of the category page content, below the products and the
  pager. Images inserted with the editor (`{{media url="..."}}`) are turned into real URLs.

## Installing

```
bin/magento module:enable Magelan_CategoryDesc
bin/magento setup:upgrade
bin/magento cache:flush
```

## Themes

* **Luma** and Luma-based themes: `view/frontend/templates/category/long_description.phtml`.
* **Hyvä** (1.1 and newer): `view/frontend/templates/hyva/category/long_description.phtml`, no
  JavaScript. The text is set in the theme's typography (`prose`), so headings, lists and links
  look like the rest of the shop instead of Tailwind's bare reset. `hyva_catalog_category_view.xml`
  switches the template; the module needs no Hyvä package: without Hyvä these files are simply
  never read.

  The Hyvä template uses Tailwind classes, so the module registers itself for the theme's
  Tailwind build. After installing or updating it, regenerate the list and rebuild the theme CSS:

  ```
  bin/magento hyva:config:generate
  cd app/design/frontend/<Vendor>/<theme>/web/tailwind && npm run build
  ```

## Licence

See `LICENSE.txt`.
