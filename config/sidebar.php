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
        'text' => 'Widgets',
        'route' => 'widgets',
        'icon' => 'icon-grid',
        'alert' => '30',
        'translate' => 'sidebar.nav.WIDGETS'
    ],
    [
        'text' => 'Layouts',
        'route' => 'horizontal',
        'icon' => 'icon-layers',
        'submenu' => [
            [
                'text' => 'Horizontal',
                'route' => 'horizontal/dashboardh'
            ]
        ]
    ],
    [
        'text' => 'Components',
        'heading' => true,
        'translate' => 'sidebar.heading.COMPONENTS'
    ],
    [
        'text' => 'Elements',
        'route' => 'elements',
        'icon' => 'icon-chemistry',
        'submenu' => [
            [
                'text' => 'Buttons',
                'route' => 'elements/buttons',
                'translate' => 'sidebar.nav.element.BUTTON'
            ],
            [
                'text' => 'Notifications',
                'route' => 'elements/notifications',
                'translate' => 'sidebar.nav.element.NOTIFICATION'
            ],
            [
                'text' => 'Sweet Alert',
                'route' => 'elements/sweetalert'
            ],
            [
                'text' => 'Carousel',
                'route' => 'elements/carousel',
                'translate' => 'sidebar.nav.element.INTERACTION'
            ],
            [
                'text' => 'Spinners',
                'route' => 'elements/spinners',
                'translate' => 'sidebar.nav.element.SPINNER'
            ],
            [
                'text' => 'Dropdown',
                'route' => 'elements/dropdown-animations',
                'translate' => 'sidebar.nav.element.DROPDOWN'
            ],
            [
                'text' => 'Nestable',
                'route' => 'elements/nestable'
            ],
            [
                'text' => 'Sortable',
                'route' => 'elements/sortable'
            ],
            [
                'text' => 'Cards',
                'route' => 'elements/cards',
                'translate' => 'sidebar.nav.element.CARDS'
            ],
            [
                'text' => 'Portlets',
                'route' => 'elements/portlets',
                'translate' => 'sidebar.nav.element.PORTLET'
            ],
            [
                'text' => 'Grid',
                'route' => 'elements/grid',
                'translate' => 'sidebar.nav.element.GRID'
            ],
            [
                'text' => 'Grid Masonry',
                'route' => 'elements/grid-masonry',
                'translate' => 'sidebar.nav.element.GRID_MASONRY'
            ],
            [
                'text' => 'Typography',
                'route' => 'elements/typography',
                'translate' => 'sidebar.nav.element.TYPO'
            ],
            [
                'text' => 'Font Icons',
                'route' => 'elements/icons-font',
                'alert' => '+400',
                'translate' => 'sidebar.nav.element.FONT_ICON'
            ],
            [
                'text' => 'Weather Icons',
                'route' => 'elements/icons-weather',
                'alert' => '+100',
                'translate' => 'sidebar.nav.element.WEATHER_ICON'
            ],
            [
                'text' => 'Colors',
                'route' => 'elements/colors',
                'translate' => 'sidebar.nav.element.COLOR'
            ]
        ],
        'translate' => 'sidebar.nav.element.ELEMENTS'
    ],
    [
        'text' => 'Forms',
        'route' => 'forms',
        'icon' => 'icon-note',
        'submenu' => [
            [
                'text' => 'Standard',
                'route' => 'forms/standard',
                'translate' => 'sidebar.nav.form.STANDARD'
            ],
            [
                'text' => 'Extended',
                'route' => 'forms/extended',
                'translate' => 'sidebar.nav.form.EXTENDED'
            ],
            [
                'text' => 'Validation',
                'route' => 'forms/validation',
                'translate' => 'sidebar.nav.form.VALIDATION'
            ],
            [
                'text' => 'Wizard',
                'route' => 'forms/wizard'
            ],
            [
                'text' => 'Upload',
                'route' => 'forms/upload'
            ],
            [
                'text' => 'xEditable',
                'route' => 'forms/xeditable'
            ],
            [
                'text' => 'Cropper',
                'route' => 'forms/imagecrop'
            ]
        ],
        'translate' => 'sidebar.nav.form.FORM'
    ],
    [
        'text' => 'Charts',
        'route' => 'charts',
        'icon' => 'icon-graph',
        'submenu' => [
            [
                'text' => 'Flot',
                'route' => 'charts/flot',
                'translate' => 'sidebar.nav.chart.FLOT'
            ],
            [
                'text' => 'Radial',
                'route' => 'charts/radial',
                'translate' => 'sidebar.nav.chart.RADIAL'
            ],
            [
                'text' => 'Chart JS',
                'route' => 'charts/chartjs'
            ],
            [
                'text' => 'Rickshaw',
                'route' => 'charts/rickshaw'
            ],
            [
                'text' => 'MorrisJS',
                'route' => 'charts/morris'
            ],
            [
                'text' => 'Chartist',
                'route' => 'charts/chartist'
            ]
        ],
        'translate' => 'sidebar.nav.chart.CHART'
    ],
    [
        'text' => 'Tables',
        'route' => 'tables',
        'icon' => 'icon-grid',
        'submenu' => [
            [
                'text' => 'Standard',
                'route' => 'tables/standard',
                'translate' => 'sidebar.nav.table.STANDARD'
            ],
            [
                'text' => 'Extended',
                'route' => 'tables/extended',
                'translate' => 'sidebar.nav.table.EXTENDED'
            ],
            [
                'text' => 'DataTables',
                'route' => 'tables/datatable',
                'translate' => 'sidebar.nav.table.DATATABLE'
            ],
            [
                'text' => 'BootGrid',
                'route' => 'tables/bootgrid'
            ]
        ],
        'translate' => 'sidebar.nav.table.TABLE'
    ],
    [
        'text' => 'Maps',
        'route' => 'maps',
        'icon' => 'icon-map',
        'submenu' => [
            [
                'text' => 'Google Maps',
                'route' => 'maps/google',
                'translate' => 'sidebar.nav.map.GOOGLE'
            ],
            [
                'text' => 'Vector Maps',
                'route' => 'maps/vector',
                'translate' => 'sidebar.nav.map.VECTOR'
            ]
        ],
        'translate' => 'sidebar.nav.map.MAP'
    ],
    [
        'text' => 'More',
        'heading' => true,
        'translate' => 'sidebar.heading.MORE'
    ],
    [
        'text' => 'Pages',
        'route' => 'pages',
        'icon' => 'icon-doc',
        'submenu' => [
            [
                'text' => 'Login',
                'route' => 'login',
                'translate' => 'sidebar.nav.pages.LOGIN'
            ],
            [
                'text' => 'Sign up',
                'route' => 'register',
                'translate' => 'sidebar.nav.pages.REGISTER'
            ],
            [
                'text' => 'Recover Password',
                'route' => 'recover',
                'translate' => 'sidebar.nav.pages.RECOVER'
            ],
            [
                'text' => 'Lock',
                'route' => 'lock',
                'translate' => 'sidebar.nav.pages.LOCK'
            ],
            [
                'text' => '404',
                'route' => 'notfound'
            ],
            [
                'text' => '500',
                'route' => 'error500'
            ],
            [
                'text' => 'Maintenance',
                'route' => 'maintenance'
            ]
        ],
        'translate' => 'sidebar.nav.pages.PAGES'
    ],
    [
        'text' => 'Extras',
        'route' => 'extras',
        'icon' => 'icon-cup',
        'submenu' => [
            [
                'text' => 'Blog',
                'route' => 'extras/blog',
                'icon' => 'fas fa-angle-right',
                'submenu' => [
                    [
                        'text' => 'List',
                        'route' => 'extras/blog/list'
                    ],
                    [
                        'text' => 'Post',
                        'route' => 'extras/blog/post'
                    ],
                    [
                        'text' => 'Articles',
                        'route' => 'extras/blog/articles'
                    ],
                    [
                        'text' => 'Article View',
                        'route' => 'extras/blog/article-view'
                    ]
                ]
            ],
            [
                'text' => 'eCommerce',
                'route' => 'extras/ecommerce',
                'icon' => 'fas fa-angle-right',
                'submenu' => [
                    [
                        'text' => 'Orders',
                        'route' => 'extras/ecommerce/orders',
                        'alert' => '10',
                        'label' => 'badge badge-info'
                    ],
                    [
                        'text' => 'Order View',
                        'route' => 'extras/ecommerce/order-view'
                    ],
                    [
                        'text' => 'Products',
                        'route' => 'extras/ecommerce/products'
                    ],
                    [
                        'text' => 'Product View',
                        'route' => 'extras/ecommerce/product-view'
                    ],
                    [
                        'text' => 'Checkout',
                        'route' => 'extras/ecommerce/checkout'
                    ]
                ]
            ],
            [
                'text' => 'Forum',
                'route' => 'extras/forum',
                'icon' => 'fas fa-angle-right',
                'submenu' => [
                    [
                        'text' => 'Categories',
                        'route' => 'extras/forum/categories'
                    ],
                    [
                        'text' => 'Topics',
                        'route' => 'extras/forum/topics'
                    ],
                    [
                        'text' => 'Discussion',
                        'route' => 'extras/forum/discussion'
                    ]
                ]
            ],
            [
                'text' => 'Contacts',
                'route' => 'extras/contacts'
            ],
            [
                'text' => 'Contact details',
                'route' => 'extras/contact-details'
            ],
            [
                'text' => 'Projects',
                'route' => 'extras/projects'
            ],
            [
                'text' => 'Projects details',
                'route' => 'extras/project-details'
            ],
            [
                'text' => 'Team viewer',
                'route' => 'extras/team-viewer'
            ],
            [
                'text' => 'Social board',
                'route' => 'extras/social-board'
            ],
            [
                'text' => 'Vote links',
                'route' => 'extras/vote-links'
            ],
            [
                'text' => 'Bug tracker',
                'route' => 'extras/bug-tracker'
            ],
            [
                'text' => 'FAQ',
                'route' => 'extras/faq'
            ],
            [
                'text' => 'Help Center',
                'route' => 'extras/help-center'
            ],
            [
                'text' => 'Followers',
                'route' => 'extras/followers'
            ],
            [
                'text' => 'Settings',
                'route' => 'extras/settings'
            ],
            [
                'text' => 'Plans',
                'route' => 'extras/plans'
            ],
            [
                'text' => 'File manager',
                'route' => 'extras/file-manager'
            ],
            [
                'text' => 'Mailbox',
                'route' => 'extras/mailbox',
                'translate' => 'sidebar.nav.extra.MAILBOX'
            ],
            [
                'text' => 'Timeline',
                'route' => 'extras/timeline',
                'translate' => 'sidebar.nav.extra.TIMELINE'
            ],
            [
                'text' => 'Calendar',
                'route' => 'extras/calendar',
                'translate' => 'sidebar.nav.extra.CALENDAR'
            ],
            [
                'text' => 'Invoice',
                'route' => 'extras/invoice',
                'translate' => 'sidebar.nav.extra.INVOICE'
            ],
            [
                'text' => 'Search',
                'route' => 'extras/search',
                'translate' => 'sidebar.nav.extra.SEARCH'
            ],
            [
                'text' => 'Todo List',
                'route' => 'extras/todo',
                'translate' => 'sidebar.nav.extra.TODO'
            ],
            [
                'text' => 'Profile',
                'route' => 'extras/profile',
                'translate' => 'sidebar.nav.extra.PROFILE'
            ]
        ],
        'translate' => 'sidebar.nav.extra.EXTRA'
    ]
];
