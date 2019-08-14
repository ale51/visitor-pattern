<?php

require_once "vendor/autoload.php";

use PhpParser\ParserFactory;
use lib\NodeVisitorImpl;

$code = <<<EOF
<?php
echo "Hello!";
EOF;

$parser = (new PhpParser\ParserFactory)->create(ParserFactory::PREFER_PHP7);
$ast = $parser->parse($code);

var_dump($ast);

$traverser = new \PhpParser\NodeTraverser();
$traverser->addVisitor(new NodeVisitorImpl());
$ast = $traverser->traverse($ast);

var_dump($ast);

$prettyPrinter = new PhpParser\PrettyPrinter\Standard();
$code = $prettyPrinter->prettyPrintFile($ast);
echo $code . "\n";
