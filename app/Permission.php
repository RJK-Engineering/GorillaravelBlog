<?php

namespace App;

class Permission extends \Spatie\Permission\Models\Permission
{
    public static function defaultPermissions() {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',

            'view_blogs',
            'add_blogs',
            'edit_blogs',
            'delete_blogs',

            'view_posts',
            'add_posts',
            'edit_posts',
            'delete_posts',

            'view_permissions',
            'add_permissions',
            'edit_permissions',
            'delete_permissions',

            'lock_comments',
        ];
    }

}
