<?php
namespace Fontai\Bundle\Propel2SchemaLocatorBundle\Service;

use Propel\Bundle\PropelBundle\Service\SchemaLocator as BaseSchemaLocator;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;


class SchemaLocator extends BaseSchemaLocator
{
  protected function transformToLogicalName(\SplFileInfo $schema, BundleInterface $bundle)
  {
    $schemaPath = str_replace(
      $bundle->getPath() . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR,
      '',
      $schema->getRealPath()
    );

    return sprintf('@%s/Resources/config/%s', $bundle->getName(), $schemaPath);
  }
}