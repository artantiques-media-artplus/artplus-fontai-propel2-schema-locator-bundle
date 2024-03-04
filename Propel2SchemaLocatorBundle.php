<?php
namespace Fontai\Bundle\Propel2SchemaLocatorBundle;

use Fontai\Bundle\Propel2SchemaLocatorBundle\DependencyInjection\Compiler\ModifyServicesPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;


class Propel2SchemaLocatorBundle extends Bundle
{
  public function build(ContainerBuilder $container)
  {
    parent::build($container);

    $container->addCompilerPass(new ModifyServicesPass());
  }
}