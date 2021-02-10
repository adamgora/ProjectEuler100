<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(ArraySyntaxFixer::class)
        ->call('configure', [[
            'syntax' => 'short',
        ]]);
    $services->set(PhpCsFixer\Fixer\Alias\EregToPregFixer::class);
    $services->set(PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer::class);
    $services->set(PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
    $services->set(PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer::class)
        ->call('configure', [[
            'use' => 'echo'
        ]]);
    $services->set(PhpCsFixer\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixer::class);
    $services->set(PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer::class);
    $services->set(PhpCsFixer\Fixer\ArrayNotation\NoTrailingCommaInSinglelineArrayFixer::class);
    $services->set(PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer::class);
    $services->set(PhpCsFixer\Fixer\ArrayNotation\TrailingCommaInMultilineArrayFixer::class);
    $services->set(PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer::class);
    $services->set(PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer::class);
    $services->set(PhpCsFixer\Fixer\Basic\BracesFixer::class)
        ->call('configure', [[
            'allow_single_line_closure' => true
        ]]);
    $services->set(PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $services->set(PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer::class);
    $services->set(PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class);
    $services->set(PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $services->set(PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer::class);
    $services->set(PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer::class);
    $services->set(PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class);
    $services->set(PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer::class);
    $services->set(PhpCsFixer\Fixer\CastNotation\ModernizeTypesCastingFixer::class);
    $services->set(PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class);
    $services->set(PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $services->set(PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class)
        ->call('configure', [[
            'singleItemSingleLine' => true,
            'multiLineExtendsEachSingleLine' => true
        ]]);
    $services->set(PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class);
    $services->set(PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class);
    $services->set(PhpCsFixer\Fixer\ClassNotation\NoNullPropertyInitializationFixer::class);
    $services->set(PhpCsFixer\Fixer\ClassNotation\NoPhp4ConstructorFixer::class);
    $services->set(PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer::class);
    $services->set(PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer::class);
    $services->set(PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer::class);
    $services->set(PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class);
    $services->set(PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
    $services->set(PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class)
        ->call('configure', [[
            'comment_types' => ['hash'],
        ]]);
    $services->set(PhpCsFixer\Fixer\Comment\NoEmptyCommentFixer::class);
    $services->set(PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $services->set(PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $services->set(PhpCsFixer\Fixer\ControlStructure\IncludeFixer::class);
    $services->set(PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer::class);
    $services->set(PhpCsFixer\Fixer\ControlStructure\NoSuperfluousElseifFixer::class);
    $services->set(PhpCsFixer\Fixer\ControlStructure\NoTrailingCommaInListCallFixer::class);
    $services->set(PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer::class);
    $services->set(PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer::class);
    $services->set(PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer::class);
    $services->set(PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $services->set(PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $services->set(PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class);
    $services->set(PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer::class);
    $services->set(PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class);
    $services->set(PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $services->set(PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class);
    $services->set(PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer::class);
    $services->set(PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class);
    $services->set(PhpCsFixer\Fixer\Import\OrderedImportsFixer::class);
    $services->set(PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $services->set(PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $services->set(PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer::class);
    $services->set(PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveUnsetsFixer::class);
    $services->set(PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class);
    $services->set(PhpCsFixer\Fixer\LanguageConstruct\DirConstantFixer::class);
    $services->set(PhpCsFixer\Fixer\LanguageConstruct\FunctionToConstantFixer::class);
    $services->set(PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer::class);
    $services->set(PhpCsFixer\Fixer\ListNotation\ListSyntaxFixer::class)
        ->call('configure', [[
            'syntax' => 'short',
        ]]);
    $services->set(PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $services->set(PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer::class);
    $services->set(PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer::class);
    $services->set(PhpCsFixer\Fixer\Naming\NoHomoglyphNamesFixer::class);
    $services->set(PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class)
        ->call('configure', [[
            'align_double_arrow' => false,
            'align_equals' => false,
        ]]);
    $services->set(PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class)
        ->call('configure', [[
            'spacing' => 'one',
        ]]);
    $services->set(PhpCsFixer\Fixer\Operator\NewWithBracesFixer::class);
    $services->set(PhpCsFixer\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixer::class);
    $services->set(PhpCsFixer\Fixer\Operator\IncrementStyleFixer::class);
    $services->set(PhpCsFixer\Fixer\Operator\StandardizeNotEqualsFixer::class);
    $services->set(PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class);
    $services->set(PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer::class);
    $services->set(PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\NoBlankLinesAfterPhpdocFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocInlineTagNormalizerFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocTagRenameFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocNoAccessFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocNoEmptyReturnFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocNoPackageFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocReturnSelfReferenceFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer::class);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer::class)
        ->call('configure', [[
            'null_adjustment' => 'always_last',
            'sort_algorithm' => 'none',
        ]]);
    $services->set(PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer::class);
    $services->set(PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class);
    $services->set(PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $services->set(PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $services->set(PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class);
    $services->set(PhpCsFixer\Fixer\PhpUnit\PhpUnitFqcnAnnotationFixer::class);
    $services->set(PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class);
    $services->set(PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer::class);
    $services->set(PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer::class);
    $services->set(PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
    $services->set(PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class);
    $services->set(PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer::class);
    $services->set(PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $services->set(PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $services->set(PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class)
        ->call('configure', [[
            'tokens' => [
                'break',
                'case',
                'continue',
                'curly_brace_block',
                'default',
                'extra',
                'parenthesis_brace_block',
                'return',
                'square_brace_block',
                'switch',
                'throw',
                'use'
            ]
        ]]);
    $services->set(PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer::class);
    $services->set(PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class);
    $services->set(PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $services->set(PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class);
    $services->set(PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);

    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::PATHS, [
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    $parameters->set('skip', [PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class => ['*Spec.php']]);
};
