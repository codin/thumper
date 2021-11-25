<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'phar:///home/kieron/Projects/thumper/vendor/phpstan/phpstan/phpstan.phar/vendor/ondrejmirtes/better-reflection/src/SourceLocator/SourceStubber/../../../../../jetbrains/phpstorm-stubs/pcre/pcre.stub-1637244537',
   'data' => 
  array (
    '54a316a3547e72ddd1bdd25d2f04bbba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Perform a regular expression match
 * @link https://php.net/manual/en/function.preg-match.php
 * @param string $pattern <p>
 * The pattern to search for, as a string.
 * </p>
 * @param string $subject <p>
 * The input string.
 * </p>
 * @param string[] &$matches [optional] <p>
 * If <i>matches</i> is provided, then it is filled with
 * the results of search. $matches[0] will contain the
 * text that matched the full pattern, $matches[1]
 * will have the text that matched the first captured parenthesized
 * subpattern, and so on.
 * </p>
 * @param int $flags [optional] <p>
 * <i>flags</i> can be the following flag:
 * <b>PREG_OFFSET_CAPTURE</b>
 * <blockquote>
 * If this flag is passed, for every occurring match the appendant string
 * offset will also be returned. Note that this changes the value of
 * <i>matches</i> into an array where every element is an
 * array consisting of the matched string at offset 0
 * and its string offset into <i>subject</i> at offset 1.
 * <pre>
 * <?php
 * preg_match(\'/(foo)(bar)(baz)/\', \'foobarbaz\', $matches, PREG_OFFSET_CAPTURE);
 * print_r($matches);
 * ?>
 * </pre>
 * The above example will output:
 * <pre>
 * Array
 * (
 *     [0] => Array
 *         (
 *             [0] => foobarbaz
 *             [1] => 0
 *         )
 *
 *     [1] => Array
 *         (
 *             [0] => foo
 *             [1] => 0
 *         )
 *
 *     [2] => Array
 *         (
 *             [0] => bar
 *             [1] => 3
 *         )
 *
 *     [3] => Array
 *         (
 *             [0] => baz
 *             [1] => 6
 *         )
 *
 * )
 * </pre>
 * </blockquote>
 * <b>PREG_UNMATCHED_AS_NULL</b>
 * <blockquote>
 * If this flag is passed, unmatched subpatterns are reported as NULL;
 * otherwise they are reported as an empty string.
 * <pre>
 * <?php
 * preg_match(\'/(a)(b)*(c)/\', \'ac\', $matches);
 * var_dump($matches);
 * preg_match(\'/(a)(b)*(c)/\', \'ac\', $matches, PREG_UNMATCHED_AS_NULL);
 * var_dump($matches);
 * ?>
 * </pre>
 * The above example will output:
 * <pre>
 * array(4) {
 *   [0]=>
 *   string(2) "ac"
 *   [1]=>
 *   string(1) "a"
 *   [2]=>
 *   string(0) ""
 *   [3]=>
 *   string(1) "c"
 * }
 * array(4) {
 *   [0]=>
 *   string(2) "ac"
 *   [1]=>
 *   string(1) "a"
 *   [2]=>
 *   NULL
 *   [3]=>
 *   string(1) "c"
 * }
 * </pre>
 * </blockquote>
 * @param int $offset [optional] <p>
 * Normally, the search starts from the beginning of the subject string.
 * The optional parameter <i>offset</i> can be used to
 * specify the alternate place from which to start the search (in bytes).
 * </p>
 * <p>
 * Using <i>offset</i> is not equivalent to passing
 * substr($subject, $offset) to
 * <b>preg_match</b> in place of the subject string,
 * because <i>pattern</i> can contain assertions such as
 * ^, $ or
 * (?&lt;=x). Compare:
 * <pre>
 * $subject = "abcdef";
 * $pattern = \'/^def/\';
 * preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
 * print_r($matches);
 * </pre>
 * The above example will output:</p>
 * <pre>
 * Array
 * (
 * )
 * </pre>
 * <p>
 * while this example
 * </p>
 * <code>
 * $subject = "abcdef";
 * $pattern = \'/^def/\';
 * preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);
 * print_r($matches);
 * </code>
 * <p>
 * will produce
 * </p>
 * <pre>
 * Array
 * (
 *     [0] => Array
 *         (
 *             [0] => def
 *             [1] => 0
 *         )
 * )
 * </pre>
 * Alternatively, to avoid using substr(), use the \\G assertion rather
 * than the ^ anchor, or the A modifier instead, both of which work with
 * the offset parameter.
 * </p>
 * @return int|false <b>preg_match</b> returns 1 if the <i>pattern</i>
 * matches given <i>subject</i>, 0 if it does not, or <b>FALSE</b>
 * if an error occurred.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'preg_match',
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
    'e2ddd61ee2fb9793018bfc3e13089a8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Perform a global regular expression match
 * @link https://php.net/manual/en/function.preg-match-all.php
 * @param string $pattern <p>
 * The pattern to search for, as a string.
 * </p>
 * @param string $subject <p>
 * The input string.
 * </p>
 * @param string[][] &$matches [optional] <p>
 * Array of all matches in multi-dimensional array ordered according to flags.
 * </p>
 * @param int $flags [optional] <p>
 * Can be a combination of the following flags (note that it doesn\'t make
 * sense to use <b>PREG_PATTERN_ORDER</b> together with
 * <b>PREG_SET_ORDER</b>):
 * <b>PREG_PATTERN_ORDER</b>
 * <br>
 * Orders results so that $matches[0] is an array of full
 * pattern matches, $matches[1] is an array of strings matched by
 * the first parenthesized subpattern, and so on.
 * </p>
 * @param int $offset [optional] <p>
 * Normally, the search starts from the beginning of the subject string.
 * The optional parameter <i>offset</i> can be used to
 * specify the alternate place from which to start the search (in bytes).
 * </p>
 * <p>
 * Using <i>offset</i> is not equivalent to passing
 * substr($subject, $offset) to
 * <b>preg_match_all</b> in place of the subject string,
 * because <i>pattern</i> can contain assertions such as
 * ^, $ or
 * (?&lt;=x). See <b>preg_match</b>
 * for examples.
 * </p>
 * <p>
 * <code>
 * preg_match_all("|]+>(.*)]+>|U",
 * "example: this is a test",
 * $out, PREG_PATTERN_ORDER);
 * echo $out[0][0] . ", " . $out[0][1] . "\\n";
 * echo $out[1][0] . ", " . $out[1][1] . "\\n";
 * </code>
 * The above example will output:</p>
 * <pre>
 * example: , this is a test
 * example: , this is a test
 * </pre>
 * <p>
 * So, $out[0] contains array of strings that matched full pattern,
 * and $out[1] contains array of strings enclosed by tags.
 * </p>
 * @return int|false|null the number of full pattern matches (which might be zero),
 * or <b>FALSE</b> if an error occurred.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'preg_match_all',
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
    '2a0f8afff713c2c68a973913b909a51d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Perform a regular expression search and replace
 * @link https://php.net/manual/en/function.preg-replace.php
 * @param string|string[] $pattern <p>
 * The pattern to search for. It can be either a string or an array with
 * strings.
 * </p>
 * <p>
 * Several PCRE modifiers
 * are also available, including the deprecated \'e\'
 * (PREG_REPLACE_EVAL), which is specific to this function.
 * </p>
 * @param string|string[] $replacement <p>
 * The string or an array with strings to replace. If this parameter is a
 * string and the <i>pattern</i> parameter is an array,
 * all patterns will be replaced by that string. If both
 * <i>pattern</i> and <i>replacement</i>
 * parameters are arrays, each <i>pattern</i> will be
 * replaced by the <i>replacement</i> counterpart. If
 * there are fewer elements in the <i>replacement</i>
 * array than in the <i>pattern</i> array, any extra
 * <i>pattern</i>s will be replaced by an empty string.
 * </p>
 * <p>
 * <i>replacement</i> may contain references of the form
 * \\\\n or (since PHP 4.0.4)
 * $n, with the latter form
 * being the preferred one. Every such reference will be replaced by the text
 * captured by the n\'th parenthesized pattern.
 * n can be from 0 to 99, and
 * \\\\0 or $0 refers to the text matched
 * by the whole pattern. Opening parentheses are counted from left to right
 * (starting from 1) to obtain the number of the capturing subpattern.
 * To use backslash in replacement, it must be doubled
 * ("\\\\\\\\" PHP string).
 * </p>
 * <p>
 * When working with a replacement pattern where a backreference is
 * immediately followed by another number (i.e.: placing a literal number
 * immediately after a matched pattern), you cannot use the familiar
 * \\\\1 notation for your backreference.
 * \\\\11, for example, would confuse
 * <b>preg_replace</b> since it does not know whether you
 * want the \\\\1 backreference followed by a literal
 * 1, or the \\\\11 backreference
 * followed by nothing. In this case the solution is to use
 * \\${1}1. This creates an isolated
 * $1 backreference, leaving the 1
 * as a literal.
 * </p>
 * <p>
 * When using the deprecated e modifier, this function escapes
 * some characters (namely \', ",
 * \\ and NULL) in the strings that replace the
 * backreferences. This is done to ensure that no syntax errors arise
 * from backreference usage with either single or double quotes (e.g.
 * \'strlen(\\\'$1\\\')+strlen("$2")\'). Make sure you are
 * aware of PHP\'s string
 * syntax to know exactly how the interpreted string will look.
 * </p>
 * @param string|string[] $subject <p>
 * The string or an array with strings to search and replace.
 * </p>
 * <p>
 * If <i>subject</i> is an array, then the search and
 * replace is performed on every entry of <i>subject</i>,
 * and the return value is an array as well.
 * </p>
 * @param int $limit [optional] <p>
 * The maximum possible replacements for each pattern in each
 * <i>subject</i> string. Defaults to
 * -1 (no limit).
 * </p>
 * @param int &$count [optional] <p>
 * If specified, this variable will be filled with the number of
 * replacements done.
 * </p>
 * @return string|string[]|null <b>preg_replace</b> returns an array if the
 * <i>subject</i> parameter is an array, or a string
 * otherwise.
 * </p>
 * <p>
 * If matches are found, the new <i>subject</i> will
 * be returned, otherwise <i>subject</i> will be
 * returned unchanged or <b>NULL</b> if an error occurred.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'preg_replace',
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
    'c4393738e84de49d479b9b2e05b7f558' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Perform a regular expression search and replace using a callback
 * @link https://php.net/manual/en/function.preg-replace-callback.php
 * @param string|string[] $pattern <p>
 * The pattern to search for. It can be either a string or an array with
 * strings.
 * </p>
 * @param callable $callback <p>
 * A callback that will be called and passed an array of matched elements
 * in the <i>subject</i> string. The callback should
 * return the replacement string. This is the callback signature:
 * </p>
 * <p>
 * string<b>handler</b>
 * <b>array<i>matches</i></b>
 * </p>
 * <p>
 * You\'ll often need the <i>callback</i> function
 * for a <b>preg_replace_callback</b> in just one place.
 * In this case you can use an
 * anonymous function to
 * declare the callback within the call to
 * <b>preg_replace_callback</b>. By doing it this way
 * you have all information for the call in one place and do not
 * clutter the function namespace with a callback function\'s name
 * not used anywhere else.
 * </p>
 * <p>
 * <b>preg_replace_callback</b> and
 * anonymous function
 * <code>
 * /* a unix-style command line filter to convert uppercase
 * * letters at the beginning of paragraphs to lowercase * /
 * $fp = fopen("php://stdin", "r") or die("can\'t read stdin");
 * while (!feof($fp)) {
 * $line = fgets($fp);
 * $line = preg_replace_callback(
 * \'|<p>\\s*\\w|\',
 * function ($matches) {
 * return strtolower($matches[0]);
 * },
 * $line
 * );
 * echo $line;
 * }
 * fclose($fp);
 * </code>
 * </p>
 * @param string|string[] $subject <p>
 * The string or an array with strings to search and replace.
 * </p>
 * @param int $limit [optional] <p>
 * The maximum possible replacements for each pattern in each
 * <i>subject</i> string. Defaults to
 * -1 (no limit).
 * </p>
 * @param int &$count [optional] <p>
 * If specified, this variable will be filled with the number of
 * replacements done.
 * </p>
 * @param int $flags [optional]
 * @return string|string[]|null <b>preg_replace_callback</b> returns an array if the
 * <i>subject</i> parameter is an array, or a string
 * otherwise. On errors the return value is <b>NULL</b>
 * </p>
 * <p>
 * If matches are found, the new subject will be returned, otherwise
 * <i>subject</i> will be returned unchanged.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'preg_replace_callback',
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
    'be0acb6df82d88e3d894a27d4d8c2471' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Perform a regular expression search and replace using callbacks
 * @link https://php.net/manual/en/function.preg-replace-callback-array.php
 * @param array|callable[] $pattern An associative array mapping patterns (keys) to callbacks (values)
 * @param string|string[] $subject
 * @param int $limit [optional]
 * @param int &$count [optional]
 * @param int $flags [optional]
 * @return string|string[]|null  <p>preg_replace_callback_array() returns an array if the subject parameter is an array, or a string otherwise. On errors the return value is NULL</p>
 * <p>If matches are found, the new subject will be returned, otherwise subject will be returned unchanged.</p>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'preg_replace_callback_array',
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
    '1aa1d04af20ec7d9b52f8471ddcd73ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Perform a regular expression search and replace
 * @link https://php.net/manual/en/function.preg-filter.php
 * @param string|string[] $pattern
 * @param string|string[] $replacement
 * @param string|string[] $subject
 * @param int $limit [optional]
 * @param int &$count [optional]
 * @return string|string[]|null an array if the <i>subject</i>
 * parameter is an array, or a string otherwise.
 * </p>
 * <p>
 * If no matches are found or an error occurred, an empty array
 * is returned when <i>subject</i> is an array
 * or <b>NULL</b> otherwise.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'preg_filter',
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
    '282131fc2ef924186b9f9f5d2f25a8ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Split string by a regular expression
 * @link https://php.net/manual/en/function.preg-split.php
 * @param string $pattern <p>
 * The pattern to search for, as a string.
 * </p>
 * @param string $subject <p>
 * The input string.
 * </p>
 * @param int $limit [optional] <p>
 * If specified, then only substrings up to <i>limit</i>
 * are returned with the rest of the string being placed in the last
 * substring. A <i>limit</i> of -1, 0 or <b>NULL</b> means "no limit"
 * and, as is standard across PHP, you can use <b>NULL</b> to skip to the
 * <i>flags</i> parameter.
 * </p>
 * @param int $flags [optional] <p>
 * <i>flags</i> can be any combination of the following
 * flags (combined with the | bitwise operator):
 * <b>PREG_SPLIT_NO_EMPTY</b>
 * If this flag is set, only non-empty pieces will be returned by
 * <b>preg_split</b>.
 * </p>
 * @return string[]|false an array containing substrings of <i>subject</i>
 * split along boundaries matched by <i>pattern</i>, or <b>FALSE</b>
 * if an error occurred.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'preg_split',
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
    '169f5e4be80be6c3da87f26f9a22d295' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Quote regular expression characters
 * @link https://php.net/manual/en/function.preg-quote.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string|null $delimiter [optional] <p>
 * If the optional <i>delimiter</i> is specified, it
 * will also be escaped. This is useful for escaping the delimiter
 * that is required by the PCRE functions. The / is the most commonly
 * used delimiter.
 * </p>
 * @return string the quoted (escaped) string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'preg_quote',
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
    '79a621b32854ec124f5d9ea6ce973357' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return array entries that match the pattern
 * @link https://php.net/manual/en/function.preg-grep.php
 * @param string $pattern <p>
 * The pattern to search for, as a string.
 * </p>
 * @param array $array <p>
 * The input array.
 * </p>
 * @param int $flags [optional] <p>
 * If set to <b>PREG_GREP_INVERT</b>, this function returns
 * the elements of the input array that do not match
 * the given <i>pattern</i>.
 * </p>
 * @return array|false an array indexed using the keys from the
 * <i>input</i> array or false when pattern cannot be compiled.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'preg_grep',
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
    'fa0d518e170c15f1a65fb77cf300b32b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the error code of the last PCRE regex execution
 * @link https://php.net/manual/en/function.preg-last-error.php
 * @return int one of the following constants (explained on their own page):
 * <b>PREG_NO_ERROR</b>
 * <b>PREG_INTERNAL_ERROR</b>
 * <b>PREG_BACKTRACK_LIMIT_ERROR</b> (see also pcre.backtrack_limit)
 * <b>PREG_RECURSION_LIMIT_ERROR</b> (see also pcre.recursion_limit)
 * <b>PREG_BAD_UTF8_ERROR</b>
 * <b>PREG_BAD_UTF8_OFFSET_ERROR</b> (since PHP 5.3.0)
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'preg_last_error',
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
    '47c3833e09eca6674581bd48c589ffa5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the error message of the last PCRE regex execution
 *
 * @return string one of the error messages or "No error" if there is no error.
 * @since 8.0
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'preg_last_error_msg',
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
    'b15c43c084afcae41e2c1623c5b7bb70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Orders results so that $matches[0] is an array of full pattern
 * matches, $matches[1] is an array of strings matched by the first
 * parenthesized subpattern, and so on. This flag is only used with
 * <b>preg_match_all</b>.
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    'cc20679616cfc1162c60600b5c5d9647' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returned by {@see preg_last_error()} if the last PCRE function failed due to limited JIT stack space.
 * @since 7.0
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    'd3473f05b1a0717d9a7405c0b253c5d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Orders results so that $matches[0] is an array of first set of
 * matches, $matches[1] is an array of second set of matches, and so
 * on. This flag is only used with <b>preg_match_all</b>.
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    '27d0119453b24afb6f03d4fb74c312ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * See the description of
 * <b>PREG_SPLIT_OFFSET_CAPTURE</b>.
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    'ae6a0f052c9d30a5750d359a3bf88938' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * This flag tells <b>preg_split</b> to return only non-empty
 * pieces.
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    '45a2cf3a64674b57e668517af1e67010' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * This flag tells <b>preg_split</b> to capture
 * parenthesized expression in the delimiter pattern as well.
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    '3eb7b7896528fc2e355fbbf9a1ffeb4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * If this flag is set, for every occurring match the appendant string
 * offset will also be returned. Note that this changes the return
 * values in an array where every element is an array consisting of the
 * matched string at offset 0 and its string offset within subject at
 * offset 1. This flag is only used for <b>preg_split</b>.
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    '3621f962bf35db5f7e6dce7deec2b809' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returned by <b>preg_last_error</b> if there were no
 * errors.
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    '3f948465cc948576ea057358c255b075' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returned by <b>preg_last_error</b> if there was an
 * internal PCRE error.
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    'e39f90353d340aa1f33b911f2c1fe10b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returned by <b>preg_last_error</b> if backtrack limit was exhausted.
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    'e876932e8fc1425855dd1383cd559108' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returned by <b>preg_last_error</b> if recursion limit was exhausted.
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    '26eb69299c2cab564f6db19fff6d2bcc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returned by <b>preg_last_error</b> if the last error was
 * caused by malformed UTF-8 data (only when running a regex in UTF-8 mode).
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    '344de27d2e010755d509d190b236233e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returned by <b>preg_last_error</b> if the offset didn\'t
 * correspond to the begin of a valid UTF-8 code point (only when running
 * a regex in UTF-8
 * mode).
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    '16ced5c4519ed32c8c7932f6e86addf8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * This flag tells {@see preg_match()} and {@see preg_match_all()}
 * to include unmatched subpatterns in <b>$matches</b> as NULL values.
 * Without this flag, unmatched subpatterns are reported as empty strings,
 * as if they were empty matches. Setting this flag allows to distinguish between these two cases.
 * @since 7.2
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    'f9da9eb606e0808363a402a1487d6131' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * PCRE version and release date (e.g. "7.0 18-Dec-2006").
 * @link https://php.net/manual/en/pcre.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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
    'c5c5fbfea11d1d0eb851679c636ff664' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @since 7.3
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
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