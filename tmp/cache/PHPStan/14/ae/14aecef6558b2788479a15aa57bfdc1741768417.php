<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'phar:///home/kieron/Projects/thumper/vendor/phpstan/phpstan/phpstan.phar/vendor/ondrejmirtes/better-reflection/src/SourceLocator/SourceStubber/../../../../../jetbrains/phpstorm-stubs/standard/standard_2.stub-1637244537',
   'data' => 
  array (
    '67313fcc2b40b229f6ca2fad1a924b9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Query language and locale information
 * @link https://php.net/manual/en/function.nl-langinfo.php
 * @param int $item <p>
 * item may be an integer value of the element or the
 * constant name of the element. The following is a list of constant names
 * for item that may be used and their description.
 * Some of these constants may not be defined or hold no value for certain
 * locales.</p>
 * nl_langinfo Constants
 * <table>
 * <tr valign="top">
 * <td>Constant</td>
 * <td>Description</td>
 * </tr>
 * <tr colspan="2" valign="top" bgcolor="silver">
 * <td >LC_TIME Category Constants</td>
 * </tr>
 * <tr valign="top">
 * <td>ABDAY_(1-7)</td>
 * <td>Abbreviated name of n-th day of the week.</td>
 * </tr>
 * <tr valign="top">
 * <td>DAY_(1-7)</td>
 * <td>Name of the n-th day of the week (DAY_1 = Sunday).</td>
 * </tr>
 * <tr valign="top">
 * <td>ABMON_(1-12)</td>
 * <td>Abbreviated name of the n-th month of the year.</td>
 * </tr>
 * <tr valign="top">
 * <td>MON_(1-12)</td>
 * <td>Name of the n-th month of the year.</td>
 * </tr>
 * <tr valign="top">
 * <td>AM_STR</td>
 * <td>String for Ante meridian.</td>
 * </tr>
 * <tr valign="top">
 * <td>PM_STR</td>
 * <td>String for Post meridian.</td>
 * </tr>
 * <tr valign="top">
 * <td>D_T_FMT</td>
 * <td>String that can be used as the format string for strftime to represent time and date.</td>
 * </tr>
 * <tr valign="top">
 * <td>D_FMT</td>
 * <td>String that can be used as the format string for strftime to represent date.</td>
 * </tr>
 * <tr valign="top">
 * <td>T_FMT</td>
 * <td>String that can be used as the format string for strftime to represent time.</td>
 * </tr>
 * <tr valign="top">
 * <td>T_FMT_AMPM</td>
 * <td>String that can be used as the format string for strftime to represent time in 12-hour format with ante/post meridian.</td>
 * </tr>
 * <tr valign="top">
 * <td>ERA</td>
 * <td>Alternate era.</td>
 * </tr>
 * <tr valign="top">
 * <td>ERA_YEAR</td>
 * <td>Year in alternate era format.</td>
 * </tr>
 * <tr valign="top">
 * <td>ERA_D_T_FMT</td>
 * <td>Date and time in alternate era format (string can be used in strftime).</td>
 * </tr>
 * <tr valign="top">
 * <td>ERA_D_FMT</td>
 * <td>Date in alternate era format (string can be used in strftime).</td>
 * </tr>
 * <tr valign="top">
 * <td>ERA_T_FMT</td>
 * <td>Time in alternate era format (string can be used in strftime).</td>
 * </tr>
 * <tr colspan="2" valign="top" bgcolor="silver">
 * <td>LC_MONETARY Category Constants</td>
 * </tr>
 * <tr valign="top">
 * <td>INT_CURR_SYMBOL</td>
 * <td>International currency symbol.</td>
 * </tr>
 * <tr valign="top">
 * <td>CURRENCY_SYMBOL</td>
 * <td>Local currency symbol.</td>
 * </tr>
 * <tr valign="top">
 * <td>CRNCYSTR</td>
 * <td>Same value as CURRENCY_SYMBOL.</td>
 * </tr>
 * <tr valign="top">
 * <td>MON_DECIMAL_POINT</td>
 * <td>Decimal point character.</td>
 * </tr>
 * <tr valign="top">
 * <td>MON_THOUSANDS_SEP</td>
 * <td>Thousands separator (groups of three digits).</td>
 * </tr>
 * <tr valign="top">
 * <td>MON_GROUPING</td>
 * <td>Like "grouping" element.</td>
 * </tr>
 * <tr valign="top">
 * <td>POSITIVE_SIGN</td>
 * <td>Sign for positive values.</td>
 * </tr>
 * <tr valign="top">
 * <td>NEGATIVE_SIGN</td>
 * <td>Sign for negative values.</td>
 * </tr>
 * <tr valign="top">
 * <td>INT_FRAC_DIGITS</td>
 * <td>International fractional digits.</td>
 * </tr>
 * <tr valign="top">
 * <td>FRAC_DIGITS</td>
 * <td>Local fractional digits.</td>
 * </tr>
 * <tr valign="top">
 * <td>P_CS_PRECEDES</td>
 * <td>Returns 1 if CURRENCY_SYMBOL precedes a positive value.</td>
 * </tr>
 * <tr valign="top">
 * <td>P_SEP_BY_SPACE</td>
 * <td>Returns 1 if a space separates CURRENCY_SYMBOL from a positive value.</td>
 * </tr>
 * <tr valign="top">
 * <td>N_CS_PRECEDES</td>
 * <td>Returns 1 if CURRENCY_SYMBOL precedes a negative value.</td>
 * </tr>
 * <tr valign="top">
 * <td>N_SEP_BY_SPACE</td>
 * <td>Returns 1 if a space separates CURRENCY_SYMBOL from a negative value.</td>
 * </tr>
 * <tr valign="top">
 * <td>P_SIGN_POSN</td>
 * <td>Returns 0 if parentheses surround the quantity and CURRENCY_SYMBOL.</td>
 * </tr>
 * </table>
 * @return string|false the element as a string, or false if item
 * is not valid.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'nl_langinfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5952ef958c3aa74605f977021162487f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Calculate the soundex key of a string
 * @link https://php.net/manual/en/function.soundex.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @return string the soundex key as a string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'soundex',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0ca38072bd04e0327439afdd3c0ea2f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Calculate Levenshtein distance between two strings
 * @link https://php.net/manual/en/function.levenshtein.php
 * Note: In its simplest form the function will take only the two strings
 * as parameter and will calculate just the number of insert, replace and
 * delete operations needed to transform str1 into str2.
 * Note: A second variant will take three additional parameters that define
 * the cost of insert, replace and delete operations. This is more general
 * and adaptive than variant one, but not as efficient.
 * @param string $string1 <p>
 * One of the strings being evaluated for Levenshtein distance.
 * </p>
 * @param string $string2 <p>
 * One of the strings being evaluated for Levenshtein distance.
 * </p>
 * @param int $insertion_cost [optional] <p>
 * Defines the cost of insertion.
 * </p>
 * @param int $replacement_cost [optional] <p>
 * Defines the cost of replacement.
 * </p>
 * @param int $deletion_cost [optional] <p>
 * Defines the cost of deletion.
 * </p>
 * @return int This function returns the Levenshtein-Distance between the
 * two argument strings or -1, if one of the argument strings
 * is longer than the limit of 255 characters.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'levenshtein',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a0502ac49a00e6f1eb8e3b382e0a2779' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generate a single-byte string from a number
 * @link https://php.net/manual/en/function.chr.php
 * @param int $codepoint <p>
 * The ascii code.
 * </p>
 * @return string the specified character.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'chr',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'aea02724aa48d62ae56453740c827cde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Convert the first byte of a string to a value between 0 and 255
 * @link https://php.net/manual/en/function.ord.php
 * @param string $character <p>
 * A character.
 * </p>
 * @return int the ASCII value as an integer.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd0fab5e05dabdc73f64cccdd0510b424' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Parses the string into variables
 * @link https://php.net/manual/en/function.parse-str.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @param array &$result <p>
 * If the second parameter arr is present,
 * variables are stored in this variable as array elements instead.<br/>
 * Since 7.2.0 this parameter is not optional.
 * </p>
 * @return void
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'parse_str',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2e3b34c33f67745f7b5a0ae86a8e04f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Parse a CSV string into an array
 * @link https://php.net/manual/en/function.str-getcsv.php
 * @param string $string <p>
 * The string to parse.
 * </p>
 * @param string $separator [optional] <p>
 * Set the field delimiter (one character only).
 * </p>
 * @param string $enclosure [optional] <p>
 * Set the field enclosure character (one character only).
 * </p>
 * @param string $escape [optional] <p>
 * Set the escape character (one character only).
 * Defaults as a backslash (\\)
 * </p>
 * @return array an indexed array containing the fields read.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'str_getcsv',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7b383809462f5445c1d54be3a44f0e7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Pad a string to a certain length with another string
 * @link https://php.net/manual/en/function.str-pad.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @param int $length <p>
 * If the value of pad_length is negative,
 * less than, or equal to the length of the input string, no padding
 * takes place.
 * </p>
 * @param string $pad_string [optional] <p>
 * The pad_string may be truncated if the
 * required number of padding characters can\'t be evenly divided by the
 * pad_string\'s length.
 * </p>
 * @param int $pad_type [optional] <p>
 * Optional argument pad_type can be
 * STR_PAD_RIGHT, STR_PAD_LEFT,
 * or STR_PAD_BOTH. If
 * pad_type is not specified it is assumed to be
 * STR_PAD_RIGHT.
 * </p>
 * @return string the padded string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'str_pad',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b7fd0fb9e24cc5fed3ae82bf3572b8b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Alias:
 * {@see rtrim}
 * @param string $string The input string.
 * @param string $characters [optional]
 * @return string the modified string.
 * @link https://php.net/manual/en/function.chop.php
 * @see rtrim()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'chop',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0d8689ae282b32e35463948b85a71ff8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Alias:
 * {@see strstr}
 * @link https://php.net/manual/en/function.strchr.php
 * Note: This function is case-sensitive. For case-insensitive searches, use stristr().
 * Note: If you only want to determine if a particular needle occurs within haystack,
 * use the faster and less memory intensive function strpos() instead.
 *
 * @param string $haystack The input string.
 * @param string $needle If needle is not a string, it is converted to an integer and applied as the ordinal value of a character.
 * @param bool $before_needle [optional] If TRUE, strstr() returns the part of the haystack before the first occurrence of the needle (excluding the needle).
 * @return string|false Returns the portion of string, or FALSE if needle is not found.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'strchr',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4b0c7aba374dd30bb18a346e57b314e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return a formatted string
 * @link https://php.net/manual/en/function.sprintf.php
 * @param string $format <p>
 * The format string is composed of zero or more directives:
 * ordinary characters (excluding %) that are
 * copied directly to the result, and conversion
 * specifications, each of which results in fetching its
 * own parameter. This applies to both sprintf
 * and printf.
 * </p>
 * <p>
 * Each conversion specification consists of a percent sign
 * (%), followed by one or more of these
 * elements, in order:
 * An optional sign specifier that forces a sign
 * (- or +) to be used on a number. By default, only the - sign is used
 * on a number if it\'s negative. This specifier forces positive numbers
 * to have the + sign attached as well, and was added in PHP 4.3.0.</p>
 * @param string|int|float ...$values [optional] <p>
 * </p>
 * @return string a string produced according to the formatting string
 * format.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'sprintf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '59e2e11977abda233581034a96f885a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Output a formatted string
 * @link https://php.net/manual/en/function.printf.php
 * @param string $format <p>
 * See sprintf for a description of
 * format.
 * </p>
 * @param string|int|float ...$values [optional] <p>
 * </p>
 * @return int the length of the outputted string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'printf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2532bbb08ec6cbb221cf052d1d296dcd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Output a formatted string
 * @link https://php.net/manual/en/function.vprintf.php
 * @param string $format <p>
 * See sprintf for a description of
 * format.
 * </p>
 * @param array $values <p>
 * </p>
 * @return int the length of the outputted string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'vprintf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e532b0bfeff18d3789781ddd6bb4d9b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return a formatted string
 * @link https://php.net/manual/en/function.vsprintf.php
 * @param string $format <p>
 * See sprintf for a description of
 * format.
 * </p>
 * @param array $values <p>
 * </p>
 * @return string Return array values as a formatted string according to
 * format (which is described in the documentation
 * for sprintf).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'vsprintf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1136c7cac3c87ce92baa6e37462a82e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Write a formatted string to a stream
 * @link https://php.net/manual/en/function.fprintf.php
 * @param resource $stream &fs.file.pointer;
 * @param string $format <p>
 * See sprintf for a description of
 * format.
 * </p>
 * @param mixed ...$values [optional] <p>
 * </p>
 * @return int the length of the string written.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'fprintf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '01f2783e22c0fb4526325d68e22237e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Write a formatted string to a stream
 * @link https://php.net/manual/en/function.vfprintf.php
 * @param resource $stream <p>
 * </p>
 * @param string $format <p>
 * See sprintf for a description of
 * format.
 * </p>
 * @param array $values <p>
 * </p>
 * @return int the length of the outputted string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'vfprintf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '807de9b63caf953f2f2375fdfd698a97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Parses input from a string according to a format
 * @link https://php.net/manual/en/function.sscanf.php
 * @param string $string <p>
 * The input string being parsed.
 * </p>
 * @param string $format <p>
 * The interpreted format for str, which is
 * described in the documentation for sprintf with
 * following differences:
 * Function is not locale-aware.
 * F, g, G and
 * b are not supported.
 * D stands for decimal number.
 * i stands for integer with base detection.
 * n stands for number of characters processed so far.
 * </p>
 * @param mixed &...$vars [optional]
 * @return array|int|null If only
 * two parameters were passed to this function, the values parsed
 * will be returned as an array. Otherwise, if optional parameters are passed,
 * the function will return the number of assigned values. The optional
 * parameters must be passed by reference.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'sscanf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fd418fb5f3d482f40389fc08ca300f1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Parses input from a file according to a format
 * @link https://php.net/manual/en/function.fscanf.php
 * @param resource $stream &fs.file.pointer;
 * @param string $format <p>
 * The specified format as described in the
 * sprintf documentation.
 * </p>
 * @param mixed &...$vars [optional]
 * @return array|int|false|null If only two parameters were passed to this function, the values parsed will be
 * returned as an array. Otherwise, if optional parameters are passed, the
 * function will return the number of assigned values. The optional
 * parameters must be passed by reference.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'fscanf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd5cddc236b39d70e7b491bfc40b0b22a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Parse a URL and return its components
 * @link https://php.net/manual/en/function.parse-url.php
 * @param string $url <p>
 * The URL to parse. Invalid characters are replaced by
 * _.
 * </p>
 * @param int $component [optional] <p>
 * Specify one of PHP_URL_SCHEME,
 * PHP_URL_HOST, PHP_URL_PORT,
 * PHP_URL_USER, PHP_URL_PASS,
 * PHP_URL_PATH, PHP_URL_QUERY
 * or PHP_URL_FRAGMENT to retrieve just a specific
 * URL component as a string.
 * </p>
 * @return array|string|int|null|false On seriously malformed URLs, parse_url() may return FALSE.
 * If the component parameter is omitted, an associative array is returned.
 * At least one element will be present within the array. Potential keys within this array are:
 * scheme - e.g. http
 * host
 * port
 * user
 * pass
 * path
 * query - after the question mark ?
 * fragment - after the hashmark #
 * </p>
 * <p>
 * If the component parameter is specified a
 * string is returned instead of an array.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'parse_url',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '77894678679842825e02ec201b059dd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * URL-encodes string
 * @link https://php.net/manual/en/function.urlencode.php
 * @param string $string <p>
 * The string to be encoded.
 * </p>
 * @return string a string in which all non-alphanumeric characters except
 * -_. have been replaced with a percent
 * (%) sign followed by two hex digits and spaces encoded
 * as plus (+) signs. It is encoded the same way that the
 * posted data from a WWW form is encoded, that is the same way as in
 * application/x-www-form-urlencoded media type. This
 * differs from the RFC 3986 encoding (see
 * rawurlencode) in that for historical reasons, spaces
 * are encoded as plus (+) signs.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'urlencode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '295ec4cb74522606d3c48a1330a3942e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Decodes URL-encoded string
 * @link https://php.net/manual/en/function.urldecode.php
 * @param string $string <p>
 * The string to be decoded.
 * </p>
 * @return string the decoded string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'urldecode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3ba8a3db511cb798b5e7ae8b875f417e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * URL-encode according to RFC 3986
 * @link https://php.net/manual/en/function.rawurlencode.php
 * @param string $string <p>
 * The URL to be encoded.
 * </p>
 * @return string a string in which all non-alphanumeric characters except
 * -_. have been replaced with a percent
 * (%) sign followed by two hex digits. This is the
 * encoding described in RFC 1738 for
 * protecting literal characters from being interpreted as special URL
 * delimiters, and for protecting URLs from being mangled by transmission
 * media with character conversions (like some email systems).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'rawurlencode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6fe7f1f324c3b7565fa3fc1e1a3f1af5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Decode URL-encoded strings
 * @link https://php.net/manual/en/function.rawurldecode.php
 * @param string $string <p>
 * The URL to be decoded.
 * </p>
 * @return string the decoded URL, as a string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'rawurldecode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8fbb2ff07b91d16d17da213eb4f8ff6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generate URL-encoded query string
 * @link https://php.net/manual/en/function.http-build-query.php
 * @param object|array $data <p>
 * May be an array or object containing properties.
 * </p>
 * <p>
 * If query_data is an array, it may be a simple one-dimensional structure,
 * or an array of arrays (which in turn may contain other arrays).
 * </p>
 * <p>
 * If query_data is an object, then only public properties will be incorporated into the result.
 * </p>
 * @param string $numeric_prefix [optional] <p>
 * If numeric indices are used in the base array and this parameter is
 * provided, it will be prepended to the numeric index for elements in
 * the base array only.
 * </p>
 * <p>
 * This is meant to allow for legal variable names when the data is
 * decoded by PHP or another CGI application later on.
 * </p>
 * @param string|null $arg_separator [optional] <p>
 * arg_separator.output
 * is used to separate arguments, unless this parameter is specified,
 * and is then used.
 * </p>
 * @param int $encoding_type By default, PHP_QUERY_RFC1738.
 *  <p>If enc_type is PHP_QUERY_RFC1738, then encoding is performed per » RFC 1738 and the application/x-www-form-urlencoded media type,
 *  which implies that spaces are encoded as plus (+) signs.
 *  <p>If enc_type is PHP_QUERY_RFC3986, then encoding is performed according to » RFC 3986, and spaces will be percent encoded (%20).
 * @return string a URL-encoded string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'http_build_query',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3a9e08dd4aff9c33c32a4628102ce0f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the target of a symbolic link
 * @link https://php.net/manual/en/function.readlink.php
 * @param string $path <p>
 * The symbolic link path.
 * </p>
 * @return string|false the contents of the symbolic link path or false on error.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'readlink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2b647ce9d88478b1b3a4dd0c113b1dc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets information about a link
 * @link https://php.net/manual/en/function.linkinfo.php
 * @param string $path <p>
 * Path to the link.
 * </p>
 * @return int|false linkinfo returns the st_dev field
 * of the Unix C stat structure returned by the lstat
 * system call. Returns 0 or false in case of error.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'linkinfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '77bda2ec62979f5c6a0051e5abaf9332' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Creates a symbolic link
 * @link https://php.net/manual/en/function.symlink.php
 * @param string $target <p>
 * Target of the link.
 * </p>
 * @param string $link <p>
 * The link name.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'symlink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '63451356f9b248b2bff53a1efe657858' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Create a hard link
 * @link https://php.net/manual/en/function.link.php
 * @param string $target Target of the link.
 * @param string $link The link name.
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'link',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8ce80ff9c8f109762c9f5899eac74380' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Deletes a file
 * @link https://php.net/manual/en/function.unlink.php
 * @param string $filename <p>
 * Path to the file.
 * </p>
 * @param resource $context [optional]
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'unlink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '42fd049baa8c1020d95a5c2e2da57e19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Execute an external program
 * @link https://php.net/manual/en/function.exec.php
 * @param string $command <p>
 * The command that will be executed.
 * </p>
 * @param array &$output [optional] <p>
 * If the output argument is present, then the
 * specified array will be filled with every line of output from the
 * command. Trailing whitespace, such as \\n, is not
 * included in this array. Note that if the array already contains some
 * elements, exec will append to the end of the array.
 * If you do not want the function to append elements, call
 * unset on the array before passing it to
 * exec.
 * </p>
 * @param int &$result_code [optional] <p>
 * If the return_var argument is present
 * along with the output argument, then the
 * return status of the executed command will be written to this
 * variable.
 * </p>
 * @return string|false The last line from the result of the command. If you need to execute a
 * command and have all the data from the command passed directly back without
 * any interference, use the passthru function.
 * </p>
 * <p>
 * To get the output of the executed command, be sure to set and use the
 * output parameter.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'exec',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '65f1240a741fbf71ba096ca98df45ce5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Execute an external program and display the output
 * @link https://php.net/manual/en/function.system.php
 * @param string $command <p>
 * The command that will be executed.
 * </p>
 * @param int &$result_code [optional] <p>
 * If the return_var argument is present, then the
 * return status of the executed command will be written to this
 * variable.
 * </p>
 * @return string|false the last line of the command output on success, and false
 * on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'system',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8dfde600e25fb4ccc6b23eae6c53cf37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Escape shell metacharacters
 * @link https://php.net/manual/en/function.escapeshellcmd.php
 * @param string $command <p>
 * The command that will be escaped.
 * </p>
 * @return string The escaped string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'escapeshellcmd',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6ace4a5d685cdc85d50d0ccba10f1037' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Escape a string to be used as a shell argument
 * @link https://php.net/manual/en/function.escapeshellarg.php
 * @param string $arg <p>
 * The argument that will be escaped.
 * </p>
 * @return string The escaped string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'escapeshellarg',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd8885dd0728738b5b9bf76c7c61623c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Execute an external program and display raw output
 * @link https://php.net/manual/en/function.passthru.php
 * @param string $command <p>
 * The command that will be executed.
 * </p>
 * @param int &$result_code [optional] <p>
 * If the return_var argument is present, the
 * return status of the Unix command will be placed here.
 * </p>
 * @return bool|null
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'passthru',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '97a9258b9bedfe6428452036ccc62753' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Execute command via shell and return the complete output as a string
 * @link https://php.net/manual/en/function.shell-exec.php
 * @param string $command <p>
 * The command that will be executed.
 * </p>
 * @return string|false|null The output from the executed command or NULL if an error occurred or the command produces no output.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'shell_exec',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1ce5792237737dea89954d9cfbad2560' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Execute a command and open file pointers for input/output
 * @link https://php.net/manual/en/function.proc-open.php
 * @param array|string $command <p>
 * Execute a command and open file pointers for input/output
 * </p>
 * <p>
 * As of PHP 7.4.0, cmd may be passed as array of command parameters.
 * In this case the process will be opened directly
 * (without going through a shell) and PHP will take care of any
 * necessary argument escaping.
 * </p>
 * @param array $descriptor_spec <p>
 * An indexed array where the key represents the descriptor number and the
 * value represents how PHP will pass that descriptor to the child
 * process. 0 is stdin, 1 is stdout, while 2 is stderr.
 * </p>
 * <p>
 * Each element can be:
 * An array describing the pipe to pass to the process. The first
 * element is the descriptor type and the second element is an option for
 * the given type. Valid types are pipe (the second
 * element is either r to pass the read end of the pipe
 * to the process, or w to pass the write end) and
 * file (the second element is a filename).
 * A stream resource representing a real file descriptor (e.g. opened file,
 * a socket, STDIN).
 * </p>
 * <p>
 * The file descriptor numbers are not limited to 0, 1 and 2 - you may
 * specify any valid file descriptor number and it will be passed to the
 * child process. This allows your script to interoperate with other
 * scripts that run as "co-processes". In particular, this is useful for
 * passing passphrases to programs like PGP, GPG and openssl in a more
 * secure manner. It is also useful for reading status information
 * provided by those programs on auxiliary file descriptors.
 * </p>
 * @param array &$pipes <p>
 * Will be set to an indexed array of file pointers that correspond to
 * PHP\'s end of any pipes that are created.
 * </p>
 * @param string|null $cwd [optional] <p>
 * The initial working dir for the command. This must be an
 * absolute directory path, or null
 * if you want to use the default value (the working dir of the current
 * PHP process)
 * </p>
 * @param array|null $env_vars [optional] <p>
 * An array with the environment variables for the command that will be
 * run, or null to use the same environment as the current PHP process
 * </p>
 * @param array|null $options [optional] <p>
 * Allows you to specify additional options. Currently supported options
 * include:
 * suppress_errors (windows only): suppresses errors generated by this
 * function when it\'s set to TRUE
 * generated by this function when it\'s set to true
 * bypass_shell (windows only): bypass cmd.exe shell when set to TRUE
 * context: stream context used when opening files
 * (created with stream_context_create)
 * blocking_pipes: (windows only): force blocking pipes when set to TRUE
 * create_process_group (windows only): allow the child process to handle
 * CTRL events when set to TRUE
 * create_new_console (windows only): the new process has a new console,
 * instead of inheriting its parent\'s console
 * </p>
 * @return resource|false a resource representing the process, which should be freed using
 * proc_close when you are finished with it. On failure
 * returns false.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'proc_open',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1cdd8177f87a10a641c7e8fed804b0c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Close a process opened by {@see proc_open} and return the exit code of that process
 * @link https://php.net/manual/en/function.proc-close.php
 * @param resource $process <p>
 * The proc_open resource that will
 * be closed.
 * </p>
 * @return int the termination status of the process that was run.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'proc_close',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5c573c4a5de8eb7007dc14772652f109' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Kills a process opened by proc_open
 * @link https://php.net/manual/en/function.proc-terminate.php
 * @param resource $process <p>
 * The proc_open resource that will
 * be closed.
 * </p>
 * @param int $signal [optional] <p>
 * This optional parameter is only useful on POSIX
 * operating systems; you may specify a signal to send to the process
 * using the kill(2) system call. The default is
 * SIGTERM.
 * </p>
 * @return bool the termination status of the process that was run.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'proc_terminate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '013b4f16f94cd853fcbe0499bc383da6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get information about a process opened by {@see proc_open}
 * @link https://php.net/manual/en/function.proc-get-status.php
 * @param resource $process <p>
 * The proc_open resource that will
 * be evaluated.
 * </p>
 * @return array|false An array of collected information on success, and false
 * on failure. The returned array contains the following elements:
 * </p>
 * <p>
 * <tr valign="top"><td>element</td><td>type</td><td>description</td></tr>
 * <tr valign="top">
 * <td>command</td>
 * <td>string</td>
 * <td>
 * The command string that was passed to proc_open.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>pid</td>
 * <td>int</td>
 * <td>process id</td>
 * </tr>
 * <tr valign="top">
 * <td>running</td>
 * <td>bool</td>
 * <td>
 * true if the process is still running, false if it has
 * terminated.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>signaled</td>
 * <td>bool</td>
 * <td>
 * true if the child process has been terminated by
 * an uncaught signal. Always set to false on Windows.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>stopped</td>
 * <td>bool</td>
 * <td>
 * true if the child process has been stopped by a
 * signal. Always set to false on Windows.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>exitcode</td>
 * <td>int</td>
 * <td>
 * The exit code returned by the process (which is only
 * meaningful if running is false).
 * Only first call of this function return real value, next calls return
 * -1.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>termsig</td>
 * <td>int</td>
 * <td>
 * The number of the signal that caused the child process to terminate
 * its execution (only meaningful if signaled is true).
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>stopsig</td>
 * <td>int</td>
 * <td>
 * The number of the signal that caused the child process to stop its
 * execution (only meaningful if stopped is true).
 * </td>
 * </tr>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'proc_get_status',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '283589419acd556a73fda3dbd4b028db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Change the priority of the current process. <br/>
 * Since 7.2.0 supported on Windows platforms.
 * @link https://php.net/manual/en/function.proc-nice.php
 * @param int $priority <p>
 * The increment value of the priority change.
 * </p>
 * @return bool true on success or false on failure.
 * If an error occurs, like the user lacks permission to change the priority,
 * an error of level E_WARNING is also generated.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'proc_nice',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '410b3e7b380507b7b2fa840d40139a9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generate a random integer
 * @link https://php.net/manual/en/function.rand.php
 * @param int $min [optional]
 * @param int $max [optional]
 * @return int A pseudo random value between min
 * (or 0) and max (or getrandmax, inclusive).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'rand',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ec820c423a7b05e954d8506146a866c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Seed the random number generator
 * <p><strong>Note</strong>: As of PHP 7.1.0, {@see srand()} has been made
 * an alias of {@see mt_srand()}.
 * </p>
 * @link https://php.net/manual/en/function.srand.php
 * @param int $seed [optional] <p>
 * Optional seed value
 * </p>
 * @param int $mode [optional] <p>
 * Use one of the following constants to specify the implementation of the algorithm to use.
 * </p>
 * @return void
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'srand',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3d66aead4b73b8ebfafa3e4d6396698a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Show largest possible random value
 * @link https://php.net/manual/en/function.getrandmax.php
 * @return int The largest possible random value returned by rand
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'getrandmax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '192e969436e1edef597917c67e1c7a47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generate a random value via the Mersenne Twister Random Number Generator
 * @link https://php.net/manual/en/function.mt-rand.php
 * @param int $min [optional] <p>
 * Optional lowest value to be returned (default: 0)
 * </p>
 * @param int $max [optional] <p>
 * Optional highest value to be returned (default: mt_getrandmax())
 * </p>
 * @return int A random integer value between min (or 0)
 * and max (or mt_getrandmax, inclusive)
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'mt_rand',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f9b89bca024462c3dc3e8cc6b64506fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Seeds the Mersenne Twister Random Number Generator
 * @link https://php.net/manual/en/function.mt-srand.php
 * @param int $seed [optional] <p>
 * An optional seed value
 * </p>
 * @param int $mode [optional] <p>
 * Use one of the following constants to specify the implementation of the algorithm to use.
 * </p>
 * @return void
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'mt_srand',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '49b217612be3c43835048ba315f284a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Show largest possible random value
 * @link https://php.net/manual/en/function.mt-getrandmax.php
 * @return int the maximum random value returned by mt_rand
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'mt_getrandmax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7934f6e7444f6068dcef189dec464e80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get port number associated with an Internet service and protocol
 * @link https://php.net/manual/en/function.getservbyname.php
 * @param string $service <p>
 * The Internet service name, as a string.
 * </p>
 * @param string $protocol <p>
 * protocol is either "tcp"
 * or "udp" (in lowercase).
 * </p>
 * @return int|false the port number, or false if service or
 * protocol is not found.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'getservbyname',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2b404463d15b3a359e5da3ab3d40ab58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get Internet service which corresponds to port and protocol
 * @link https://php.net/manual/en/function.getservbyport.php
 * @param int $port <p>
 * The port number.
 * </p>
 * @param string $protocol <p>
 * protocol is either "tcp"
 * or "udp" (in lowercase).
 * </p>
 * @return string|false the Internet service name as a string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'getservbyport',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9455ee91bb64cad68d1bedb81d25f6c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get protocol number associated with protocol name
 * @link https://php.net/manual/en/function.getprotobyname.php
 * @param string $protocol <p>
 * The protocol name.
 * </p>
 * @return int|false the protocol number or -1 if the protocol is not found.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'getprotobyname',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd8058b1fd98507cac97a48d89bd13329' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get protocol name associated with protocol number
 * @link https://php.net/manual/en/function.getprotobynumber.php
 * @param int $protocol <p>
 * The protocol number.
 * </p>
 * @return string|false the protocol name as a string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'getprotobynumber',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'eeba0dbec9d2af500e3286dcdb138e61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets PHP script owner\'s UID
 * @link https://php.net/manual/en/function.getmyuid.php
 * @return int|false the user ID of the current script, or false on error.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'getmyuid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'de587fc5640c853491ca6ac02c81730f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get PHP script owner\'s GID
 * @link https://php.net/manual/en/function.getmygid.php
 * @return int|false the group ID of the current script, or false on error.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'getmygid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '208907d072247b31d83dad483cd79896' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets PHP\'s process ID
 * @link https://php.net/manual/en/function.getmypid.php
 * @return int|false the current PHP process ID, or false on error.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'getmypid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a96d6471b84693a960a7f8b704231cc2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets the inode of the current script
 * @link https://php.net/manual/en/function.getmyinode.php
 * @return int|false the current script\'s inode as an integer, or false on error.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'typecontract' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'getmyinode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
  ),
));