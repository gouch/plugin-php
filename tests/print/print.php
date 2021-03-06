<?php
print("Hello World");

print "print() also works without parentheses.";

print "This spans
multiple lines. The newlines will be
output as well";

print "This spans\nmultiple lines. The newlines will be\noutput as well.";

print "escaping characters is done \"Like this\".";

// You can use variables inside a print statement
$foo = "foobar";
$bar = "barbaz";

print "foo is $foo"; // foo is foobar

// Using single quotes will print the variable name, not the value
print 'foo is $foo'; // foo is $foo

// If you are not using any other characters, you can just print variables
print $foo;          // foobar

print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;

// However, the following examples will work:
($some_var) ? print 'true' : print 'false';
// print is also a construct, but
// it behaves like a function, so
// it may be used in this context.

print $some_var ? 'true': 'false';
print $some_var ? 'VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString': 'VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString';

print 'VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString' . 'VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString';
print 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000;
print(1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000);
print 'foo' . ($bar ? 2 : 1);
print $veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable->veryVeryVeryVeryVeryVeryLongProperty;

print str_replace('test', 'test', 'test');
print(str_replace('test', 'test', 'test'));

print(1);
print (1);
print (((1)));

print esc_html(
    sprintf(
        __(
            'Hi there. Your recent order on %s has been completed. ' .
            'Your order details are shown below for your reference:',
            'woocommerce'
        ),
        get_option('blogname')
    )
);
