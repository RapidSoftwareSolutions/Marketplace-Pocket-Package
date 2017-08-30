<?php
$routes = [
    'metadata',
    'getRequestToken',
    'getAccessToken',
    'createItem',
    'archiveItem',
    'unarchiveItem',
    'addFavoriteItem',
    'removeFavoriteItem',
    'deleteItem',
    'addTagsToItem',
    'removeTagsFromItem',
    'replaceTagsFromItem',
    'removeAllTags',
    'renameTag',
    'getAllItems',
    'postMultipleActions'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

