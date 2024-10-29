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
    const ROOT_PACKAGE_NAME = 'prestashop/prestashop';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'beberlei/doctrineextensions' => 'v1.2.9@53a71be2d3a153704d53b68bda24b3207f6a00aa',
  'composer/ca-bundle' => '1.3.4@69098eca243998b53eed7a48d82dedd28b447cd5',
  'composer/installers' => 'v1.12.0@d20a64ed3c94748397ff5973488761b22f6d3f19',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'csa/guzzle-bundle' => 'dev-compat-php@7282d89834960347c830efd43dcd788f09a9959a',
  'cssjanus/cssjanus' => 'dev-patch-1@7866b8a6f7ad8ba8c7f4eb9f87b084452a41d8e5',
  'curl/curl' => '1.9.3@43436a604b18c2a985cbc3f983be817fbe500e99',
  'defuse/php-encryption' => '2.0.3@2c6fea3d9a4eaaa8cef86b2a89f3660818117b33',
  'doctrine/annotations' => '1.13.3@648b0343343565c4a056bfc8392201385e8d89f0',
  'doctrine/cache' => '1.13.0@56cd022adb5514472cb144c087393c1821911d09',
  'doctrine/collections' => '1.8.0@2b44dd4cbca8b5744327de78bafef5945c7e7b5e',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => 'v2.9.3@7345cd59edfa2036eb0fa4264b77ae2576842035',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/doctrine-bundle' => '1.12.13@85460b85edd8f61a16ad311e7ffc5d255d3c937c',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/orm' => '2.7.5@01187c9260cd085529ddd1273665217cae659640',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.3@1034e5e71f89978b80f9c1570e7226f6c3b9b6fb',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'ezyang/htmlpurifier' => 'v4.16.0@523407fb06eb9e5f3d59889b3978d5bfe94299c8',
  'fig/link-util' => '1.1.2@5d7b8d04ed3393b4b59968ca1e906fb7186d81e8',
  'friendsofsymfony/jsrouting-bundle' => '2.8.0@c978fabc6a21a77052ff3fe927b41111ec944f0d',
  'geoip2/geoip2' => 'v2.4.5@b28a0ed0190cd76c878ed7002a5d1bb8c5f4c175',
  'greenlion/php-sql-parser' => 'v4.5.0@a5d5c292d97271c95140192e6f0e962916e39b50',
  'guzzlehttp/cache-subscriber' => '0.2.0@8c766ba399e4c46383e3eaa220201be62abd101e',
  'guzzlehttp/guzzle' => '5.3.4@b87eda7a7162f95574032da17e9323c9899cb6b2',
  'guzzlehttp/log-subscriber' => '1.0.1@99c3c0004165db721d8ef7bbef60c996210e538a',
  'guzzlehttp/ringphp' => '1.1.1@5e2a174052995663dd68e6b5ad838afd47dd615b',
  'guzzlehttp/streams' => '3.0.0@47aaa48e27dae43d39fc1cea0ccf0d84ac1a2ba5',
  'incenteev/composer-parameter-handler' => 'v2.1.5@e1dd118763503f7fd766f907013e1d76d525fcc4',
  'ircmaxell/password-compat' => 'v1.0.4@5c5cde8822a69545767f7c7f3058cb15ff84614c',
  'ircmaxell/random-lib' => 'v1.2.0@e9e0204f40e49fa4419946c677eccd3fa25b8cf4',
  'ircmaxell/security-lib' => 'v1.1.0@f3db6de12c20c9bcd1aa3db4353a1bbe0e44e1b5',
  'jakeasmith/http_build_url' => '1.0.1@93c273e77cb1edead0cf8bcf8cd2003428e74e37',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'league/tactician' => 'v1.1.0@e79f763170f3d5922ec29e85cffca0bac5cd8975',
  'league/tactician-bundle' => 'v1.2.0@66b97472915290b93654e60610295660f597ad4e',
  'league/tactician-container' => '2.0.0@d1a5d884e072b8cafbff802d07766076eb2ffcb0',
  'league/tactician-logger' => 'v0.10.0@3ff9ee04e4cbec100af827f829ed4c7ff7c08442',
  'markbaker/complex' => '1.5.0@c3131244e29c08d44fefb49e0dd35021e9e39dd2',
  'markbaker/matrix' => '1.2.3@44bb1ab01811116f01fe216ab37d921dccc6c10d',
  'martinlindhe/php-mb-helpers' => '0.1.7@d12570aff7f44f17c1e8b2da59795fe847a7a7c6',
  'matthiasmullie/minify' => '1.3.69@a61c949cccd086808063611ef9698eabe42ef22f',
  'matthiasmullie/path-converter' => '1.1.3@e7d13b2c7e2f2268e1424aaed02085518afa02d9',
  'maxmind-db/reader' => 'v1.6.0@febd4920bf17c1da84cef58e56a8227dfb37fbe4',
  'maxmind/web-service-common' => 'v0.7.0@74c996c218ada5c639c8c2f076756e059f5552fc',
  'mobiledetect/mobiledetectlib' => '2.8.41@fc9cccd4d3706d5a7537b562b59cc18f9e4c0cb1',
  'monolog/monolog' => '1.27.1@904713c5929655dc9b97288b69cfeedad610c9a1',
  'mrclay/minify' => '2.3.3@1928e89208d28e91427b2f13b67acdbd8cd01ac9',
  'nikic/php-parser' => 'v4.15.2@f59bbe44bf7d96f24f3e2b4ddc21cd52c1d2adbc',
  'paragonie/random_compat' => 'v2.0.21@96c132c7f2f7bc3230723b66e89f8f150b29d5ae',
  'pear/archive_tar' => '1.4.14@4d761c5334c790e45ef3245f0864b8955c562caa',
  'pear/console_getopt' => 'v1.4.3@a41f8d3e668987609178c7c4a9fe48fecac53fa0',
  'pear/pear-core-minimal' => 'v1.10.11@68d0d32ada737153b7e93b8d3c710ebe70ac867d',
  'pear/pear_exception' => 'v1.0.2@b14fbe2ddb0b9f94f5b24cf08783d599f776fff0',
  'pelago/emogrifier' => 'v2.2.0@2472bc1c3a2dee8915ecc2256139c6100024332f',
  'phpoffice/phpspreadsheet' => '1.12.0@f79611d6dc1f6b7e8e30b738fc371b392001dbfd',
  'prestashop/blockreassurance' => 'v5.1.2@fce56506ba8a29409faf6fd4763ba7c8bc149d78',
  'prestashop/blockwishlist' => 'v2.1.2@5d84188d2c37f8df66438eaae643bd192781c208',
  'prestashop/circuit-breaker' => 'v3.0.0@8764540d470b533c9484534343688733bc363f77',
  'prestashop/contactform' => 'v4.4.1@acacee477ed164338f9a3ae64e005815b2eb60fc',
  'prestashop/dashactivity' => 'v2.1.0@21e90c2d98dc797e2ce8927e6f6e510ac60a6159',
  'prestashop/dashgoals' => 'v2.0.4@13667ef6458cdbc55b760a1d9ae75ac76bb13932',
  'prestashop/dashproducts' => 'v2.1.3@dacb40f9c3ddc5e8d14e226e8075eb2825d35907',
  'prestashop/dashtrends' => 'v2.1.1@c0ffb850abf1896ae8650522c8c8f4cff1c1dd80',
  'prestashop/decimal' => '1.4.0@188028580f4b551c126d1d723578f3ee88008e95',
  'prestashop/graphnvd3' => 'v2.0.3@3125226478226ce0cb2b3164709a0ca1450e6e62',
  'prestashop/gridhtml' => 'v2.0.3@ed319db979ddd8d41f6552d7196e6feaa11ad2c2',
  'prestashop/gsitemap' => 'v4.3.0@06763bb45c7643c92726cb3e43783183b37c3506',
  'prestashop/pagesnotfound' => 'v2.0.2@ac5b640daa39356c8ca96679cbe58e83964b41d2',
  'prestashop/productcomments' => 'v5.0.3@2a1e4bebec1d834b00728117e5e2655c7cf535a9',
  'prestashop/ps_banner' => 'v2.1.2@1eceeb26a551001ba531c95b2645aa272a9e6278',
  'prestashop/ps_categorytree' => 'v2.0.3@26a3caa0df0fc43933f50fdca829fd763badb8a0',
  'prestashop/ps_checkpayment' => 'v2.0.6@d953dac82fe7f046d96a9f752a645360060957f2',
  'prestashop/ps_contactinfo' => 'v3.3.2@4437793934d46e3d30f8b51ea6df1af3ef03dd75',
  'prestashop/ps_crossselling' => 'v2.0.2@c0c5cfe8ac4e5e2840709406d0908a7245d8304a',
  'prestashop/ps_currencyselector' => 'v2.1.1@3d19c025b7157699ee07233b9f0283fc0a123706',
  'prestashop/ps_customeraccountlinks' => 'v3.2.0@efd981fe07922cf8f847a08017b81464b90ba748',
  'prestashop/ps_customersignin' => 'v2.0.5@88016f3c1b4ba61a3f881bb295fefe4eef7edc92',
  'prestashop/ps_customtext' => 'v4.2.1@9aa81fe7ffd5dacd161cbaac30bd7086a1de3178',
  'prestashop/ps_dataprivacy' => 'v2.1.1@5d9187b6d8df31c9d90668d0ce61aec86d50ba95',
  'prestashop/ps_emailsubscription' => 'v2.7.1@6f0f08ae3b686aa2bd6e2546980ba70d6024c532',
  'prestashop/ps_facetedsearch' => 'v3.12.1@25d0a3fb8707632f865a9311dadaf5c0db307215',
  'prestashop/ps_faviconnotificationbo' => 'v2.1.3@1f077c2eb47037a3ad7ae8381684c341b7042942',
  'prestashop/ps_featuredproducts' => 'v2.1.4@4f546c142af54779a341c05e021577060d156c4b',
  'prestashop/ps_imageslider' => 'v3.1.2@c5980fe4e99ba6aa5139b4e0755540be42c52b88',
  'prestashop/ps_languageselector' => 'v2.1.3@83b165f03432292d9e142a7de944f23233f11ae0',
  'prestashop/ps_linklist' => 'v5.0.5@f27df3c4b7035557544bb3d8366024c6b175b2c8',
  'prestashop/ps_mainmenu' => 'v2.3.2@48e7ab8e6dfc871c541ffb71f7da659a077b7985',
  'prestashop/ps_searchbar' => 'v2.1.3@e02b6b2b5e6084227f3a2b7cc9272867a23843f1',
  'prestashop/ps_sharebuttons' => 'v2.1.2@781b63a4cb0ea71989c7396d0b928c7294664852',
  'prestashop/ps_shoppingcart' => 'v2.0.7@d3c9c85da712100f31894de6fe13547a5a9e0c8b',
  'prestashop/ps_socialfollow' => 'v2.3.0@5ec2d68f021fcd26fb0b2a7c124851aa19397aad',
  'prestashop/ps_themecusto' => 'v1.2.2@e421bfdc27f247c2e6361dd5eb8983e806f52459',
  'prestashop/ps_wirepayment' => 'v2.1.3@951906f13fa533bda005342bfea23844e6b719bc',
  'prestashop/statsbestcategories' => 'v2.0.1@fee7b7c679ec6cdec8fe643f8dbc4399f6008e60',
  'prestashop/statsbestcustomers' => 'v2.0.4@53568b28fea462b1cdce89bac6860a68ac100015',
  'prestashop/statsbestmanufacturers' => 'v2.0.3@77f610b556034e6828a245472ac1bdb6ffa28cad',
  'prestashop/statsbestproducts' => 'v2.0.1@0f5e03455cce6f6b0798948a67c26b413227d25a',
  'prestashop/statsbestsuppliers' => 'v2.0.2@07c685bb744b71306f72c68660092ddb5fa47d46',
  'prestashop/statsbestvouchers' => 'v2.0.1@9b9a8e1af451541e021c2af17c60e943fe594559',
  'prestashop/statscarrier' => 'v2.0.1@9f4cc5c7dbcc6f08be0aa2e7e6dc333d1ea665dc',
  'prestashop/statscatalog' => 'v2.0.3@aa66d122788be439dc4d5810fb460b36ad8f53e0',
  'prestashop/statscheckup' => 'v2.0.2@ef485adc627745c7e0fa25ad8082c6f4b96dc3cf',
  'prestashop/statsdata' => 'v2.1.1@0ea922363c3ee786518f7185c21104edc3525f6f',
  'prestashop/statsforecast' => 'v2.0.4@9f2ab9f6ca1bf35ee5f108c5f2ed346d3f8b9b73',
  'prestashop/statsnewsletter' => 'v2.0.3@cca041983fee792469f865c9709f8f1a4cd4591c',
  'prestashop/statspersonalinfos' => 'v2.0.4@f0dfeccf98e831287db9a66bee6785135fbba643',
  'prestashop/statsproduct' => 'v2.1.1@804f5a33ac45e41525613a1c87ff73928a2a4126',
  'prestashop/statsregistrations' => 'v2.0.1@efdc328afa96ffed859fb8333a3a18b9a86e1c4a',
  'prestashop/statssales' => 'v2.1.0@35a14881b522bf442ff295dff1d673c90c9e8f10',
  'prestashop/statssearch' => 'v2.0.2@10fe164304f1cf3d230f04c917d53e8859fed203',
  'prestashop/statsstock' => 'v2.0.1@5e5961af2aae926cdf9a19f1c19be1c37397f736',
  'prestashop/translationtools-bundle' => 'v4.1.1@86a356f9cd7d063643d7e027ec75077c098b9c88',
  'prestashop/welcome' => 'v6.0.9@63fb48ef0e6509371164ff35c2097185915a9ad6',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'react/promise' => 'v2.9.0@234f8fd1023c9158e2314fa9d7d0e6a83db42910',
  'sensio/distribution-bundle' => 'v5.0.25@80a38234bde8321fb92aa0b8c27978a272bb4baf',
  'sensio/framework-extra-bundle' => 'v5.4.1@585f4b3a1c54f24d1a8431c729fc8f5acca20c8a',
  'sensiolabs/security-checker' => 'v6.0.3@a576c01520d9761901f269c4934ba55448be4a54',
  'shudrum/array-finder' => 'v1.1.0@42380f01017371b7a1e8e02b0bf12cb534e454d7',
  'smarty/smarty' => 'v3.1.48@2fc443806cdcaee4441be4d0bb09f8fa56a17f2c',
  'soundasleep/html2text' => '0.5.0@cdb89f6ffa2c4cc78f8ed9ea6ee0594a9133ccad',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/http-client' => 'v4.4.26@78bd3796452b2e47d585f807dbfca945cfe34a73',
  'symfony/http-client-contracts' => 'v1.1.13@59f37624a82635962f04c98f31aed122e539a89e',
  'symfony/mime' => 'v4.4.26@1a2bdd55e13e295f63a57a5838029bf41b1969bf',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/polyfill-apcu' => 'v1.27.0@6e7f6ed2168779a2b3927e606a9768860a8bdfa0',
  'symfony/polyfill-ctype' => 'v1.27.0@5bbc823adecdae860bb64756d639ecfec17b050a',
  'symfony/polyfill-iconv' => 'v1.27.0@927013f3aac555983a5059aada98e1907d842695',
  'symfony/polyfill-intl-icu' => 'v1.27.0@a3d9148e2c363588e05abbdd4ee4f971f0a5330c',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php56' => 'v1.20.0@54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
  'symfony/polyfill-php70' => 'v1.20.0@5f03a781d984aae42cebd18e7912fa80f02ee644',
  'symfony/polyfill-php72' => 'v1.27.0@869329b1e9894268a8a61dabb69153029b7a8c97',
  'symfony/polyfill-php73' => 'v1.27.0@9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
  'symfony/service-contracts' => 'v1.1.13@afa00c500c2d6aea6e3b2f4862355f507bc5ebb4',
  'symfony/swiftmailer-bundle' => 'v3.2.6@7a83160b50a2479d37eb74ba71577380b9afe4f5',
  'symfony/symfony' => 'v3.4.49@ba0e346e3ad11de4a307fe4fa2452a3656dcc17b',
  'tecnickcom/tcpdf' => 'dev-6.4.4-patch@0e11c4ab626bcd2036c56aaffa5f67b4337aa5a7',
  'tijsverkoyen/css-to-inline-styles' => '2.2.5@4348a3a06651827a27d989ad1d13efec6bb49b19',
  'twig/twig' => 'v1.43.1@2311602f6a208715252febe682fa7c38e56a3373',
  'willdurand/jsonp-callback-validator' => 'v1.1.0@1a7d388bb521959e612ef50c5c7b1691b097e909',
  'prestashop/prestashop' => '1.0.0+no-version-set@',
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
