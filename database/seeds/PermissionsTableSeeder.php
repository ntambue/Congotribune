<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'content_management_system_access',
            ],
            [
                'id'    => '18',
                'title' => 'category_create',
            ],
            [
                'id'    => '19',
                'title' => 'category_edit',
            ],
            [
                'id'    => '20',
                'title' => 'category_show',
            ],
            [
                'id'    => '21',
                'title' => 'category_delete',
            ],
            [
                'id'    => '22',
                'title' => 'category_access',
            ],
            [
                'id'    => '23',
                'title' => 'tag_create',
            ],
            [
                'id'    => '24',
                'title' => 'tag_edit',
            ],
            [
                'id'    => '25',
                'title' => 'tag_show',
            ],
            [
                'id'    => '26',
                'title' => 'tag_delete',
            ],
            [
                'id'    => '27',
                'title' => 'tag_access',
            ],
            [
                'id'    => '28',
                'title' => 'post_create',
            ],
            [
                'id'    => '29',
                'title' => 'post_edit',
            ],
            [
                'id'    => '30',
                'title' => 'post_show',
            ],
            [
                'id'    => '31',
                'title' => 'post_delete',
            ],
            [
                'id'    => '32',
                'title' => 'post_access',
            ],
            [
                'id'    => '33',
                'title' => 'advertising_access',
            ],
            [
                'id'    => '34',
                'title' => 'index_ad_create',
            ],
            [
                'id'    => '35',
                'title' => 'index_ad_edit',
            ],
            [
                'id'    => '36',
                'title' => 'index_ad_show',
            ],
            [
                'id'    => '37',
                'title' => 'index_ad_delete',
            ],
            [
                'id'    => '38',
                'title' => 'index_ad_access',
            ],
            [
                'id'    => '39',
                'title' => 'ads_category_create',
            ],
            [
                'id'    => '40',
                'title' => 'ads_category_edit',
            ],
            [
                'id'    => '41',
                'title' => 'ads_category_show',
            ],
            [
                'id'    => '42',
                'title' => 'ads_category_delete',
            ],
            [
                'id'    => '43',
                'title' => 'ads_category_access',
            ],
            [
                'id'    => '44',
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);

    }
}
