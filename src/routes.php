<?php
$routes = [
    'metadata',
    'getRequestToken',
    'getAccessToken',
    'createItem', //1
    'archiveItem', // 1
    'unarchiveItem', // 1
    'addFavoriteItem', //1
    'removeFavoriteItem', // 1
    'deleteItem', // 1
    'addTagsToItem', // 1
    'removeTagsFromItem', // 1
    'replaceTagsFromItem', // 1
    'removeAllTags', // 1
    'renameTag', // 1
    'getAllItems',
    'postMultipleActions'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

