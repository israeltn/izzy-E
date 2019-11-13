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
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => '18',
                'title' => 'crm_status_create',
            ],
            [
                'id'    => '19',
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => '20',
                'title' => 'crm_status_show',
            ],
            [
                'id'    => '21',
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => '22',
                'title' => 'crm_status_access',
            ],
            [
                'id'    => '23',
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => '24',
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => '25',
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => '26',
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => '27',
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => '28',
                'title' => 'crm_note_create',
            ],
            [
                'id'    => '29',
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => '30',
                'title' => 'crm_note_show',
            ],
            [
                'id'    => '31',
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => '32',
                'title' => 'crm_note_access',
            ],
            [
                'id'    => '33',
                'title' => 'crm_document_create',
            ],
            [
                'id'    => '34',
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => '35',
                'title' => 'crm_document_show',
            ],
            [
                'id'    => '36',
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => '37',
                'title' => 'crm_document_access',
            ],
            [
                'id'    => '38',
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => '39',
                'title' => 'currency_create',
            ],
            [
                'id'    => '40',
                'title' => 'currency_edit',
            ],
            [
                'id'    => '41',
                'title' => 'currency_show',
            ],
            [
                'id'    => '42',
                'title' => 'currency_delete',
            ],
            [
                'id'    => '43',
                'title' => 'currency_access',
            ],
            [
                'id'    => '44',
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => '45',
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => '46',
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => '47',
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => '48',
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => '49',
                'title' => 'income_source_create',
            ],
            [
                'id'    => '50',
                'title' => 'income_source_edit',
            ],
            [
                'id'    => '51',
                'title' => 'income_source_show',
            ],
            [
                'id'    => '52',
                'title' => 'income_source_delete',
            ],
            [
                'id'    => '53',
                'title' => 'income_source_access',
            ],
            [
                'id'    => '54',
                'title' => 'client_status_create',
            ],
            [
                'id'    => '55',
                'title' => 'client_status_edit',
            ],
            [
                'id'    => '56',
                'title' => 'client_status_show',
            ],
            [
                'id'    => '57',
                'title' => 'client_status_delete',
            ],
            [
                'id'    => '58',
                'title' => 'client_status_access',
            ],
            [
                'id'    => '59',
                'title' => 'project_status_create',
            ],
            [
                'id'    => '60',
                'title' => 'project_status_edit',
            ],
            [
                'id'    => '61',
                'title' => 'project_status_show',
            ],
            [
                'id'    => '62',
                'title' => 'project_status_delete',
            ],
            [
                'id'    => '63',
                'title' => 'project_status_access',
            ],
            [
                'id'    => '64',
                'title' => 'client_management_access',
            ],
            [
                'id'    => '65',
                'title' => 'client_create',
            ],
            [
                'id'    => '66',
                'title' => 'client_edit',
            ],
            [
                'id'    => '67',
                'title' => 'client_show',
            ],
            [
                'id'    => '68',
                'title' => 'client_delete',
            ],
            [
                'id'    => '69',
                'title' => 'client_access',
            ],
            [
                'id'    => '70',
                'title' => 'project_create',
            ],
            [
                'id'    => '71',
                'title' => 'project_edit',
            ],
            [
                'id'    => '72',
                'title' => 'project_show',
            ],
            [
                'id'    => '73',
                'title' => 'project_delete',
            ],
            [
                'id'    => '74',
                'title' => 'project_access',
            ],
            [
                'id'    => '75',
                'title' => 'note_create',
            ],
            [
                'id'    => '76',
                'title' => 'note_edit',
            ],
            [
                'id'    => '77',
                'title' => 'note_show',
            ],
            [
                'id'    => '78',
                'title' => 'note_delete',
            ],
            [
                'id'    => '79',
                'title' => 'note_access',
            ],
            [
                'id'    => '80',
                'title' => 'document_create',
            ],
            [
                'id'    => '81',
                'title' => 'document_edit',
            ],
            [
                'id'    => '82',
                'title' => 'document_show',
            ],
            [
                'id'    => '83',
                'title' => 'document_delete',
            ],
            [
                'id'    => '84',
                'title' => 'document_access',
            ],
            [
                'id'    => '85',
                'title' => 'transaction_create',
            ],
            [
                'id'    => '86',
                'title' => 'transaction_edit',
            ],
            [
                'id'    => '87',
                'title' => 'transaction_show',
            ],
            [
                'id'    => '88',
                'title' => 'transaction_delete',
            ],
            [
                'id'    => '89',
                'title' => 'transaction_access',
            ],
            [
                'id'    => '90',
                'title' => 'client_report_create',
            ],
            [
                'id'    => '91',
                'title' => 'client_report_edit',
            ],
            [
                'id'    => '92',
                'title' => 'client_report_show',
            ],
            [
                'id'    => '93',
                'title' => 'client_report_delete',
            ],
            [
                'id'    => '94',
                'title' => 'client_report_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
