<?php

namespace ContainerGtDNFxz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Extractor_PhpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\PhpExtractor
     *
     * @deprecated Since symfony/framework-bundle 6.2: The "translation.extractor.php" service is deprecated, use "translation.extractor.php_ast" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/framework-bundle', '6.2', 'The "translation.extractor.php" service is deprecated, use "translation.extractor.php_ast" instead.');

        return new \Symfony\Component\Translation\Extractor\PhpExtractor();
    }
}
