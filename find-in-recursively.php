<?php
function findIn(string $valueKey)
{
        $tab = [
        "name" => "forIn",
        "type" => "function",
        "arguments" => [
            "firstParam" => [
                "paramType" => "string",
                "description" => "the value key to find"
            ],
            "secondParam" => "array"
        ],
        "return" => "string or bool"
    ];
    return key_exists($valueKey, $tab);
}
