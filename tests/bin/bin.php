<?php
$a++;
++$a;

+$a;
-$a;

$a + 1;
$a += 1;
$a - 1;
$a -= 1;
$a * 1;
$a *= 1;
$a / 1;
$a /= 1;
$a % 1;
$a %= 1;
$a ** 1;

$a & $b;
$a &= $b;
$a | $b;
$a |= $b;
$a ^ $b;
$a ^= $b;
~ $a;
$a << $b;
$a <<= $b;
$a >> $b;
$a >>= $b;

$a == $b;
$a === $b;
$a != $b;
$a <> $b;
$a !== $b;
$a < $b;
$a > $b;
$a <= $b;
$a >= $b;
$a <=> $b;

$a and $b;
$a or $b;
$a xor $b;
!$a;
$a && $b;
$a || $b;

$a . $b;
$a .= $b;

$a instanceof stdClass;

$output = `ls -al`;
$a = (bool) "test";

$b = &$a;

$a ?? $b;

$this->reallyLong->testPropertyName = 'a' . $someOtherTest . 'n' . $oneLastOneToMakeLineLong;

'tesssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssst' . 'test';

$someReallyReallyReallyLongBooleanVariable + $someReallyReallyReallyLongBooleanVariable;
$someReallyReallyReallyLongBooleanVariable . $someReallyReallyReallyLongBooleanVariable;
$someReallyReallyReallyLongBooleanVariable .= $someReallyReallyReallyLongBooleanVariable;
++$someReallyReallyReallyLongBooleanVariableWithReallyReallyReallyReallyReallyReallyLongName;
--$someReallyReallyReallyLongBooleanVariableWithReallyReallyReallyReallyReallyReallyLongName;
$someReallyReallyReallyLongBooleanVariableWithReallyReallyReallyReallyReallyReallyLongName++;
$someReallyReallyReallyLongBooleanVariableWithReallyReallyReallyReallyReallyReallyLongName--;
$someReallyReallyReallyLongBooleanVariable + $someReallyReallyReallyLongBooleanVariable - $someReallyReallyReallyLongBooleanVariable;

$value = isset($_POST['menu-item-dropdown']) &&
isset($_POST['menu-item-dropdown'][$menuItemDbId])
    ? 'enabled'
    : 'disabled';

($var && $var && $var)->call();
-($var && $var && $var);
-($veryVeryVeryVeryVeryLongVariable && $veryVeryVeryVeryVeryLongVariable && $veryVeryVeryVeryVeryLongVariable);
($veryVeryVeryVeryVeryLongVariable && $veryVeryVeryVeryVeryLongVariable && $veryVeryVeryVeryVeryLongVariable)->call();
($veryVeryVeryVeryVeryLongVariable && $veryVeryVeryVeryVeryLongVariable && $veryVeryVeryVeryVeryLongVariable)['key'];

if (
    get_option('woocommerce_product_cart_actions_notification_more_cart') === 'yes' &&
    count($cartItems) > 0
) {
    $a = 1;
}

function f()
{
    if (
        get_option('woocommerce_product_cart_actions_notification_more_cart') === 'yes'
        && count($cartItems) > 0
    ) {
        $a = 1;
    }
}

$accelerator =
    (extension_loaded('eaccelerator') && ini_get('eaccelerator.enable')) ||
    (extension_loaded('apc') && ini_get('apc.enabled')) ||
    (extension_loaded('Zend Optimizer+') && ini_get('zend_optimizerplus.enable')) ||
    (extension_loaded('Zend OPcache') && ini_get('opcache.enable')) ||
    (extension_loaded('xcache') && ini_get('xcache.cacher')) ||
    (extension_loaded('wincache') && ini_get('wincache.ocenabled'));

while ($a < 10) $a + 1;

$a =  'string' . 'veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVery' ? 1 : 2;
return 'string' . 'veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVery' ? 1 : 2;
call('string' . 'veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVery' ? 1 : 2, 'arg');

$var = $someReallyReallyReallyLongBooleanVariable * $someReallyReallyReallyLongBooleanVariable / 100;
$var = ($someReallyReallyReallyLongBooleanVariable * $someReallyReallyReallyLongBooleanVariable) / 100;
$var = $someReallyReallyReallyLongBooleanVariable * ($someReallyReallyReallyLongBooleanVariable / 100);
$var = $someReallyReallyReallyLongBooleanVariable + $someReallyReallyReallyLongBooleanVariable % 100;
$var = $someReallyReallyReallyLongBooleanVariable * $someReallyReallyReallyLongBooleanVariable % 100;
$var = $someReallyReallyReallyLongBooleanVariable << $someReallyReallyReallyLongBooleanVariable << 100;
$var = $someReallyReallyReallyLongBooleanVariable ** $someReallyReallyReallyLongBooleanVariable ** 100;
$var = $someReallyReallyReallyLongBooleanVariable + $someReallyReallyReallyLongBooleanVariable * 100;
$var = ($someReallyReallyReallyLongBooleanVariable + $someReallyReallyReallyLongBooleanVariable) * 100;
$var = $someReallyReallyReallyLongBooleanVariable + $someReallyReallyReallyLongBooleanVariable % 100;
$var = $someReallyReallyReallyLongBooleanVariable % $someReallyReallyReallyLongBooleanVariable + 100;

if ($someReallyReallyReallyLongBooleanVariable * $someReallyReallyReallyLongBooleanVariable / 100) {}
if (($someReallyReallyReallyLongBooleanVariable * $someReallyReallyReallyLongBooleanVariable) / 100) {}
if ($someReallyReallyReallyLongBooleanVariable * ($someReallyReallyReallyLongBooleanVariable / 100)) {}
if ($someReallyReallyReallyLongBooleanVariable + $someReallyReallyReallyLongBooleanVariable % 100) {}
if ($someReallyReallyReallyLongBooleanVariable * $someReallyReallyReallyLongBooleanVariable % 100) {}
if ($someReallyReallyReallyLongBooleanVariable << $someReallyReallyReallyLongBooleanVariable << 100) {}
if ($someReallyReallyReallyLongBooleanVariable ** $someReallyReallyReallyLongBooleanVariable ** 100) {}
if ($someReallyReallyReallyLongBooleanVariable + $someReallyReallyReallyLongBooleanVariable * 100) {}
if (($someReallyReallyReallyLongBooleanVariable + $someReallyReallyReallyLongBooleanVariable) * 100) {}
if ($someReallyReallyReallyLongBooleanVariable + $someReallyReallyReallyLongBooleanVariable % 100) {}
if ($someReallyReallyReallyLongBooleanVariable % $someReallyReallyReallyLongBooleanVariable + 100) {}

echo 'This ' .
    'string' .
    'string' .
    ('string') .
    'string' .
    (100 + 100) .
    'string ' .
    (100 - 100) .
    'was ' .
    (100 * 100) .
    'made ' .
    (100 / 100) .
    'with concatenation.';

if ($someReallyReallyReallyLongBooleanVariableWithRddllyReallyLongName || []) {}
if ($someReallyReallyReallyLongBooleanVariableWithReallyReallyReallyReallyReallyReallyLongName || []) {}
