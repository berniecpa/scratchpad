<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 19,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 20,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 23,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 24,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 25,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 28,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 29,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 30,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 33,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 34,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 35,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 38,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 39,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 40,
                'title' => 'crm_document_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
