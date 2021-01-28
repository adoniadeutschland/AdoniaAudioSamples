<?php declare(strict_types=1);

namespace AdoniaAudioSamples;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use AdoniaAudioSamples\Service\CustomFieldService;

class AdoniaAudioSamples extends Plugin
{
    protected $container;

    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $this->container = $container;
    }

    public function install(InstallContext $installContext): void
    {
        $customFieldService = new CustomFieldService(
            $this->container,
            $this->container->get('custom_field_set.repository') // this is coming from the services DI definition
        );

        $customFieldService->createCustomFields($installContext->getContext());
    }

    public function uninstall(UninstallContext $context): void
    {
        parent::uninstall($context);

        $connection = $this->container->get(Connection::class);

        $connection->executeUpdate(
            'DELETE FROM custom_field_set WHERE custom_field_set.name = "audioSamples"'
        );
    }
}
