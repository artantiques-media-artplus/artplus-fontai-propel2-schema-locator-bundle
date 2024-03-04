<?php
namespace Fontai\Bundle\Propel2SchemaLocatorBundle\DependencyInjection\Compiler;

use Fontai\Bundle\Propel2SchemaLocatorBundle\Service\SchemaLocator;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;


class ModifyServicesPass implements CompilerPassInterface
{
  public function process(ContainerBuilder $container)
  {
    $definition = $container->findDefinition('propel.schema_locator');
    $definition->setClass(SchemaLocator::class);
  }
}
