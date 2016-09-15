<?php

namespace CleverAge\EAVManager;

/**
 * Allow simple loading of all necessary bundles
 */
class EAVKernelBundleLoader
{
    /**
     * Return the required bundles
     *
     * @return array
     */
    public static function getBundles()
    {
        return [
            // Dependencies
            new \Mopa\Bundle\BootstrapBundle\MopaBootstrapBundle(), // Required by SidusEAVBootstrapBundle
            new \WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(), // Required by SidusFilterBundle
            new \Samson\Bundle\UnexpectedResponseBundle\SamsonUnexpectedResponseBundle(), // Required by SamsonAutocompleteBundle
            new \Samson\Bundle\AutocompleteBundle\SamsonAutocompleteBundle(), // Required by SidusEAVBootstrapBundle
            new \Pinano\Select2Bundle\PinanoSelect2Bundle(), // Required by SidusEAVBootstrapBundle
            new \Oneup\UploaderBundle\OneupUploaderBundle(), // Required by SidusFileUploadBundle
            new \Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(), // Required by SidusFileUploadBundle
            new \JMS\SerializerBundle\JMSSerializerBundle(), // Required by (at least) SidusPublishingBundle
            new \Circle\RestClientBundle\CircleRestClientBundle(), // Required by SidusPublishingBundle

            // Frontend Dependencies
            new \Sonata\SeoBundle\SonataSeoBundle(),
            new \FOS\ElasticaBundle\FOSElasticaBundle(),
            new \WhiteOctober\BreadcrumbsBundle\WhiteOctoberBreadcrumbsBundle(),
            new \Ensepar\Html2pdfBundle\EnseparHtml2pdfBundle(),

            // Sidus bundles
            new \Sidus\EAVModelBundle\SidusEAVModelBundle(), //  Base bundle for EAV model
            new \Sidus\FilterBundle\SidusFilterBundle(), // Data filtering based on user input
            new \Sidus\EAVFilterBundle\SidusEAVFilterBundle(), // Data filtering with EAV support
            new \Sidus\EAVBootstrapBundle\SidusEAVBootstrapBundle(), // Bootstrap integration + additionnal EAV components
            new \Sidus\DataGridBundle\SidusDataGridBundle(), // Datagrid made easy
            new \Sidus\EAVDataGridBundle\SidusEAVDataGridBundle(), // EAV support for datagrids
            new \Sidus\EAVVariantBundle\SidusEAVVariantBundle(), // Handle variants of EAV entities with axles validation
            new \Sidus\PublishingBundle\SidusPublishingBundle(), // Collect entities, serialize and push them on configured remote servers
            new \Sidus\FileUploadBundle\SidusFileUploadBundle(), // Easily attach file to doctrine's entities
            new \Sidus\AdminBundle\SidusAdminBundle(), // Very basic admin configuration in YML to regroup entities and route actions easily

            // CleverAge EAVManager
            new \CleverAge\EAVManager\EAVModelBundle\CleverAgeEAVManagerEAVModelBundle(),
            new \CleverAge\EAVManager\LayoutBundle\CleverAgeEAVManagerLayoutBundle(),
            new \CleverAge\EAVManager\AdminBundle\CleverAgeEAVManagerAdminBundle(),
            new \CleverAge\EAVManager\UserBundle\CleverAgeEAVManagerUserBundle(),
            new \CleverAge\EAVManager\SecurityBundle\CleverAgeEAVManagerSecurityBundle(),
            new \CleverAge\EAVManager\AssetBundle\CleverAgeEAVManagerAssetBundle(),
            new \CleverAge\EAVManager\ImportBundle\CleverAgeEAVManagerImportBundle(),
        ];
    }
}