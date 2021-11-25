<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'phar:///home/kieron/Projects/thumper/vendor/phpstan/phpstan/phpstan.phar/vendor/ondrejmirtes/better-reflection/src/SourceLocator/SourceStubber/../../../../../jetbrains/phpstorm-stubs/standard/standard_8.stub-1637244537',
   'data' => 
  array (
    'a024f1441fd126140933552433c0d6c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generate a system log message
 * @link https://php.net/manual/en/function.syslog.php
 * @param int $priority <p>
 * priority is a combination of the facility and
 * the level. Possible values are:
 * <table>
 * syslog Priorities (in descending order)
 * <tr valign="top">
 * <td>Constant</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_EMERG</td>
 * <td>system is unusable</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_ALERT</td>
 * <td>action must be taken immediately</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_CRIT</td>
 * <td>critical conditions</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_ERR</td>
 * <td>error conditions</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_WARNING</td>
 * <td>warning conditions</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_NOTICE</td>
 * <td>normal, but significant, condition</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_INFO</td>
 * <td>informational message</td>
 * </tr>
 * <tr valign="top">
 * <td>LOG_DEBUG</td>
 * <td>debug-level message</td>
 * </tr>
 * </table>
 * </p>
 * @param string $message <p>
 * The message to send, except that the two characters
 * %m will be replaced by the error message string
 * (strerror) corresponding to the present value of
 * errno.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'syslog',
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
    'a6c70917182ac262e61a2d13a5a40578' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Close connection to system logger
 * @link https://php.net/manual/en/function.closelog.php
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'closelog',
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
    '4c8b383e37626074fb58c2f105e0636d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Registers a function that will be called when PHP starts sending output.
 * The callback is executed just after PHP prepares all headers to be sent,<br>
 * and before any other output is sent, creating a window to manipulate the outgoing headers before being sent.
 * @link https://secure.php.net/manual/en/function.header-register-callback.php
 * @param callable $callback Function called just before the headers are sent.
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'header_register_callback',
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
    'bd912116e4454774acfc3a38288c0d17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get the size of an image from a string.
 * @param string $string The image data, as a string.
 * @param array &$image_info [optional] This optional parameter allows you to extract<br>
 * some extended information from the image file. Currently, this will <br>
 * return the different JPG APP markers as an associative array. <br>
 * Some programs use these APP markers to embed text information in images. <br>
 * A very common one is to embed » IPTC information in the APP13 marker. <br>
 * You can use the iptcparse() function to parse the binary APP13 marker into something readable.
 * @return array|false Returns an array with 7 elements.<br>
 * Index 0 and 1 contains respectively the width and the height of the image.<br>
 * Index 2 is one of the <b>IMAGETYPE_XXX</b> constants indicating the type of the image.<br>
 * Index 3 is a text string with the correct <b>height="yyy" width="xxx"</b> string<br>
 * that can be used directly in an IMG tag.<br>
 * On failure, FALSE is returned.
 * @link https://secure.php.net/manual/en/function.getimagesizefromstring.php
 * @since 5.4
 * @link https://secure.php.net/manual/en/function.getimagesizefromstring.php
 * @since 5.4
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'getimagesizefromstring',
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
    'ce9d4df4dc8dd462dba0f2decc65cf4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Set the stream chunk size.
 * @param resource $stream The target stream.
 * @param int $size The desired new chunk size.
 * @return int|false Returns the previous chunk size on success.<br>
 * Will return <b>FALSE</b> if chunk_size is less than 1 or greater than <b>PHP_INT_MAX</b>.
 * @link https://secure.php.net/manual/en/function.stream-set-chunk-size.php
 * @since 5.4
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'stream_set_chunk_size',
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
    '704c1e45721054c6009d650356232ee6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Initializes all syslog related variables
 * @link https://php.net/manual/en/function.define-syslog-variables.php
 * @return void
 * @removed 5.4
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'define_syslog_variables',
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
    '9d31caa119ec518bc332201b5575ba5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Combined linear congruential generator
 * @link https://php.net/manual/en/function.lcg-value.php
 * @return float A pseudo random float value in the range of (0, 1)
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'lcg_value',
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
    '9731e292beb906dfeefa123e31fea09f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Calculate the metaphone key of a string
 * @link https://php.net/manual/en/function.metaphone.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @param int $max_phonemes [optional] <p>
 * This parameter restricts the returned metaphone key to phonemes characters in length.
 * The default value of 0 means no restriction.
 * </p>
 * @return string|false the metaphone key as a string, or FALSE on failure
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'metaphone',
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
    'f528446f2be3d9629917b2d813b1aef3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Turn on output buffering
 * @link https://php.net/manual/en/function.ob-start.php
 * @param callable $callback [optional] <p>
 * An optional output_callback function may be
 * specified. This function takes a string as a parameter and should
 * return a string. The function will be called when
 * the output buffer is flushed (sent) or cleaned (with
 * ob_flush, ob_clean or similar
 * function) or when the output buffer
 * is flushed to the browser at the end of the request. When
 * output_callback is called, it will receive the
 * contents of the output buffer as its parameter and is expected to
 * return a new output buffer as a result, which will be sent to the
 * browser. If the output_callback is not a
 * callable function, this function will return false.
 * </p>
 * <p>
 * If the callback function has two parameters, the second parameter is
 * filled with a bit-field consisting of
 * PHP_OUTPUT_HANDLER_START,
 * PHP_OUTPUT_HANDLER_CONT and
 * PHP_OUTPUT_HANDLER_END.
 * </p>
 * <p>
 * If output_callback returns false original
 * input is sent to the browser.
 * </p>
 * <p>
 * The output_callback parameter may be bypassed
 * by passing a null value.
 * </p>
 * <p>
 * ob_end_clean, ob_end_flush,
 * ob_clean, ob_flush and
 * ob_start may not be called from a callback
 * function. If you call them from callback function, the behavior is
 * undefined. If you would like to delete the contents of a buffer,
 * return "" (a null string) from callback function.
 * You can\'t even call functions using the output buffering functions like
 * print_r($expression, true) or
 * highlight_file($filename, true) from a callback
 * function.
 * </p>
 * <p>
 * In PHP 4.0.4, ob_gzhandler was introduced to
 * facilitate sending gz-encoded data to web browsers that support
 * compressed web pages. ob_gzhandler determines
 * what type of content encoding the browser will accept and will return
 * its output accordingly.
 * </p>
 * @param int $chunk_size [optional] <p>
 * If the optional parameter chunk_size is passed, the
 * buffer will be flushed after any output call which causes the buffer\'s
 * length to equal or exceed chunk_size.
 * Default value 0 means that the function is called only in the end,
 * other special value 1 sets chunk_size to 4096.
 * </p>
 * @param int $flags [optional] <p>
 * The flags parameter is a bitmask that controls the operations that can be performed on the output buffer.
 * The default is to allow output buffers to be cleaned, flushed and removed, which can be set explicitly via
 * PHP_OUTPUT_HANDLER_CLEANABLE | PHP_OUTPUT_HANDLER_FLUSHABLE | PHP_OUTPUT_HANDLER_REMOVABLE, or PHP_OUTPUT_HANDLER_STDFLAGS as shorthand.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_start',
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
    'f4319b1807568c720c6934192aa726e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Flush (send) the output buffer
 * @link https://php.net/manual/en/function.ob-flush.php
 * @return bool
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_flush',
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
    'a2236912465fd6111fcc85a8cd236ea2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Clean (erase) the output buffer
 * @link https://php.net/manual/en/function.ob-clean.php
 * @return bool
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_clean',
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
    '5bdc457bf1d431525bc475a4058b20c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Flush (send) the output buffer and turn off output buffering
 * @link https://php.net/manual/en/function.ob-end-flush.php
 * @return bool true on success or false on failure. Reasons for failure are first that you called the
 * function without an active buffer or that for some reason a buffer could
 * not be deleted (possible for special buffer).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_end_flush',
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
    'bbd996848fc09b7eb181c5bb9c97a561' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Clean (erase) the output buffer and turn off output buffering
 * @link https://php.net/manual/en/function.ob-end-clean.php
 * @return bool true on success or false on failure. Reasons for failure are first that you called the
 * function without an active buffer or that for some reason a buffer could
 * not be deleted (possible for special buffer).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_end_clean',
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
    '59dcfdfd4ff21436a8aec011df59efa3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Flush the output buffer, return it as a string and turn off output buffering
 * @link https://php.net/manual/en/function.ob-get-flush.php
 * @return string|false the output buffer or false if no buffering is active.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_get_flush',
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
    'c60f919ab15ddf7d80ecb2fa6a8cd1df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get current buffer contents and delete current output buffer
 * @link https://php.net/manual/en/function.ob-get-clean.php
 * @return string|false the contents of the output buffer and end output buffering.
 * If output buffering isn\'t active then false is returned.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_get_clean',
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
    '382be3e6abfec853c5e25bb49bebfd00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return the length of the output buffer
 * @link https://php.net/manual/en/function.ob-get-length.php
 * @return int|false the length of the output buffer contents or false if no
 * buffering is active.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_get_length',
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
    '42fd49eb2c98bda8e23709930f6d98f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return the nesting level of the output buffering mechanism
 * @link https://php.net/manual/en/function.ob-get-level.php
 * @return int the level of nested output buffering handlers or zero if output
 * buffering is not active.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_get_level',
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
    'caa7ea37fe71de3ea5037ecfd518be50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get status of output buffers
 * @link https://php.net/manual/en/function.ob-get-status.php
 * @param bool $full_status [optional] <p>
 * true to return all active output buffer levels. If false or not
 * set, only the top level output buffer is returned.
 * </p>
 * @return array If called without the full_status parameter
 * or with full_status = false a simple array
 * with the following elements is returned:
 * <pre>
 * Array
 * (
 *     [level] => 2
 *     [type] => 0
 *     [status] => 0
 *     [name] => URL-Rewriter
 *     [del] => 1
 * )
 * </pre>
 * <table>
 * <tr><th>Key</th><th>Value</th></tr>
 * <tr><td>level</td><td>Output nesting level</td></tr>
 * <tr><td>type</td><td><em>PHP_OUTPUT_HANDLER_INTERNAL (0)</em> or <em>PHP_OUTPUT_HANDLER_USER (1)</em></td></tr>
 * <tr><td>status</td><td>One of <em>PHP_OUTPUT_HANDLER_START</em> (0), <em>PHP_OUTPUT_HANDLER_CONT</em> (1) or <em>PHP_OUTPUT_HANDLER_END</em> (2)</td></tr>
 * <tr><td>name</td><td>Name of active output handler or &#039; default output handler&#039; if none is set</td></tr>
 * <tr><td>del</td><td>Erase-flag as set by ob_start()</td></tr>
 * </table>
 * <p>
 * If called with full_status = TRUE an array with one element for each active output buffer
 * level is returned. The output level is used as key of the top level array and each array
 * element itself is another array holding status information on one active output level.
 * </p>
 * <pre>
 * Array
 * (
 *     [0] => Array
 *         (
 *             [chunk_size] => 0
 *             [size] => 40960
 *             [block_size] => 10240
 *             [type] => 1
 *             [status] => 0
 *             [name] => default output handler
 *             [del] => 1
 *         )
 *
 *     [1] => Array
 *         (
 *             [chunk_size] => 0
 *             [size] => 40960
 *             [block_size] => 10240
 *             [type] => 0
 *             [buffer_size] => 0
 *             [status] => 0
 *             [name] => URL-Rewriter
 *             [del] => 1
 *         )
 *
 * )
 * </pre>
 * <p> The full output contains these additional elements:</p>
 * <table>
 * <tr><th>Key</th><th>Value</th></tr>
 * <tr><td>chunk_size</td><td>Chunk size as set by ob_start()</td></tr>
 * <tr><td>size</td><td>...</td></tr>
 * <tr><td>blocksize</td><td>...</td></tr>
 * </table>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_get_status',
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
    '701a51a5635ac0c288d211c9dcd6ddf4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return the contents of the output buffer
 * @link https://php.net/manual/en/function.ob-get-contents.php
 * @return string|false This will return the contents of the output buffer or false, if output
 * buffering isn\'t active.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_get_contents',
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
    'fba4e649794d683daf2ca7b6b3eeccdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Turn implicit flush on/off
 * @link https://php.net/manual/en/function.ob-implicit-flush.php
 * @param int|bool $enable [optional] <p>
 * 1|<b>TRUE</b> to turn implicit flushing on, 0|<b>FALSE</b> turns it off.
 * <br><br>default: 1|<b>TRUE</b>
 * </p>
 * @return void
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_implicit_flush',
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
    'f0b041f78f9f2f01efc9d82e12081ff0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * List all output handlers in use
 * @link https://php.net/manual/en/function.ob-list-handlers.php
 * @return array This will return an array with the output handlers in use (if any). If
 * output_buffering is enabled or
 * an anonymous function was used with ob_start,
 * ob_list_handlers will return "default output
 * handler".
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ob_list_handlers',
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
    '3a2838b827bb45b27e9efb30afe61e96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sort an array by key
 * @link https://php.net/manual/en/function.ksort.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @param int $flags [optional] <p>
 * You may modify the behavior of the sort using the optional
 * parameter sort_flags, for details
 * see sort.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'ksort',
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
    'b1c781b38f356908b733917f54ccbabb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sort an array by key in reverse order
 * @link https://php.net/manual/en/function.krsort.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @param int $flags [optional] <p>
 * You may modify the behavior of the sort using the optional parameter
 * sort_flags, for details see
 * sort.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'krsort',
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
    '8a46b183f3b45671fb66bcdbcfb1bc34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sort an array using a "natural order" algorithm
 * @link https://php.net/manual/en/function.natsort.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'natsort',
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
    '7f768c3b04fbb9846a65243f81e6203d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sort an array using a case insensitive "natural order" algorithm
 * @link https://php.net/manual/en/function.natcasesort.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'natcasesort',
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
    'e3ac2ddda457fdc3e1b5a8c3785ca723' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sort an array and maintain index association
 * @link https://php.net/manual/en/function.asort.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @param int $flags [optional] <p>
 * You may modify the behavior of the sort using the optional
 * parameter sort_flags, for details
 * see sort.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'asort',
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
    'de94d66fb32709d44df61c973f3bdbb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sort an array in reverse order and maintain index association
 * @link https://php.net/manual/en/function.arsort.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @param int $flags [optional] <p>
 * You may modify the behavior of the sort using the optional parameter
 * sort_flags, for details see
 * sort.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'arsort',
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
    'cd7650ec5c7aecbf50b6319b943b84af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sort an array
 * @link https://php.net/manual/en/function.sort.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @param int $flags [optional] <p>
 * The optional second parameter sort_flags
 * may be used to modify the sorting behavior using these values.
 * </p>
 * <p>
 * Sorting type flags:<br>
 * SORT_REGULAR - compare items normally
 * (don\'t change types)</p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'sort',
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
    'cea712f285e38de6eacaaea794f9af7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sort an array in reverse order
 * @link https://php.net/manual/en/function.rsort.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @param int $flags [optional] <p>
 * You may modify the behavior of the sort using the optional
 * parameter sort_flags, for details see
 * sort.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'rsort',
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
    '9f2b07ed13ed39df27f8b00ff70f092c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sort an array by values using a user-defined comparison function
 * @link https://php.net/manual/en/function.usort.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @param callable $callback <p>
 * The comparison function must return an integer less than, equal to, or
 * greater than zero if the first argument is considered to be
 * respectively less than, equal to, or greater than the second.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'usort',
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
    'c69228e3a79c0d3353e13fa0380fafc1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sort an array with a user-defined comparison function and maintain index association
 * @link https://php.net/manual/en/function.uasort.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @param callable $callback <p>
 * See usort and uksort for
 * examples of user-defined comparison functions.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'uasort',
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
    '1e0673970a8c2e7ac6ffe4d8d9edca74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sort an array by keys using a user-defined comparison function
 * @link https://php.net/manual/en/function.uksort.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @param callable $callback <p>
 * The callback comparison function.
 * </p>
 * <p>
 * Function cmp_function should accept two
 * parameters which will be filled by pairs of array keys.
 * The comparison function must return an integer less than, equal
 * to, or greater than zero if the first argument is considered to
 * be respectively less than, equal to, or greater than the
 * second.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'uksort',
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
    'f19e4bf8ed3d3cbce418ab6a72b3da8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Shuffle an array
 * @link https://php.net/manual/en/function.shuffle.php
 * @param array &$array <p>
 * The array.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'shuffle',
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
    '35110a302ff7214d3f842daa483e4095' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Apply a user function to every member of an array
 * @link https://php.net/manual/en/function.array-walk.php
 * @param array|object &$array <p>
 * The input array.
 * </p>
 * @param callable $callback <p>
 * Typically, funcname takes on two parameters.
 * The array parameter\'s value being the first, and
 * the key/index second.
 * </p>
 * <p>
 * If funcname needs to be working with the
 * actual values of the array, specify the first parameter of
 * funcname as a
 * reference. Then,
 * any changes made to those elements will be made in the
 * original array itself.
 * </p>
 * <p>
 * Users may not change the array itself from the
 * callback function. e.g. Add/delete elements, unset elements, etc. If
 * the array that array_walk is applied to is
 * changed, the behavior of this function is undefined, and unpredictable.
 * </p>
 * @param mixed $arg [optional] <p>
 * If the optional userdata parameter is supplied,
 * it will be passed as the third parameter to the callback
 * funcname.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_walk',
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
    '8be3c1734003e4b00339cd231a57e1a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Apply a user function recursively to every member of an array
 * @link https://php.net/manual/en/function.array-walk-recursive.php
 * @param array|object &$array <p>
 * The input array.
 * </p>
 * @param callable $callback <p>
 * Typically, funcname takes on two parameters.
 * The input parameter\'s value being the first, and
 * the key/index second.
 * </p>
 * <p>
 * If funcname needs to be working with the
 * actual values of the array, specify the first parameter of
 * funcname as a
 * reference. Then,
 * any changes made to those elements will be made in the
 * original array itself.
 * </p>
 * @param mixed $arg [optional] <p>
 * If the optional userdata parameter is supplied,
 * it will be passed as the third parameter to the callback
 * funcname.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_walk_recursive',
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
    '72d5e2df6ba5d2aad889dae316ba8390' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Counts all elements in an array, or something in an object.
 * <p>For objects, if you have SPL installed, you can hook into count() by implementing interface {@see Countable}.
 * The interface has exactly one method, {@see Countable::count()}, which returns the return value for the count() function.
 * Please see the {@see Array} section of the manual for a detailed explanation of how arrays are implemented and used in PHP.</p>
 * @link https://php.net/manual/en/function.count.php
 * @param array|Countable $value The array or the object.
 * @param int $mode [optional] If the optional mode parameter is set to
 * COUNT_RECURSIVE (or 1), count
 * will recursively count the array. This is particularly useful for
 * counting all the elements of a multidimensional array. count does not detect infinite recursion.
 * @return int the number of elements in var, which is
 * typically an array, since anything else will have one
 * element.
 * <p>
 * If var is not an array or an object with
 * implemented Countable interface,
 * 1 will be returned.
 * There is one exception, if var is null,
 * 0 will be returned.
 * </p>
 * <p>
 * Caution: count may return 0 for a variable that isn\'t set,
 * but it may also return 0 for a variable that has been initialized with an
 * empty array. Use isset to test if a variable is set.
 * </p>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'count',
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
    '7ab8c8af8fc77b785316e580e6bce633' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Set the internal pointer of an array to its last element
 * @link https://php.net/manual/en/function.end.php
 * @param array|object &$array <p>
 * The array. This array is passed by reference because it is modified by
 * the function. This means you must pass it a real variable and not
 * a function returning an array because only actual variables may be
 * passed by reference.
 * </p>
 * @return mixed|false the value of the last element or false for empty array.
 * @meta
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'end',
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
    '9af91ecc32a036aa5c313d84f16855d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Rewind the internal array pointer
 * @link https://php.net/manual/en/function.prev.php
 * @param array|object &$array <p>
 * The input array.
 * </p>
 * @return mixed|false the array value in the previous place that\'s pointed to by
 * the internal array pointer, or false if there are no more
 * elements.
 * @meta
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'prev',
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
    'ec99cbac6a0bd16e642a2aeee148e3f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Advance the internal array pointer of an array
 * @link https://php.net/manual/en/function.next.php
 * @param array|object &$array <p>
 * The array being affected.
 * </p>
 * @return mixed|false the array value in the next place that\'s pointed to by the
 * internal array pointer, or false if there are no more elements.
 * @meta
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'next',
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
    '7d22e1a4ab1b87ff277696f2795a7485' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Set the internal pointer of an array to its first element
 * @link https://php.net/manual/en/function.reset.php
 * @param array|object &$array <p>
 * The input array.
 * </p>
 * @return mixed|false the value of the first array element, or false if the array is
 * empty.
 * @meta
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'reset',
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
    '08a77958f1675bf79c691e0b3b61bde5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return the current element in an array
 * @link https://php.net/manual/en/function.current.php
 * @param array|object $array <p>
 * The array.
 * </p>
 * @return mixed|false The current function simply returns the
 * value of the array element that\'s currently being pointed to by the
 * internal pointer. It does not move the pointer in any way. If the
 * internal pointer points beyond the end of the elements list or the array is
 * empty, current returns false.
 * @meta
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'current',
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
    '10841f7d535345209e494f0bedb39664' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Fetch a key from an array
 * @link https://php.net/manual/en/function.key.php
 * @param array|object $array <p>
 * The array.
 * </p>
 * @return int|string|null The key function simply returns the
 * key of the array element that\'s currently being pointed to by the
 * internal pointer. It does not move the pointer in any way. If the
 * internal pointer points beyond the end of the elements list or the array is
 * empty, key returns null.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'key',
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
    '87cc3ecba4ff67eab6b6af5133faf959' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Find lowest value
 * @link https://php.net/manual/en/function.min.php
 * @param array|mixed $value Array to look through or first value to compare
 * @param mixed ...$values any comparable value
 * @return mixed min returns the numerically lowest of the
 * parameter values.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'min',
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
    '48ed07e1198864f8d6e6a53a13360d99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Find highest value
 * @link https://php.net/manual/en/function.max.php
 * @param array|mixed $value Array to look through or first value to compare
 * @param mixed ...$values any comparable value
 * @return mixed max returns the numerically highest of the
 * parameter values, either within a arg array or two arguments.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'max',
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
    '459083c01833f8efded6d7bc875d2834' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks if a value exists in an array
 * @link https://php.net/manual/en/function.in-array.php
 * @param mixed $needle <p>
 * The searched value.
 * </p>
 * <p>
 * If needle is a string, the comparison is done
 * in a case-sensitive manner.
 * </p>
 * @param array $haystack <p>
 * The array.
 * </p>
 * @param bool $strict [optional] <p>
 * If the third parameter strict is set to true
 * then the in_array function will also check the
 * types of the
 * needle in the haystack.
 * </p>
 * @return bool true if needle is found in the array,
 * false otherwise.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'in_array',
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
    '6d070f0c17dc345382fba77a0e9b9635' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Searches the array for a given value and returns the first corresponding key if successful
 * @link https://php.net/manual/en/function.array-search.php
 * @param mixed $needle <p>
 * The searched value.
 * </p>
 * <p>
 * If needle is a string, the comparison is done
 * in a case-sensitive manner.
 * </p>
 * @param array $haystack <p>
 * The array.
 * </p>
 * @param bool $strict [optional] <p>
 * If the third parameter strict is set to true
 * then the array_search function will also check the
 * types of the
 * needle in the haystack.
 * </p>
 * @return int|string|false the key for needle if it is found in the
 * array, false otherwise.
 * </p>
 * <p>
 * If needle is found in haystack
 * more than once, the first matching key is returned. To return the keys for
 * all matching values, use array_keys with the optional
 * search_value parameter instead.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_search',
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
    '68432dd2576e2804fc56f409e43289af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Import variables into the current symbol table from an array
 * @link https://php.net/manual/en/function.extract.php
 * @param array &$array <p>
 * Note that prefix is only required if
 * extract_type is EXTR_PREFIX_SAME,
 * EXTR_PREFIX_ALL, EXTR_PREFIX_INVALID
 * or EXTR_PREFIX_IF_EXISTS. If
 * the prefixed result is not a valid variable name, it is not
 * imported into the symbol table. Prefixes are automatically separated from
 * the array key by an underscore character.
 * </p>
 * @param int $flags [optional] <p>
 * The way invalid/numeric keys and collisions are treated is determined
 * by the extract_type. It can be one of the
 * following values:
 * EXTR_OVERWRITE
 * If there is a collision, overwrite the existing variable.</p>
 * @param string $prefix [optional] <p>Only overwrite the variable if it already exists in the
 * current symbol table, otherwise do nothing. This is useful
 * for defining a list of valid variables and then extracting
 * only those variables you have defined out of
 * $_REQUEST, for example.</p>
 * @return int the number of variables successfully imported into the symbol
 * table.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'extract',
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
    '8b2e1c0589818c7442c36903b112caee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Create array containing variables and their values
 * @link https://php.net/manual/en/function.compact.php
 * @param mixed $var_name <p>
 * compact takes a variable number of parameters.
 * Each parameter can be either a string containing the name of the
 * variable, or an array of variable names. The array can contain other
 * arrays of variable names inside it; compact
 * handles it recursively.
 * </p>
 * @param mixed ...$var_names
 * @return array the output array with all the variables added to it.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'compact',
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
    'd31737009ec8e8155a8f51a3ad9fd942' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Fill an array with values
 * @link https://php.net/manual/en/function.array-fill.php
 * @param int $start_index <p>
 * The first index of the returned array.
 * Supports non-negative indexes only.
 * </p>
 * @param int $count <p>
 * Number of elements to insert
 * </p>
 * @param mixed $value <p>
 * Value to use for filling
 * </p>
 * @return array the filled array
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_fill',
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
    '60e42c76daeed94679609e33f357f653' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Fill an array with values, specifying keys
 * @link https://php.net/manual/en/function.array-fill-keys.php
 * @param array $keys <p>
 * Array of values that will be used as keys. Illegal values
 * for key will be converted to string.
 * </p>
 * @param mixed $value <p>
 * Value to use for filling
 * </p>
 * @return array the filled array
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_fill_keys',
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
    '92982e703183bcfc10da7a2b42e88c68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Create an array containing a range of elements
 * @link https://php.net/manual/en/function.range.php
 * @param mixed $start <p>
 * First value of the sequence.
 * </p>
 * @param mixed $end <p>
 * The sequence is ended upon reaching the end value.
 * </p>
 * @param int|float $step [optional] <p>
 * If a step value is given, it will be used as the
 * increment between elements in the sequence. step
 * should be given as a positive number. If not specified,
 * step will default to 1.
 * </p>
 * @return array an array of elements from start to
 * end, inclusive.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'range',
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
    '81bb17d11ccffd6cd6bc07956debeec2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sort multiple or multi-dimensional arrays
 * @link https://php.net/manual/en/function.array-multisort.php
 * @param array &$array <p>
 * An array being sorted.
 * </p>
 * @param  &...$rest [optional] <p>
 * More arrays, optionally followed by sort order and flags.
 * Only elements corresponding to equivalent elements in previous arrays are compared.
 * In other words, the sort is lexicographical.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_multisort',
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
    '2e9890007ab3a29b9bbb5c74c0c2b0e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Push elements onto the end of array
 * Since 7.3.0 this function can be called with only one parameter.
 * For earlier versions at least two parameters are required.
 * @link https://php.net/manual/en/function.array-push.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @param mixed ...$values <p>
 * The pushed variables.
 * </p>
 * @return int the number of elements in the array.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_push',
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
    'c5c69b466fb0773488d8141ba7b7371b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Pop the element off the end of array
 * @link https://php.net/manual/en/function.array-pop.php
 * @param array &$array <p>
 * The array to get the value from.
 * </p>
 * @return mixed|null the last value of array.
 * If array is empty (or is not an array),
 * null will be returned.
 * @meta
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_pop',
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
    '8c62e1a45484b3cca795fc1872ca498d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Shift an element off the beginning of array
 * @link https://php.net/manual/en/function.array-shift.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @return mixed|null the shifted value, or null if array is
 * empty or is not an array.
 * @meta
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_shift',
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
    '351f34b7d81cfd7f4ecd0cb90da0e366' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepend elements to the beginning of an array
 * Since 7.3.0 this function can be called with only one parameter.
 * For earlier versions at least two parameters are required.
 * @link https://php.net/manual/en/function.array-unshift.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @param mixed ...$values <p>
 * The prepended variables.
 * </p>
 * @return int the number of elements in the array.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_unshift',
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
    'b7f50905701c085303d8b04457e29a47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Remove a portion of the array and replace it with something else
 * @link https://php.net/manual/en/function.array-splice.php
 * @param array &$array <p>
 * The input array.
 * </p>
 * @param int $offset <p>
 * If offset is positive then the start of removed
 * portion is at that offset from the beginning of the
 * input array. If offset
 * is negative then it starts that far from the end of the
 * input array.
 * </p>
 * @param int|null $length [optional] <p>
 * If length is omitted, removes everything
 * from offset to the end of the array. If
 * length is specified and is positive, then
 * that many elements will be removed. If
 * length is specified and is negative then
 * the end of the removed portion will be that many elements from
 * the end of the array. Tip: to remove everything from
 * offset to the end of the array when
 * replacement is also specified, use
 * count($input) for
 * length.
 * </p>
 * @param mixed $replacement [optional] <p>
 * If replacement array is specified, then the
 * removed elements are replaced with elements from this array.
 * </p>
 * <p>
 * If offset and length
 * are such that nothing is removed, then the elements from the
 * replacement array are inserted in the place
 * specified by the offset. Note that keys in
 * replacement array are not preserved.
 * </p>
 * <p>
 * If replacement is just one element it is
 * not necessary to put array()
 * around it, unless the element is an array itself.
 * </p>
 * @return array the array consisting of the extracted elements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_splice',
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
    '658020787ae4503a4c522b457c82ba80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Extract a slice of the array
 * @link https://php.net/manual/en/function.array-slice.php
 * @param array $array <p>
 * The input array.
 * </p>
 * @param int $offset <p>
 * If offset is non-negative, the sequence will
 * start at that offset in the array. If
 * offset is negative, the sequence will
 * start that far from the end of the array.
 * </p>
 * @param int|null $length [optional] <p>
 * If length is given and is positive, then
 * the sequence will have that many elements in it. If
 * length is given and is negative then the
 * sequence will stop that many elements from the end of the
 * array. If it is omitted, then the sequence will have everything
 * from offset up until the end of the
 * array.
 * </p>
 * @param bool $preserve_keys [optional] <p>
 * Note that array_slice will reorder and reset the
 * array indices by default. You can change this behaviour by setting
 * preserve_keys to true.
 * </p>
 * @return array the slice.
 * @meta
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_slice',
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
    '509bff58df3f5df1cbc286fb9017d93c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Merges the elements of one or more arrays together (if the input arrays have the same string keys, then the later value for that key will overwrite the previous one; if the arrays contain numeric keys, the later value will be appended)
 * Since 7.4.0 this function can be called without any parameter, and it will return empty array.
 * @link https://php.net/manual/en/function.array-merge.php
 * @param array ...$arrays [optional] <p>
 * Variable list of arrays to merge.
 * </p>
 * @return array the resulting array.
 * @meta
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'expectedvalues' => 'JetBrains\\PhpStorm\\ExpectedValues',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'phpstormstubselementavailable' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'array_merge',
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