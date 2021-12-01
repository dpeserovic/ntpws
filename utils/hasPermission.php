<?php
function hasPermission($role, $permission, $action)
{
    $permissions = array(
        'administrator' => array('editUsers', 'createNews', 'editNews', 'deleteNews', 'archiveNews'),
        'editor' => array('createNews', 'editNews', 'archiveNews'),
        'user' => array('createNews')
    );
    if (in_array($permission, $permissions[$role])) {
        return $action;
    } else {
        return '';
    }
}
