<?php declare(strict_types=1);

namespace Caldera\MapTypeBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class MapTypeExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $resources = $container->getParameter('twig.form.resources');

        $container->setParameter('twig.form.resources', array_merge(['@MapType/Form/map_type.html.twig'], $resources));
    }
}
