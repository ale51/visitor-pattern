<?php
namespace lib;

use PhpParser\Node;
use PhpParser\NodeVisitor;
use PhpParser\NodeVisitorAbstract;

/**
 * ※ you can use NodeVisitorAbstract.
 *
 * Class MyNodeVisitor
 * @package lib
 */
class NodeVisitorImpl implements NodeVisitor {

    public function enterNode(Node $node){
        $node->value = "Hello, World!";
    }

    public function beforeTraverse(array $nodes){

    }

    public function leaveNode(Node $node){

    }

    public function afterTraverse(array $nodes){

    }
}