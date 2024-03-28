<?php

// ecs.php

declare(strict_types=1);

use PhpCsFixer\Fixer\Comment\CommentToPhpdocFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig) {
    $ecsConfig->rule(PhpdocLineSpanFixer::class);
    $ecsConfig->rule(PhpdocTypesFixer::class);
    $ecsConfig->rule(PhpdocIndentFixer::class);
    $ecsConfig->rule(CommentToPhpdocFixer::class);

    $ecsConfig->sets([
        SetList::PSR_12,
        SetList::CLEAN_CODE,
        SetList::COMMON,
        SetList::PHPUNIT,
    ]);

    $ecsConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/ecs.php',
        __DIR__ . '/rector.php',
    ]);

    $ecsConfig->skip([
        PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class => null,
        __DIR__ . '/vendor',
        __DIR__ . '/*/vendor/*',
        __DIR__ . '/*/node_modules/*',
        __DIR__ . '/node_modules',
        '*/_ide_helper.php',
        '*/cache/packages.php',
        '*/cache/services.php',
        '*/storage/*',
    ]);

    //$ecsConfig->fileExtensions(['php']);
};
