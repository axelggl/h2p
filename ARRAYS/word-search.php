<?php

function searchWord(array $board, string $searchString): bool {
    // Obtenir le nombre de lignes et de colonnes dans le tableau
    $rows = count($board);
    $cols = count($board[0]);
    // Itérer à travers chaque ligne du tableau
    for ($i = 0; $i < $rows; $i++) {
        // Itérer à travers chaque colonne du tableau
        for ($j = 0; $j < $cols; $j++) {
            // Si la cellule actuelle correspond au premier caractère de la chaîne de recherche,
            // effectuer une recherche en profondeur pour trouver les caractères restants
            if ($board[$i][$j] === $searchString[0] && dfs($board, $i, $j, $searchString, 0)) {
                return true;
            }
        }
    }
    // Si la chaîne de recherche n'est pas trouvée dans le tableau, retourner false
    return false;
}

function dfs(array &$board, int $row, int $col, string $searchString, int $index): bool {
    // Cas de base : Si tous les caractères de la chaîne de recherche ont été trouvés, retourner true
    if ($index === strlen($searchString)) {
        return true;
    }
    // Obtenir le nombre de lignes et de colonnes dans le tableau
    $rows = count($board);
    $cols = count($board[0]);
    // Vérifier si la cellule actuelle est hors limites ou ne correspond pas au caractère actuel de la chaîne de recherche
    if ($row < 0 || $row >= $rows || $col < 0 || $col >= $cols || $board[$row][$col] !== $searchString[$index]) {
        // Si l'une des conditions est remplie, retourner false
        return false;
    }
    // Marquer la cellule actuelle comme visitée en changeant sa valeur en '#'
    $temp = $board[$row][$col];
    $board[$row][$col] = '#';
    // Rechercher récursivement dans les quatre directions (haut, bas, gauche, droite)
    $found = dfs($board, $row - 1, $col, $searchString, $index + 1) ||
             dfs($board, $row + 1, $col, $searchString, $index + 1) ||
             dfs($board, $row, $col - 1, $searchString, $index + 1) ||
             dfs($board, $row, $col + 1, $searchString, $index + 1);
    // Restaurer la valeur d'origine de la cellule actuelle
    $board[$row][$col] = $temp;
    // Retourner si la chaîne de recherche a été trouvée ou non
    return $found;
}
?>