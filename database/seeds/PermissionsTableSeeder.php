<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'region_create',
            ],
            [
                'id'    => 18,
                'title' => 'region_edit',
            ],
            [
                'id'    => 19,
                'title' => 'region_show',
            ],
            [
                'id'    => 20,
                'title' => 'region_delete',
            ],
            [
                'id'    => 21,
                'title' => 'region_access',
            ],
            [
                'id'    => 22,
                'title' => 'place_create',
            ],
            [
                'id'    => 23,
                'title' => 'place_edit',
            ],
            [
                'id'    => 24,
                'title' => 'place_show',
            ],
            [
                'id'    => 25,
                'title' => 'place_delete',
            ],
            [
                'id'    => 26,
                'title' => 'place_access',
            ],
            [
                'id'    => 27,
                'title' => 'profile_create',
            ],
            [
                'id'    => 28,
                'title' => 'profile_edit',
            ],
            [
                'id'    => 29,
                'title' => 'profile_show',
            ],
            [
                'id'    => 30,
                'title' => 'profile_delete',
            ],
            [
                'id'    => 31,
                'title' => 'profile_access',
            ],
            [
                'id'    => 32,
                'title' => 'address_create',
            ],
            [
                'id'    => 33,
                'title' => 'address_edit',
            ],
            [
                'id'    => 34,
                'title' => 'address_show',
            ],
            [
                'id'    => 35,
                'title' => 'address_delete',
            ],
            [
                'id'    => 36,
                'title' => 'address_access',
            ],
            [
                'id'    => 37,
                'title' => 'category_create',
            ],
            [
                'id'    => 38,
                'title' => 'category_edit',
            ],
            [
                'id'    => 39,
                'title' => 'category_show',
            ],
            [
                'id'    => 40,
                'title' => 'category_delete',
            ],
            [
                'id'    => 41,
                'title' => 'category_access',
            ],
            [
                'id'    => 42,
                'title' => 'subcategory_create',
            ],
            [
                'id'    => 43,
                'title' => 'subcategory_edit',
            ],
            [
                'id'    => 44,
                'title' => 'subcategory_show',
            ],
            [
                'id'    => 45,
                'title' => 'subcategory_delete',
            ],
            [
                'id'    => 46,
                'title' => 'subcategory_access',
            ],
            [
                'id'    => 47,
                'title' => 'product_create',
            ],
            [
                'id'    => 48,
                'title' => 'product_edit',
            ],
            [
                'id'    => 49,
                'title' => 'product_show',
            ],
            [
                'id'    => 50,
                'title' => 'product_delete',
            ],
            [
                'id'    => 51,
                'title' => 'product_access',
            ],
            [
                'id'    => 52,
                'title' => 'featured_product_create',
            ],
            [
                'id'    => 53,
                'title' => 'featured_product_edit',
            ],
            [
                'id'    => 54,
                'title' => 'featured_product_show',
            ],
            [
                'id'    => 55,
                'title' => 'featured_product_delete',
            ],
            [
                'id'    => 56,
                'title' => 'featured_product_access',
            ],
            [
                'id'    => 57,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
