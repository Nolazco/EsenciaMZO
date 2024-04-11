<?php

namespace ContainerGtDNFxz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Translator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Translation/Translator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/IdentityTranslator.php';

        $container->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', true],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => ['php'], 'translation.loader.yml' => ['yaml', 'yml'], 'translation.loader.xliff' => ['xlf', 'xliff'], 'translation.loader.po' => ['po'], 'translation.loader.mo' => ['mo'], 'translation.loader.qt' => ['ts'], 'translation.loader.csv' => ['csv'], 'translation.loader.res' => ['res'], 'translation.loader.dat' => ['dat'], 'translation.loader.ini' => ['ini'], 'translation.loader.json' => ['json']], ['cache_dir' => ($container->targetDir.''.'/translations'), 'debug' => true, 'resource_files' => ['af' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.af.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.af.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.af.xlf')], 'ar' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ar.xlf')], 'az' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.az.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.az.xlf')], 'be' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.be.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.be.xlf')], 'bg' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bg.xlf')], 'bs' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bs.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bs.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bs.xlf')], 'ca' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ca.xlf')], 'cs' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.cs.xlf')], 'cy' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.da.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.da.xlf')], 'de' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.de.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.de.xlf')], 'el' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.el.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.el.xlf')], 'en' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.en.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), (\dirname(__DIR__, 4).'/translations/form.en.yaml'), (\dirname(__DIR__, 4).'/translations/messages.en.yaml'), (\dirname(__DIR__, 4).'/translations/validators.en.yaml')], 'es' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.es.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.es.xlf')], 'et' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.et.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.et.xlf')], 'eu' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.eu.xlf')], 'fa' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fa.xlf')], 'fi' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fi.xlf')], 'fr' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fr.xlf')], 'gl' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.gl.xlf')], 'he' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.he.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.he.xlf')], 'hr' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hr.xlf')], 'hu' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hu.xlf')], 'hy' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hy.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hy.xlf')], 'id' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.id.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.id.xlf')], 'it' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.it.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.it.xlf')], 'ja' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ja.xlf')], 'lb' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lb.xlf')], 'lt' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lt.xlf')], 'lv' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lv.xlf')], 'mk' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mk.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mk.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.mk.xlf')], 'mn' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mn.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.mn.xlf')], 'my' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.my.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.my.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.my.xlf')], 'nb' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nb.xlf')], 'nl' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nl.xlf')], 'nn' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')], 'no' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.no.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.no.xlf')], 'pl' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pl.xlf')], 'pt' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt.xlf')], 'pt_BR' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf')], 'ro' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ro.xlf')], 'ru' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ru.xlf')], 'sk' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sk.xlf')], 'sl' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sl.xlf')], 'sq' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sq.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sq.xlf')], 'sr_Cyrl' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf')], 'sv' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sv.xlf')], 'th' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.th.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.th.xlf')], 'tl' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')], 'tr' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tr.xlf')], 'uk' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uk.xlf')], 'ur' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ur.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ur.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ur.xlf')], 'uz' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uz.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uz.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uz.xlf')], 'vi' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.vi.xlf')], 'zh_CN' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf')], 'zh_TW' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_TW.xlf'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_TW.xlf')]], 'scanned_directories' => [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/translations'), (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/translations')], 'cache_vary' => ['scanned_directories' => ['vendor/symfony/validator/Resources/translations', 'vendor/symfony/form/Resources/translations', 'vendor/symfony/security-core/Resources/translations', 'translations', 'vendor/symfony/framework-bundle/translations', 'vendor/symfony/twig-bundle/translations']]], []);

        $instance->setConfigCacheFactory(($container->privates['config_cache_factory'] ?? self::getConfigCacheFactoryService($container)));
        $instance->setFallbackLocales(['en']);

        return $instance;
    }
}
