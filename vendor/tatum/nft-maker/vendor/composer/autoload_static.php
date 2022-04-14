<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb256f69ab43264f0a019b0f89eeead4a
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kornrunner\\' => 11,
        ),
        'H' => 
        array (
            'Hathoriel\\NftMaker\\Test\\' => 24,
            'Hathoriel\\NftMaker\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kornrunner\\' => 
        array (
            0 => __DIR__ . '/..' . '/kornrunner/keccak/src',
        ),
        'Hathoriel\\NftMaker\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test/phpunit',
        ),
        'Hathoriel\\NftMaker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Hathoriel\\NftMaker\\Connectors\\DbConnector' => __DIR__ . '/../..' . '/src/Connectors/DbConnector.php',
        'Hathoriel\\NftMaker\\Connectors\\IpfsConnector' => __DIR__ . '/../..' . '/src/Connectors/IpfsConnector.php',
        'Hathoriel\\NftMaker\\Connectors\\TatumConnector' => __DIR__ . '/../..' . '/src/Connectors/TatumConnector.php',
        'Hathoriel\\NftMaker\\Hooks\\AdminHooks' => __DIR__ . '/../..' . '/src/Hooks/AdminHooks.php',
        'Hathoriel\\NftMaker\\Hooks\\PublicHooks' => __DIR__ . '/../..' . '/src/Hooks/PublicHooks.php',
        'Hathoriel\\NftMaker\\Services\\EstimateService' => __DIR__ . '/../..' . '/src/Services/EstimateService.php',
        'Hathoriel\\NftMaker\\Services\\MintService' => __DIR__ . '/../..' . '/src/Services/MintService.php',
        'Hathoriel\\NftMaker\\Services\\NftService' => __DIR__ . '/../..' . '/src/Services/NftService.php',
        'Hathoriel\\NftMaker\\Services\\SetupService' => __DIR__ . '/../..' . '/src/Services/SetupService.php',
        'Hathoriel\\NftMaker\\Utils\\AddressValidator' => __DIR__ . '/../..' . '/src/Utils/AddressValidator.php',
        'Hathoriel\\NftMaker\\Utils\\BlockchainLink' => __DIR__ . '/../..' . '/src/Utils/BlockchainLink.php',
        'Hathoriel\\NftMaker\\Utils\\Constants' => __DIR__ . '/../..' . '/src/Utils/Constants.php',
        'Hathoriel\\NftMaker\\Utils\\UtilsProvider' => __DIR__ . '/../..' . '/src/Utils/UtilsProvider.php',
        'Hathoriel\\NftMaker\\Utils\\Utils\\Activator' => __DIR__ . '/../..' . '/src/Utils/Utils/Activator.php',
        'Hathoriel\\NftMaker\\Utils\\Utils\\Assets' => __DIR__ . '/../..' . '/src/Utils/Utils/Assets.php',
        'Hathoriel\\NftMaker\\Utils\\Utils\\Base' => __DIR__ . '/../..' . '/src/Utils/Utils/Base.php',
        'Hathoriel\\NftMaker\\Utils\\Utils\\Core' => __DIR__ . '/../..' . '/src/Utils/Utils/Core.php',
        'Hathoriel\\NftMaker\\Utils\\Utils\\Localization' => __DIR__ . '/../..' . '/src/Utils/Utils/Localization.php',
        'Hathoriel\\NftMaker\\Utils\\Utils\\PackageLocalization' => __DIR__ . '/../..' . '/src/Utils/Utils/PackageLocalization.php',
        'Hathoriel\\NftMaker\\Utils\\Utils\\PluginReceiver' => __DIR__ . '/../..' . '/src/Utils/Utils/PluginReceiver.php',
        'Hathoriel\\NftMaker\\Utils\\Utils\\Service' => __DIR__ . '/../..' . '/src/Utils/Utils/Service.php',
        'kornrunner\\Keccak' => __DIR__ . '/..' . '/kornrunner/keccak/src/Keccak.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb256f69ab43264f0a019b0f89eeead4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb256f69ab43264f0a019b0f89eeead4a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb256f69ab43264f0a019b0f89eeead4a::$classMap;

        }, null, ClassLoader::class);
    }
}
