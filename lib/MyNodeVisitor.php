<?php
namespace lib;

use PhpParser\Node;
use PhpParser\NodeVisitorAbstract;

class MyNodeVisitor extends NodeVisitorAbstract{
    public function enterNode(Node $node){
        if ($node instanceof Node\Scalar\String_) {
            $node->value = "Hello, World!";
        }
    }
}