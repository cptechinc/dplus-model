<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f927a38659065c5352eea03f725feb9
{
    public static $classMap = array (
        'Base\\SoDetHist' => __DIR__ . '/../..' . '/src/Model/Base/SoDetHist.php',
        'Base\\SoDetHistQuery' => __DIR__ . '/../..' . '/src/Model/Base/SoDetHistQuery.php',
        'Base\\SoDetail' => __DIR__ . '/../..' . '/src/Model/Base/SoDetail.php',
        'Base\\SoDetailQuery' => __DIR__ . '/../..' . '/src/Model/Base/SoDetailQuery.php',
        'Base\\SoHeadHist' => __DIR__ . '/../..' . '/src/Model/Base/SoHeadHist.php',
        'Base\\SoHeadHistQuery' => __DIR__ . '/../..' . '/src/Model/Base/SoHeadHistQuery.php',
        'Base\\SoHeader' => __DIR__ . '/../..' . '/src/Model/Base/SoHeader.php',
        'Base\\SoHeaderQuery' => __DIR__ . '/../..' . '/src/Model/Base/SoHeaderQuery.php',
        'Dplus\\Model\\MagicMethodTraits' => __DIR__ . '/../..' . '/src/MagicMethods.trait.php',
        'Dplus\\Model\\ThrowErrorTrait' => __DIR__ . '/../..' . '/src/ThrowError.trait.php',
        'Map\\SoDetHistTableMap' => __DIR__ . '/../..' . '/src/Model/Map/SoDetHistTableMap.php',
        'Map\\SoDetailTableMap' => __DIR__ . '/../..' . '/src/Model/Map/SoDetailTableMap.php',
        'Map\\SoHeaderTableMap' => __DIR__ . '/../..' . '/src/Model/Map/SoHeaderTableMap.php',
        'SoDetHist' => __DIR__ . '/../..' . '/src/Model/SoDetHist.php',
        'SoDetHistQuery' => __DIR__ . '/../..' . '/src/Model/SoDetHistQuery.php',
        'SoDetail' => __DIR__ . '/../..' . '/src/Model/SoDetail.php',
        'SoDetailQuery' => __DIR__ . '/../..' . '/src/Model/SoDetailQuery.php',
        'SoHeadHist' => __DIR__ . '/../..' . '/src/Model/SoHeadHist.php',
        'SoHeadHistQuery' => __DIR__ . '/../..' . '/src/Model/SoHeadHistQuery.php',
        'SoHeader' => __DIR__ . '/../..' . '/src/Model/SoHeader.php',
        'SoHeaderQuery' => __DIR__ . '/../..' . '/src/Model/SoHeaderQuery.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3f927a38659065c5352eea03f725feb9::$classMap;

        }, null, ClassLoader::class);
    }
}
