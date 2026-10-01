<?php
declare(strict_types=1);

namespace Magelan\CategoryDesc\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;

class InstallData implements InstallDataInterface
{
 protected $eav_setup;
 protected $connection;

    /** Declared: PHP 8.2 deprecates dynamic properties. */
    protected $eav_setup_factory;

    protected $eav_config;
 public function __construct(EavSetupFactory $eavSetupFactory,
    \Magento\Framework\App\ResourceConnection $connection,
    \Magento\Eav\Model\Config $eavConfig
 ) {
     $this->eav_setup_factory = $eavSetupFactory;
     $this->connection = $connection->getConnection();
     $this->eav_config = $eavConfig;
 }
 public function install(
    ModuleDataSetupInterface $setup,
    ModuleContextInterface $context
 ) {

    $eav_setup = $this->eav_setup_factory->create(['setup' => $setup]);

    $eav_setup->addAttribute(
        \Magento\Catalog\Model\Category::ENTITY,
        'long_description',
        [
            'type' => 'text',
            'label' => 'Long description',
            'input' => 'textarea',
            'sort_order' => 105,
            'source' => '',
            'global' => ScopedAttributeInterface::SCOPE_STORE,
            'visible' => true,
            'required' => false,
            'user_defined' => false,
			'used_in_product_listing' => true,
            'default' => null,
            'group' => 'General',
            'wysiwyg_enabled' => true,
            'backend' => ''
        ]
    );

    $eav_setup->updateAttribute(
        \Magento\Catalog\Model\Category::ENTITY,
        'long_description',
        [
            'is_pagebuilder_enabled' => 1,
            'is_html_allowed_on_front' => 1,
            'is_wysiwyg_enabled' => 1
        ]
    );

 }

}