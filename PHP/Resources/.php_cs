<?php
declare(strict_types=1);
$finder = PhpCsFixer\Finder::create()
                           ->exclude('vendor')
                           ->exclude('var')
                           ->in(__DIR__);

return PhpCsFixer\Config::create()
                        ->setRiskyAllowed(true)
                        ->setRules(
                            [
                                '@Symfony' => true,
                                '@Symfony:risky' => true,
                                'array_syntax' => [
                                    'syntax' => 'short',
                                ],
                                'combine_consecutive_unsets' => true,
                                'declare_strict_types' => true,
                                'dir_constant' => true,
                                'linebreak_after_opening_tag' => true,
                                'mb_str_functions' => true,
                                'modernize_types_casting' => true,
                                'no_multiline_whitespace_before_semicolons' => true,
                                'no_short_echo_tag' => true,
                                'no_useless_else' => true,
                                'ordered_class_elements' => true,
                                'ordered_imports' => true,
                                'phpdoc_order' => true,
                                'pow_to_exponentiation' => true,
                                'protected_to_private' => true,
                                'semicolon_after_instruction' => true,
                                'strict_comparison' => true, // RISKY !
                                'strict_param' => true, // RISKY !
                            ]
                        )
                        ->setFinder($finder);
