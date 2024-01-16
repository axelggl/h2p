<?php

function invertTree(?BinaryNode $root): ?BinaryNode
{
    if ($root === null) {
        return null;
    }

    $temp = $root->left;
    $root->left = $root->right;
    $root->right = $temp;

    invertTree($root->left);
    invertTree($root->right);

    return $root;
}
