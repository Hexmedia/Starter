<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle(),
            new \Symfony\Bundle\MonologBundle\MonologBundle(),
            new \Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new \Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new \Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
            new \Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new \JMS\SerializerBundle\JMSSerializerBundle(),
            new \FOS\UserBundle\FOSUserBundle(),
            new \FOS\RestBundle\FOSRestBundle(),
            new \FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new \Liip\ImagineBundle\LiipImagineBundle(),
            new \Ornicar\GravatarBundle\OrnicarGravatarBundle(),
            new \Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new \Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new \Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(),
            new \WhiteOctober\BreadcrumbsBundle\WhiteOctoberBreadcrumbsBundle(),
            new \Vich\UploaderBundle\VichUploaderBundle(),
            new \Mopa\Bundle\BootstrapBundle\MopaBootstrapBundle(),
            new \BeSimple\I18nRoutingBundle\BeSimpleI18nRoutingBundle(),
            new \Bazinga\Bundle\JsTranslationBundle\BazingaJsTranslationBundle(),
            new \A2lix\TranslationFormBundle\A2lixTranslationFormBundle(),
            new \Hexmedia\AdministratorBundle\HexmediaAdministratorBundle(),
            new \Hexmedia\UserBundle\HexmediaUserBundle(),
            new \Hexmedia\SliderBundle\HexmediaSliderBundle(),
            new \Hexmedia\NewsBundle\HexmediaNewsBundle(),
            new \Hexmedia\ContentBundle\HexmediaContentBundle(),
            new \Hexmedia\CatalogBundle\HexmediaCatalogBundle(),
            new \Hexmedia\TimeFormatterBundle\HexmediaTimeFormatterBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
