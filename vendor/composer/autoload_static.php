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
        'SalesHistoryDetail' => __DIR__ . '/../..' . '/src/Model/SalesHistoryDetail.php',
        'SalesHistoryDetailQuery' => __DIR__ . '/../..' . '/src/Model/SalesHistoryDetailQuery.php',
        'SalesOrder' => __DIR__ . '/../..' . '/src/Model/SalesOrder.php',
        'SalesOrderDetail' => __DIR__ . '/../..' . '/src/Model/SalesOrderDetail.php',
        'SalesOrderDetailQuery' => __DIR__ . '/../..' . '/src/Model/SalesOrderDetailQuery.php',
        'SalesOrderQuery' => __DIR__ . '/../..' . '/src/Model/SalesOrderQuery.php',
        'SoHeadHist' => __DIR__ . '/../..' . '/src/Model/SoHeadHist.php',
        'SoHeadHistQuery' => __DIR__ . '/../..' . '/src/Model/SoHeadHistQuery.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3f927a38659065c5352eea03f725feb9::$classMap;

        }, null, ClassLoader::class);
    }
}
