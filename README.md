# Magento 2 - Category Long Description Module

The Category Long Description module for Magento 2 adds an additional rich text description field to product categories. It allows store administrators to add a detailed, WYSIWYG-editable long description that displays on the category page in the frontend, below the standard category description.

## Features

- **Additional WYSIWYG Description Field:** Adds a "Long Description" field to the category edit form in Magento Admin with full rich text editor support.
- **Page Builder Support:** Compatible with Magento Page Builder for advanced content layout.
- **Frontend Display:** Renders the long description on the category view page, below the standard category header.
- **Store-Scoped Attribute:** The long description can be set per store view, allowing different content for different languages or stores.
- **Minimal Footprint:** Clean implementation using standard Magento UI components and layout handles.

## Author

Anže Voh  
[Magento eCommerce developer](https://www.degriz.net/) at Degriz

## Installation

1. **Download the Module:** Obtain the Category Long Description module from this repository.
2. **Upload the Files:** Copy the contents of the module to the `app/code/Magelan/CategoryDesc/` folder where your Magento store is located.
3. **Enable the Module:** Run the following commands in the terminal to enable the module:

   ```bash
   php bin/magento module:enable Magelan_CategoryDesc
   php bin/magento setup:upgrade
   php bin/magento setup:di:compile
   php bin/magento cache:flush
   ```

4. **Add Long Description:** Go to **Catalog / Categories**, select a category, and find the **"Long Description"** field in the **General** tab to add your content.
5. **Refresh Cache:** Flush the Magento cache after making any changes.

## Notice

- Always test the module on a development environment before deploying it to your production store.
- The long description field supports HTML content - ensure that content editors are aware of this.

## License

This project is licensed under the [MIT License](LICENSE).

## Disclaimer

- This module is provided "as is," without any warranty of any kind, express or implied. Use it at your own risk.
- The author takes no responsibility for any issues or problems that arise from using this module.
- Free support is not provided.
- You are free to use and modify this module, but you cannot resell it.

## Additional Information

I specialize in custom Magento development and have successfully completed numerous projects tailored to optimize eCommerce functionalities. My services include:

- **Custom Module Development:** Creating tailored solutions to meet your specific business needs.
- **Content & SEO Enhancements:** Extending Magento's native content capabilities to improve user experience and search engine visibility.
- **Performance Optimization:** Ensuring that your Magento store runs efficiently and provides a seamless user experience.
- **Ongoing Support and Maintenance:** Offering support to keep your Magento store up-to-date and running smoothly.

For more information or inquiries, please visit [Degriz Magento eCommerce Development](https://www.degriz.net/).
