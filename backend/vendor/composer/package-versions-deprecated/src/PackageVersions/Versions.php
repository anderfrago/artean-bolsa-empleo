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
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '2.0.3@c9622c6820d3ede1e2315a6a377ea1076e421d88',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.2@8dd39d2ead4409ce652fd4f02621060f009ea5e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.4.2@4202ce675d29e70a8b9ee763bec021b6f44caccb',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.4@207210c57f6c15835e8d6228075cd235bd061efc',
  'doctrine/orm' => '2.9.3@82e77cf5089a1303733f75f0f0ed01be3ab9ec22',
  'doctrine/persistence' => '2.2.1@d138f3ab5f761055cab1054070377cfd3222e368',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '4.4.0@2b0bb59ade31a045fd3ff0097dc558bb896f6596',
  'nelmio/cors-bundle' => '2.1.1@0b964b665016dfb61dd0fd2bb8c24afb1ae45a93',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v6.1.5@62c5909f49cf74dccdf50a294511cc24be2f969c',
  'symfony/cache' => 'v4.4.25@e2486bd59ac996afff25cdbfb823e982a0550c3e',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v4.4.25@2803882bb10353d277d4539635dd688a053d571c',
  'symfony/console' => 'v4.4.25@a62acecdf5b50e314a4f305cd01b5282126f3095',
  'symfony/debug' => 'v4.4.25@a8d2d5c94438548bff9f998ca874e202bb29d07f',
  'symfony/dependency-injection' => 'v4.4.25@2ed2a0a6c960bf4e2e862ec77b2f2c558b83c64d',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v4.4.25@6b88860981116fcddb2ff91043dfc8ad458e5e14',
  'symfony/dotenv' => 'v4.4.25@744c09920fbf1850860f399112e82ced4d19aed0',
  'symfony/error-handler' => 'v4.4.25@310a756cec00d29d89a08518405aded046a54a8b',
  'symfony/event-dispatcher' => 'v4.4.25@047773e7016e4fd45102cedf4bd2558ae0d0c32f',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/filesystem' => 'v4.4.25@2d926ebd76f52352deb3c9577d8c1d4b96eae429',
  'symfony/finder' => 'v4.4.25@ed33314396d968a8936c95f5bd1b88bd3b3e94a3',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/framework-bundle' => 'v4.4.25@182442cad12e3a2ba912eddc20566a51067f8069',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v4.4.25@0c79d5a65ace4fe66e49702658c024a419d2438b',
  'symfony/http-kernel' => 'v4.4.25@3795165596fe81a52296b78c9aae938d434069cc',
  'symfony/inflector' => 'v4.4.25@fc695ab721136b27aa84427a0fa80189761266ef',
  'symfony/mime' => 'v4.4.25@264565f4cb0a696bc914f4923214a5527e67e742',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/property-access' => 'v4.4.25@3af7c21b4128eadbace0800b51054a81bff896c6',
  'symfony/proxy-manager-bridge' => 'v4.4.25@1b3ca99d59d210cf159d165b301a9a9492d93bd4',
  'symfony/routing' => 'v4.4.25@3a3c2f197ad0846ac6413225fc78868ba1c61434',
  'symfony/serializer' => 'v4.4.25@6db3eb4f1bb437cd3730f52353ba4b568acaddf5',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v4.4.25@80d9ae0c8a02bd291abf372764c0fc68cbd06c42',
  'symfony/var-dumper' => 'v4.4.25@31ea689a8e7d2410016b0d25fc15a1ba05a6e2e0',
  'symfony/var-exporter' => 'v4.4.25@723c038aac53280c8ad4209add93e679a33bbe3f',
  'symfony/yaml' => 'v4.4.25@81cdac5536925c1c4b7b50aabc9ff6330b9eb5fc',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'symfony/maker-bundle' => 'v1.32.0@702558c5fc5a27796eedad12a82bb27be76247dc',
  'paragonie/random_compat' => '2.*@35dabde2c68dc7430ba285af3671e30024c9c4cb',
  'symfony/polyfill-ctype' => '*@35dabde2c68dc7430ba285af3671e30024c9c4cb',
  'symfony/polyfill-iconv' => '*@35dabde2c68dc7430ba285af3671e30024c9c4cb',
  'symfony/polyfill-php71' => '*@35dabde2c68dc7430ba285af3671e30024c9c4cb',
  'symfony/polyfill-php70' => '*@35dabde2c68dc7430ba285af3671e30024c9c4cb',
  'symfony/polyfill-php56' => '*@35dabde2c68dc7430ba285af3671e30024c9c4cb',
  '__root__' => 'dev-master@35dabde2c68dc7430ba285af3671e30024c9c4cb',
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
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
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
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
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
}