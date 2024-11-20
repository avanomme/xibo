<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'xibosignage/xibo-cms';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'abraham/twitteroauth' => '0.6.6@fc0766220c79087ac8178625d34e88ca29160d5b',
  'akrabat/ip-address-middleware' => '1.0.1@9b0bffcad90bd365c5bfbdb430563cd4e35a93ba',
  'apereo/phpcas' => '1.5.0@d6f5797fb568726f34c8e48741776d81e4a2646b',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'defuse/php-encryption' => 'v2.3.1@77880488b9954b7884c25555c2a0ea9e7053f9d2',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'emojione/emojione' => 'v1.5.2@9c4c2a82307e4aa171f5ee1657521041c8049d9d',
  'erusev/parsedown' => '1.7.4@cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
  'evenement/evenement' => 'v2.1.0@6ba9a777870ab49f417e703229d53931ed40fd7a',
  'ezyang/htmlpurifier' => 'v4.14.0@12ab42bd6e742c70c0a52f7b82477fcd44e64b75',
  'flynsarmy/slim-monolog' => 'v1.0.1@2a3a20671cc14372424085d563991c90ba7818e8',
  'gettext/gettext' => 'v4.8.6@bbeb8f4d3077663739aecb4551b22e720c0e9efe',
  'gettext/languages' => '2.9.0@ed56dd2c7f4024cc953ed180d25f02f2640e3ffa',
  'guzzlehttp/guzzle' => '6.5.8@a52f0440530b54fa079ce76e8c5d196a42cad981',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '1.9.0@e98e3e6d4f86621a9b75f623996e6bbdeb4b9318',
  'illuminate/cache' => 'v5.8.36@e6acac59f94c6362809b580918f7f3f6142d5796',
  'illuminate/contracts' => 'v5.8.36@00fc6afee788fa07c311b0650ad276585f8aef96',
  'illuminate/filesystem' => 'v5.8.36@494ba903402d64ec49c8d869ab61791db34b2288',
  'illuminate/support' => 'v5.8.36@df4af6a32908f1d89d74348624b57e3233eea247',
  'infostars/picofeed' => 'dev-master@cdaf832cc1687450473484dbc9ea782601c6db7f',
  'intervention/image' => '2.7.2@04be355f8d6734c826045d02a1079ad658322dad',
  'intervention/imagecache' => '2.5.2@270d1e72ddff2fc0a6d3c7e6cbc9d23c9ec1e3e4',
  'james-heinrich/getid3' => 'v1.9.21@36f5dabb1325415a4b07a401113f8db2eb81eca1',
  'jean85/pretty-package-versions' => '1.6.0@1e0104b46f045868f11942aea058cd7186d6c303',
  'jeremeamia/superclosure' => '2.4.0@5707d5821b30b9a07acfb4d76949784aaa0e9ce9',
  'jmikola/geojson' => '1.0.3@f5b122e15c804fabc5881da214c57d52ea0c5715',
  'johngrogg/ics-parser' => 'v3.2.0@cc5cc7c6f934ec129c4e207828eb27315e1b61fb',
  'lcobucci/jwt' => '3.4.6@3ef8657a78278dfeae7707d51747251db4176240',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/oauth2-client' => '2.6.1@2334c249907190c132364f5dae0287ab8666aa19',
  'league/oauth2-server' => '8.3.5@7aeb7c42b463b1a6fe4d084d3145e2fa22436876',
  'league/uri' => '6.4.0@09da64118eaf4c5d52f9923a1e6a5be1da52fd9a',
  'league/uri-interfaces' => '2.3.0@00e7e2943f76d8cb50c7dfdc2f6dee356e15e383',
  'mongodb/mongodb' => '1.10.1@9e0da590ec94e8af9a0ee065294627ffaee6244e',
  'monolog/monolog' => '1.27.1@904713c5929655dc9b97288b69cfeedad610c9a1',
  'mpdf/mpdf' => 'v8.1.1@e511e89a66bdb066e3fbf352f00f4734d5064cbf',
  'mtdowling/cron-expression' => 'v1.2.3@9be552eebcc1ceec9776378f7dcc085246cacca6',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nesbot/carbon' => '2.60.0@00a259ae02b003c563158b54fb6743252b638ea6',
  'nikic/fast-route' => 'v1.3.0@181d480e08d9476e61381e04a71b34dc0432e812',
  'nikic/php-parser' => 'v4.14.0@34bea19b6e03d8153165d8f30bba4c3be86184c1',
  'nyholm/psr7' => '1.5.1@f734364e38a876a23be4d906a2a089e1315be18a',
  'nyholm/psr7-server' => '1.0.2@b846a689844cef114e8079d8c80f0afd96745ae3',
  'onelogin/php-saml' => '3.3.1@bb34489635cd5c7eb1b42833e4c57ca1c786a81a',
  'opis/closure' => '3.6.3@3d81e4309d2a927abbe66df935f4bb60082805ad',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'phenx/php-font-lib' => '0.5.4@dd448ad1ce34c63d09baccd05415e361300c35b4',
  'php-di/invoker' => '2.0.0@540c27c86f663e20fe39a24cd72fa76cdb21d41a',
  'php-di/php-di' => '6.0.11@9bdcc2f41f5fb700ddd01bc4fa8d5bd7b3f94620',
  'php-di/phpdoc-reader' => '2.2.1@66daff34cbd2627740ffec9469ffbac9f8c8185c',
  'php-di/slim-bridge' => '3.2.0@1644a2f31079e92a14cebbf90c7f71ebcbe39ee6',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'phpmailer/phpmailer' => 'v6.5.4@c0d9f7dd3c2aa247ca44791e9209233829d82285',
  'phpseclib/mcrypt_compat' => '1.0.14@e38b76f02e6cf97aca05f5738eee1b917d922101',
  'phpseclib/phpseclib' => '2.0.37@c812fbb4d6b4d7f30235ab7298a12f09ba13b37c',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/http-server-handler' => '1.0.1@aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
  'psr/http-server-middleware' => '1.0.1@2296f45510945530b9dceb8bcedb5cb84d40c5f5',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ralouphie/mimey' => '1.0.8@d69688d4856daa13a9124c819d148ccc2235dea2',
  'react/event-loop' => 'v0.4.3@8bde03488ee897dc6bb3d91e4e17c353f9c5252f',
  'react/zmq' => 'v0.3.0@2865e3b23000751ed443d3f108da2735abf80716',
  'respect/validation' => '1.1.31@45d109fc830644fecc1145200d6351ce4f2769d0',
  'robmorgan/phinx' => '0.9.2@e1698319ad55157c233b658c08f7a10617e797ca',
  'robrichards/xmlseclibs' => '3.1.1@f8f19e58f26cdb42c54b214ff8a820760292f8df',
  'robthree/twofactorauth' => 'dev-master@ba4e8c55ed150da31b92ce68ac93659926d8b3a4',
  'sallar/jdatetime' => 'dev-master@0e6028c1a5019af57705b1d2e624db6cd9d0646d',
  'selective/samesite-cookie' => '0.1.0@005c653c70b8b728750977266a89691e307f13ef',
  'setasign/fpdi' => 'v2.3.6@6231e315f73e4f62d72b73f3d6d78ff0eed93c31',
  'slim/flash' => '0.4.0@9aaff5fded3b54f4e519ec3d4ac74d3d1f2cbbbc',
  'slim/http' => '1.2.0@3bc9d61b5243cab0d75c89d778bd69464de07354',
  'slim/slim' => '4.8.1@c8934c35d9d98b1a1df9f99ee69b77a59e0aa820',
  'slim/twig-view' => '3.0.0@46bc497bada017c24e6736f80af1baa8c6cc71d3',
  'symfony/config' => 'v4.4.42@83cdafd1bd3370de23e3dc2ed01026908863be81',
  'symfony/console' => 'v4.4.43@8a2628d2d5639f35113dc1b833ecd91e1ed1cf46',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/event-dispatcher' => 'v4.4.42@708e761740c16b02c86e3f0c932018a06b895d40',
  'symfony/event-dispatcher-contracts' => 'v1.1.13@1d5cd762abaa6b2a4169d3e77610193a7157129e',
  'symfony/filesystem' => 'v5.4.9@36a017fa4cce1eff1b8e8129ff53513abcef05ba',
  'symfony/finder' => 'v4.4.41@40790bdf293b462798882ef6da72bb49a4a6633a',
  'symfony/polyfill-ctype' => 'v1.26.0@6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
  'symfony/polyfill-intl-idn' => 'v1.26.0@59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
  'symfony/polyfill-intl-normalizer' => 'v1.26.0@219aa369ceff116e673852dce47c3a41794c14bd',
  'symfony/polyfill-mbstring' => 'v1.26.0@9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
  'symfony/polyfill-php56' => 'v1.20.0@54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
  'symfony/polyfill-php72' => 'v1.26.0@bf44a9fd41feaac72b074de600314a93e2ae78e2',
  'symfony/polyfill-php73' => 'v1.26.0@e440d35fa0286f77fb45b79a03fedbeda9307e85',
  'symfony/polyfill-php80' => 'v1.26.0@cfa0ae98841b9e461207c13ab093d76b0fa7bace',
  'symfony/polyfill-php81' => 'v1.26.0@13f6d1271c663dc5ae9fb843a8f16521db7687a1',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/translation' => 'v5.3.14@945066809dc18f6e26123098e1b6e1d7a948660b',
  'symfony/translation-contracts' => 'v2.5.2@136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
  'symfony/yaml' => 'v4.4.43@07e392f0ef78376d080d5353c081a5e5704835bd',
  'tedivm/stash' => 'v0.14.2@7ea9749784152dcd2dab72c4bbf2bef18c326e41',
  'twig/twig' => 'v3.4.3@c38fd6b0b7f370c198db91ffd02e23b517426b58',
  'xibosignage/oauth2-xibo-cms' => 'dev-feature/3.0@e0819d4f77f3e86b752ef050c636f99c17b3060e',
  'xibosignage/support' => 'dev-master@348f9ff7bcbfea74c69988ca7c196231dc558d07',
  'xibosignage/xibo-xmr' => '0.9@6a6e6fffc1cebd3f9b250dbd5ad1e1969268256f',
  'zendframework/zendxml' => '1.2.0@eceab37a591c9e140772a1470338258857339e00',
  'xibosignage/xibo-cms' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}