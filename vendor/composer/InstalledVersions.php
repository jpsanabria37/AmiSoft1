<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'laravel/laravel',
  ),
  'versions' => 
  array (
    'barryvdh/laravel-dompdf' => 
    array (
      'pretty_version' => 'v0.8.2',
      'version' => '0.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7dcdecfa125c174d0abe723603633dc2756ea3af',
    ),
    'cordoval/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dnoegel/php-xdg-base-dir' => 
    array (
      'pretty_version' => 'v0.1.1',
      'version' => '0.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '1.4.4',
      'version' => '1.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '10dcfce151b967d20fde1b34ae6640712c3891bc',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c268e882d4dbdd85e36e4ad69e02dc284f89d229',
    ),
    'dompdf/dompdf' => 
    array (
      'pretty_version' => 'v0.8.6',
      'version' => '0.8.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'db91d81866c69a42dad1d2926f61515a1e3f42c5',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f88dcf4b14af14a98ad96b14b2b317969eab6715',
    ),
    'erusev/parsedown' => 
    array (
      'pretty_version' => '1.7.4',
      'version' => '1.7.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
    ),
    'fideloper/proxy' => 
    array (
      'pretty_version' => '3.3.4',
      'version' => '3.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '9cdf6f118af58d89764249bbcc7bb260c132924f',
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '2.14.5',
      'version' => '2.14.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a63e5e8f26ebbebf8ed3c5c691637325512eb0dc',
    ),
    'fzaninotto/faker' => 
    array (
      'pretty_version' => 'v1.9.2',
      'version' => '1.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/bus' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.5.50',
      ),
    ),
    'jakub-onderka/php-console-color' => 
    array (
      'pretty_version' => 'v0.2',
      'version' => '0.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd5deaecff52a0d61ccb613bb3804088da0307191',
    ),
    'jakub-onderka/php-console-highlighter' => 
    array (
      'pretty_version' => 'v0.4',
      'version' => '0.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9f7a229a69d52506914b4bc61bfdb199d90c5547',
    ),
    'kodova/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'kylekatarnls/update-helper' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '429be50660ed8a196e0798e5939760f168ec8ce9',
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v5.5.50',
      'version' => '5.5.50.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c62385a23c639742b3b74a4a78640da25e6b782b',
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v1.0.10',
      'version' => '1.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad571aacbac1539c30d480908f9d0c9614eaf1a7',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.1.9',
      'version' => '1.1.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '094defdb4a7001845300334e7c1ee2335925ef99',
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '1.3.5',
      'version' => '1.3.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '472fa8ca4e55483d55ee1e73c963718c4393791d',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '1.27.1',
      'version' => '1.27.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '904713c5929655dc9b97288b69cfeedad610c9a1',
    ),
    'mtdowling/cron-expression' => 
    array (
      'pretty_version' => 'v1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9be552eebcc1ceec9776378f7dcc085246cacca6',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '14daed4296fae74d9e3201d2c4925d1acb7aa614',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '1.39.1',
      'version' => '1.39.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4be0c005164249208ce1b5ca633cd57bdd42ff33',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.14.0',
      'version' => '4.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '34bea19b6e03d8153165d8f30bba4c3be86184c1',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.100',
      'version' => '9.99.100.0',
      'aliases' => 
      array (
      ),
      'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2df402786ab5368a0169091f61a7c1e0eb6852d0',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a70c0ced4be299a63d32fa96d9281d03e94041df',
    ),
    'phenx/php-font-lib' => 
    array (
      'pretty_version' => '0.5.4',
      'version' => '0.5.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dd448ad1ce34c63d09baccd05415e361300c35b4',
    ),
    'phenx/php-svg-lib' => 
    array (
      'pretty_version' => '0.3.4',
      'version' => '0.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f627771eb854aa7f45f80add0f23c6c4d67ea0f2',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.6.1',
      'version' => '1.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '77a32518733312af16a44300404e945338981de3',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => 'v1.10.3',
      'version' => '1.10.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '451c3cd1418cf640de218914901e51b064abb093',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c89677919c5dd6d3b3852f230a663118762218ac',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '1.4.5',
      'version' => '1.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '730b01bc3e867237eaac355e06a36b85dd93a8b4',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '1.0.9',
      'version' => '1.0.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '3dcf38ca72b158baf0bc245e9184d3fdffa9c46f',
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '791198a2c6254db10131eecfe8c06670700904db',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '6.5.14',
      'version' => '6.5.14.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bac23fe7ff13dbdb461481f706f0e9fe746334b7',
    ),
    'phpunit/phpunit-mock-objects' => 
    array (
      'pretty_version' => '5.0.10',
      'version' => '5.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd1cf05c553ecfec36b170070573e540b67d3f1f',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '513e0666f7216c7459170d56df27dfcefe1689ea',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
        1 => '1.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.9.12',
      'version' => '0.9.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '90da7f37568aee36b116a030c5f99c915267edd4',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '3.9.6',
      'version' => '3.9.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ffa80ab953edd85d5b6c004f96181a538aad35a3',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '3.9.6',
      ),
    ),
    'sabberworm/php-css-parser' => 
    array (
      'pretty_version' => '8.4.0',
      'version' => '8.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e41d2140031d533348b2192a83f02d8dd8a71d30',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1de8cd5c010cb153fcd68b8d0f64606f523f7619',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '2.1.3',
      'version' => '2.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '34369daee48eafb2651bea869b4b15d75ccc35f9',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '347c1d8b49c5c3ee30c7040ea6fc446790e6bddd',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd0871b3975fb7fc44d11314fd1ee20925fce4f5',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '3.1.4',
      'version' => '3.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '0c32ea2e40dbf59de29f3b49bf375176ce7dd8db',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '3.0.4',
      'version' => '3.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '367dcba38d6e1977be014dc4b22f47a484dac7fb',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ce990bb21759f94aeafd30209e8cfcdfa8bc3f52',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8a5d5072dca8f48460fce2f4131fcc495eec654c',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a10b1da6fc93080c180bba7219b5ff5b7518fe81',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b0a190285cd95cb019237851205b8140ef6e368e',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ab42889de57fdfcfcc0759ab102e2fd4ea72dcae',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v4.4.42',
      'version' => '4.4.42.0',
      'aliases' => 
      array (
      ),
      'reference' => '708e761740c16b02c86e3f0c932018a06b895d40',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v1.1.12',
      'version' => '1.1.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d5cd762abaa6b2a4169d3e77610193a7157129e',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b6b6ad3db3edb1b4b1c1896b1975fb684994de6e',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b9885fcce6fe494201da4f70a9309770e9d13dc8',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v3.4.49',
      'version' => '3.4.49.0',
      'aliases' => 
      array (
      ),
      'reference' => '5aa72405f5bd5583c36ed6e756acb17d3f98ac40',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '143f1881e655bebca1312722af8068de235ae5dc',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '219aa369ceff116e673852dce47c3a41794c14bd',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
    ),
    'symfony/polyfill-php56' => 
    array (
      'pretty_version' => 'v1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
    ),
    'symfony/polyfill-php70' => 
    array (
      'pretty_version' => 'v1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f03a781d984aae42cebd18e7912fa80f02ee644',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bf44a9fd41feaac72b074de600314a93e2ae78e2',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cfa0ae98841b9e461207c13ab093d76b0fa7bace',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b8648cf1d5af12a44a51d07ef9bf980921f15fca',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => '3e522ac69cadffd8131cc2b22157fa7662331a6c',
    ),
    'symfony/thanks' => 
    array (
      'pretty_version' => 'v1.2.10',
      'version' => '1.2.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e9c4709560296acbd4fe9e12b8d57a925aa7eae8',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v4.3.11',
      'version' => '4.3.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '46e462be71935ae15eab531e4d491d801857f24c',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v1.1.12',
      'version' => '1.1.12.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c04dc8a7873a2a9196f038e99342df46b6661a29',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => '0719f6cf4633a38b2c1585140998579ce23b4b7d',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
    ),
    'tightenco/collect' => 
    array (
      'replaced' => 
      array (
        0 => '<5.5.33',
      ),
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.4',
      'version' => '2.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'da444caae6aca7a19c0c140f68c6182e337d5b1c',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v2.6.9',
      'version' => '2.6.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '2e93cc98e2e8e869f8d9cfa61bb3a99ba4fc4141',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
