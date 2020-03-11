<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Sidebar configuration
    |--------------------------------------------------------------------------
    |
    | Use this configuration format for a static sidebar menu by adding or
    | removing items. This config is loaded from
    | Http\ViewComposers\SidebarViewComposer.php
    | In that file you can change how to get the sidebar menu configuration,
    | instead of using a static file, you can use a Model to obtain the
    | menu items dinamically from database applying own business logic.
    |
    */
    [
        'text' => 'Main Navigation',
        'heading' => true,
        'translate' => 'sidebar.heading.HEADER'
    ],
    [
        'text' => 'Clients',
        'route' => 'client',
        'icon' => 'icon-people',
        'alert' => '3',
        'label' => 'badge badge-info',
        'submenu' => [
            [
                'text' => 'Register Client',
                'route' => '/client/register'
            ],
            [
                'text' => 'Pending Approval',
                'route' => '/client/pendingApproval'
            ],
            [
                'text' => 'Closed Clients',
                'route' => '/client/closed'
            ],
            [
                'text' => 'Rejected Clients',
                'route' => '/client/rejected'
            ],
            [
                'text' => 'Transfer Client',
                'route' => 'client/transfer'
            ]
        ],
        'translate' => 'sidebar.nav.DASHBOARD'
    ],
    [
        'text' => 'Groups',
        'route' => 'groups',
        'icon' => 'fa fa-users text-black',
        'alert' => '30',
        'submenu' => [
            [
                'text' => ' Groups',
                'route' => '/groups/groups'
            ],
            [
                'text'=> 'Centers',
                'route'=>'/groups/centers'
            ],

            [
                'text'=> 'Transfer',
                'route'=>'/groups/transfer'
            ],
    ],
    'translate' => 'sidebar.nav.DASHBOARD'
],


    [
        'text' => 'Loans',
        'route' => 'loan',
        'icon' => 'icon-wallet',
        'alert' => '3',
        'label' => 'badge badge-info',
        'submenu' => [
            [
                'text' => 'View Loans',
                'route' => '/loan/loans',
            ],
            [
                'text' => 'New Loan',
                'route' => 'loan/create'
            ],
            [
                'text' => 'Overpaid Loans',
                'route' => '#'
            ],
            [
                'text' => 'Pending Approval',
                'route' => 'loan/pending-approval'
            ],
            [
                'text' => 'Pending Second Approval',
                'route' => 'loan/pendingSecondApproval'
            ],
            [
                'text' => 'Awaiting Disbursement',
                'route' => '#'
            ],
            [
                'text' => 'Rejected',
                'route' => '#'
            ],
            [
                'text' => 'Withdrawn',
                'route' => '#'
            ],
            [
                'text' => 'Written Off Loans',
                'route' => '#'
            ],
            [
                'text' => 'Closed',
                'route' => '#'
            ],
            [
                'text' => 'Loan Schedule Pending',
                'route' => '#'
            ],
            [
                'text' => 'Loan Calculator',
                'route' => '/loan/calculator'
            ]
        ],
        'translate' => 'sidebar.nav.DASHBOARD'
    ],
    [
        'text' => 'Reports',
        'route' => 'reports',
        'icon' => 'icon-book-open',
        'alert' => '30',
        'submenu' => [
            [
                'text' => 'Client Reports',
                'route' => '/reports/clientReports'
            ],
            [
                'text' => 'Group Reports',
                'route' => '/reports/groupReports'
            ],
            [
                'text' => 'Savings Reports',
                'route' => '/reports/savingReports'
            ],
            [
                'text' => 'Loan Reports',
                'route' => '/reports/loanReports'
            ],
            [
                'text' => 'Organisation Reports',
                'route' => '/reports/organisationReports'
            ],
            [
                'text' => 'Financial Reports',
                'route' => '/reports/financialReports'
            ],
            [
                'text' => 'Report Schedular',
                'route' => '/reports/reportSchedular'
            ],
            [
                'text' => 'Data Export',
                'route' => '/reports/dataExport'
            ],
            [
                'text' => 'Report Queue',
                'route' => '/reports/reportQueue'
            ],
        ],
        'translate' => 'sidebar.nav.WIDGETS'
    ],
    [
        'text' => 'Accounting',
        'route' => 'accounting',
        'icon' => 'icon-calculator',
        'alert' => '30',
        'submenu' => [

            [
                'text' => 'Charts of Accounts',
                'route' => '/accounting/chartsOfAccounts'
            ],
            [
                'text' => 'Journals',
                'route' => '/accounting/journals'
            ],
            [
                'text' => 'Journals Template',
                'route' => '/accounting/journaltemplate'
            ],
            [
                'text' => 'Reconciliation',
                'route' => '/accounting/reconciliation'
            ],
            [
                'text' => 'Accounting Export',
                'route' => '/accounting/export'
            ],
            [
                'text' => 'Periodic Accrual',
                'route' => '/accounting/periodicaccrual'
            ],
            [
                'text' => 'Close Periods',
                'route' => '/accounting/closeperiod'
            ],

        ],
        'translate' => 'sidebar.nav.WIDGETS'
    ],
    [
        'text' => 'Shares',
        'route' => 'shares',
        'icon' => 'icon-graph',
        'submenu' => [
            [
                'text' => 'Active Shares',
                'route' => '/shares/active'
            ],
            [
                'text' => 'Pending Approval',
                'route' => '/shares/pending'
            ],
            [
                'text' => 'Waiting Activation',
                'route' => '/shares/waiting'
            ],
            [
                'text' => 'Rejected',
                'route' => '/shares/rejected'
            ],
            [
                'text' => 'Closed',
                'route' => '/shares/closed'
            ]
        ]
    ],
    [
        'text' => 'Task',
        'route' => 'task',
        'icon' => 'icon-grid',
        'alert' => '30',
        'submenu' => [

            [
                'text' => 'Pending Approval',
                'route' => '/task/pendingApproval'
            ],

			[
                'text' => 'My Actions',
                'route' => '/task/myActions'
            ],

        ],
        'translate' => 'sidebar.nav.WIDGETS'
    ],
    [
        'text' => 'Setting',
        'route' => 'setting',
        'icon' => 'icon-settings',
        'alert' => '30',
        'submenu' => [

            // [
            //     'text' => 'Access Management',
            //     'route' => '#'
            // ],

			// [
            //     'text' => 'Audit',
            //     'route' => '#'
            // ],

			[
                'text' => 'Products Group',
                'route' => '/setting/productgroup'
            ],

			// [
            //     'text' => 'Braches',
            //     'route' => '#'
            // ],

			// [
            //     'text' => 'MMT Services',
            //     'route' => '#'
            // ],

			// [
            //     'text' => 'SMS Module',
            //     'route' => '#'
            // ],

			// [
            //     'text' => 'Email Module',
            //     'route' => '#'
            // ],

			[
                'text' => 'Blacklist',
                'route' => '/setting/blacklist'
            ],

			// [
            //     'text' => 'CRB',
            //     'route' => '#'
            // ],

			// [
            //     'text' => 'Advanced',
            //     'route' => '#'
            // ],

			// [
            //     'text' => 'Customisation',
            //     'route' => '#'
            // ],

            [
                 'text' => 'Currencies',
                  'route' =>'/setting/currencies'
            ],

            [
                'text' => 'Financial Activity',
                'route' => '/setting/financialactivity'
            ],

        ],
        'translate' => 'sidebar.nav.WIDGETS'
    ],
    [
        'text' => 'User',
        'route' => 'user',
        'icon' => 'icon-user',
        'submenu' => [
            [
                'text' => 'Users',
                'route' => '/user/users'
            ],
            [
                'text' => 'User Roles',
                'route' => '/user/roles'
            ],
            [
                'text' => 'User Permissions',
                'route' => '/user/permissions'
            ]
        ]
    ],

];
