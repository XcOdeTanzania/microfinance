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
        'route' => '#',
        'icon' => 'icon-speedometer',
        'alert' => '3',
        'label' => 'badge badge-info',
        'submenu' => [
            [
                'text' => 'Register Client',
                'route' => '#'
            ],
            [
                'text' => 'Pending Approval',
                'route' => '#'
            ],
            [
                'text' => 'Closed Clients',
                'route' => '#'
            ],
            [
                'text' => 'Rejected Clients',
                'route' => '#'
            ],
            [
                'text' => 'Transfer Client',
                'route' => '#'
            ]
        ],
        'translate' => 'sidebar.nav.DASHBOARD'
    ],
    [
        'text' => 'Loans',
        'route' => '#',
        'icon' => 'icon-speedometer',
        'alert' => '3',
        'label' => 'badge badge-info',
        'submenu' => [
            [
                'text' => 'Overpaid Loans',
                'route' => '#'
            ],
            [
                'text' => 'Pending Approval',
                'route' => '#'
            ],
            [
                'text' => 'Pending Second Approval',
                'route' => '#'
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
                'route' => '#'
            ]
        ],
        'translate' => 'sidebar.nav.DASHBOARD'
    ],
    [
        'text' => 'Reports',
        'route' => '#',
        'icon' => 'icon-grid',
        'alert' => '30',
        'submenu' => [
            [
                'text' => 'Client Reports',
                'route' => '#'
            ],
            [
                'text' => 'Group Reports',
                'route' => '#'
            ],
            [
                'text' => 'Savings Reports',
                'route' => '#'
            ],
            [
                'text' => 'Loan Reports',
                'route' => '#'
            ],
            [
                'text' => 'Organisation Reports',
                'route' => '#'
            ],
            [
                'text' => 'Financial Reports',
                'route' => '#'
            ],
            [
                'text' => 'Report Schedular',
                'route' => '#'
            ],
            [
                'text' => 'Data Export',
                'route' => '#'
            ],
            [
                'text' => 'Report Queue',
                'route' => '#'
            ],
        ],
        'translate' => 'sidebar.nav.WIDGETS'
    ],
    [
        'text' => 'Accounting',
        'route' => '#',
        'icon' => 'icon-grid',
        'alert' => '30',
        'submenu' => [
            
            [
                'text' => 'Charts of Accounts',
                'route' => '/accounting/chartsOfAccounts'
            ],
            [
                'text' => 'Journals',
                'route' => '#'
            ],
            [
                'text' => 'Journals Template',
                'route' => '#'
            ],
            [
                'text' => 'Reconciliation',
                'route' => '#'
            ],
            [
                'text' => 'Accounting Export',
                'route' => '#'
            ],
            [
                'text' => 'Periodic Accrual',
                'route' => '#'
            ],
            [
                'text' => 'Close Periods',
                'route' => '#'
            ],
            
        ],
        'translate' => 'sidebar.nav.WIDGETS'
    ],
    [
        'text' => 'Shares',
        'route' => 'horizontal',
        'icon' => 'icon-layers',
        'submenu' => [
            [
                'text' => 'Active Shares',
                'route' => '#'
            ],
            [
                'text' => 'Pending Approval',
                'route' => '#'
            ],
            [
                'text' => 'Waiting Activation',
                'route' => '#'
            ],
            [
                'text' => 'Rejected',
                'route' => '#'
            ],
            [
                'text' => 'Closed',
                'route' => '#'
            ]
        ]
    ],
    [
        'text' => 'Task',
        'route' => '#',
        'icon' => 'icon-grid',
        'alert' => '30',
        'submenu' => [
            
            [
                'text' => 'Pending Approval',
                'route' => '#'
            ],
			
			[
                'text' => 'My Actions',
                'route' => '#'
            ],
            
        ],
        'translate' => 'sidebar.nav.WIDGETS'
    ],
    [
        'text' => 'Setting',
        'route' => '#',
        'icon' => 'icon-grid',
        'alert' => '30',
        'submenu' => [
            
            [
                'text' => 'Access Management',
                'route' => '#'
            ],
			
			[
                'text' => 'Audit',
                'route' => '#'
            ],
			
			[
                'text' => 'Products',
                'route' => '#'
            ],
			
			[
                'text' => 'Braches',
                'route' => '#'
            ],
			
			[
                'text' => 'MMT Services',
                'route' => '#'
            ],
			
			[
                'text' => 'SMS Module',
                'route' => '#'
            ],
			
			[
                'text' => 'Email Module',
                'route' => '#'
            ],
			
			[
                'text' => 'Blacklist',
                'route' => '#'
            ],
			
			[
                'text' => 'CRB',
                'route' => '#'
            ],
			
			[
                'text' => 'Advanced',
                'route' => '#'
            ],
			
			[
                'text' => 'Customisation',
                'route' => '#'
            ],
            
        ],
        'translate' => 'sidebar.nav.WIDGETS'
    ],
    [
        'text' => 'User',
        'route' => 'horizontal',
        'icon' => 'icon-layers',
        'submenu' => [
            [
                'text' => 'Create User',
                'route' => '#'
            ],
            [
                'text' => 'User Roles',
                'route' => '#'
            ],
            [
                'text' => 'User Permissions',
                'route' => '#'
            ]
        ]
    ],

];
