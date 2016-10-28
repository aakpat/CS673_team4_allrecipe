<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1477009386,
    'checksum' => '0bb0012a6530629ad1f3f5ad9db7ea1d',
    'files' => [
        'wp-content/themes/g5_hydrogen/custom/config/home' => [
            'index' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/home/index.yaml',
                'modified' => 1477008834
            ],
            'layout' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/home/layout.yaml',
                'modified' => 1477008834
            ]
        ],
        'wp-content/themes/g5_hydrogen/config/home' => [
            'assignments' => [
                'file' => 'wp-content/themes/g5_hydrogen/config/home/assignments.yaml',
                'modified' => 1477008823
            ],
            'index' => [
                'file' => 'wp-content/themes/g5_hydrogen/config/home/index.yaml',
                'modified' => 1477008823
            ],
            'page' => [
                'file' => 'wp-content/themes/g5_hydrogen/config/home/page.yaml',
                'modified' => 1477008823
            ]
        ]
    ],
    'data' => [
        'assignments' => [
            'context' => [
                0 => [
                    'is_front_page' => true
                ]
            ]
        ],
        'index' => [
            'name' => 'home',
            'timestamp' => 1477008834,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1477008823
            ],
            'positions' => [
                'footer' => 'Footer'
            ],
            'version' => 7,
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'showcase' => 'Showcase',
                'feature' => 'Feature',
                'subfeature' => 'Subfeature',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'menu' => [
                    'menu-2427' => 'Menu'
                ],
                'sample' => [
                    'sample-1' => 'Gantry 5',
                    'sample-2' => 'Getting Started',
                    'sample-3' => 'Key Features'
                ],
                'messages' => [
                    'system-messages-2497' => 'System Messages'
                ],
                'position' => [
                    'position-footer' => 'Footer'
                ],
                'copyright' => [
                    'copyright-1146' => 'Copyright'
                ],
                'social' => [
                    'social-9486' => 'Social'
                ],
                'branding' => [
                    'branding-4058' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-8733' => 'Mobile Menu'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry g-home'
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1477008823
            ],
            'layout' => [
                '/header/' => [
                    
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'menu-2427'
                    ]
                ],
                '/showcase/' => [
                    0 => [
                        0 => 'sample-1'
                    ]
                ],
                '/feature/' => [
                    
                ],
                '/main/' => [
                    0 => [
                        0 => 'system-messages-2497'
                    ],
                    1 => [
                        0 => 'sample-2'
                    ]
                ],
                '/subfeature/' => [
                    0 => [
                        0 => 'sample-3'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-footer'
                    ],
                    1 => [
                        0 => 'copyright-1146 33.3',
                        1 => 'social-9486 33.3',
                        2 => 'branding-4058 33.3'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-8733'
                    ]
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'subfeature' => [
                    'attributes' => [
                        'class' => 'flush',
                        'boxed' => ''
                    ],
                    'type' => 'section'
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ]
            ],
            'content' => [
                'sample-1' => [
                    'title' => 'Gantry 5',
                    'attributes' => [
                        'image' => 'gantry-assets://images/gantry5-logo.png',
                        'headline' => '',
                        'description' => '<p>Gantry 5 is the most customizable and powerful version of the framework yet. Packed full of features such as <a href="http://docs.gantry.org/gantry5/configure/layout-manager">drag-and-drop layout creation</a> and the powerful particle system, Gantry 5 has been designed from the ground up to be lightning fast and hassle free.</p>',
                        'link' => 'http://docs.gantry.org',
                        'linktext' => 'Read More'
                    ]
                ],
                'sample-2' => [
                    'title' => 'Getting Started',
                    'attributes' => [
                        'description' => '<h1 class="center">Getting Started</h1>
<div class="device-promo"><div class="macbook"><div class="macbook-color"></div></div><div class="ipad"><div class="ipad-color"></div></div><div class="iphone"><div class="iphone-color"></div></div></div><p>Welcome to Gantry 5 featuring <strong>Hydrogen</strong>, the first theme built on the Gantry 5 framework. If you want to get started, the best way is to navigate to the Gantry Administrator via your platform\'s Administration panel.</p>

<p>Once you are in the Gantry 5 Administrator, you will be able to edit virtually every aspect of your site from its <strong>Layout</strong> to its <strong>Style</strong>. You can even refine how the menus appear using Gantry 5’s new <strong>Menu Editor</strong>.</p>

<p>You can set different style preferences for different pages, and have them assigned accordingly using the <strong>Assignments</strong> administrative panel.</p>

<div class="info-box"><div class="fa fa-graduation-cap float-left"></div><p>Look for more information on Gantry 5 in our documentation, and stay tuned to the RocketTheme Blog for more information on new features and development updates as development continues.</p>

<p><a href="http://docs.gantry.org" class="button">Learn More</a></p></div>

<h1 class="center">How to Contribute</h1>

<div class="g-grid">
<div class="g-block size-37"><p>Thank you for using Gantry 5 and the Hydrogen theme. We welcome you to contribute to the project by submitting bug reports through <strong>GitHub</strong>, and/or submit your own code changes to the <strong>Gantry 5 project</strong> for consideration.</p>
<p><a href="https://github.com/gantry/gantry5" class="button">Gantry 5 on GitHub</a></p>
</div>
<div class="g-block size-26 middle"><div class="fa fa-github-square"></div></div>

<div class="g-block size-37"><p>If you would like to assist in creating documentation for Gantry 5, you can do so through the <strong>Gantry 5 Documentation</strong> project on <strong>GitHub</strong>.</p>
<p><a href="https://github.com/gantry/docs" class="button">Gantry Docs on GitHub</a></p>
</div>
</div>

<p>Once again, thank you for participating. We hope you enjoy testing Gantry 5 every bit as much as we have enjoyed creating it.</p>'
                    ]
                ],
                'sample-3' => [
                    'title' => 'Key Features',
                    'attributes' => [
                        'headline' => 'Key Features',
                        'description' => '<p>Gantry 5 is packed full of features created to empower the development of designs into fully functional layouts with the absolute minimum effort and fuss</p>',
                        'samples' => [
                            0 => [
                                'icon' => 'fa fa-code',
                                'subtitle' => '',
                                'description' => '<p>Gantry 5 leverages the power of <a href="http://twig.sensiolabs.org/">Twig</a> to make creating powerful, dynamic themes quick and easy.</p>',
                                'title' => 'Twig Templating'
                            ],
                            1 => [
                                'icon' => 'fa fa-newspaper-o',
                                'subtitle' => '',
                                'description' => '<p>Drag-and-drop functionality gives you the power to place content blocks, resize them, and configure their unique settings in seconds.</p>',
                                'title' => 'Layout Manager'
                            ],
                            2 => [
                                'icon' => 'fa fa-cubes',
                                'subtitle' => '',
                                'description' => '<p>Create, configure, and manage content blocks as well as special features and functionality with the powerful particle system.</p>',
                                'title' => 'Particles System'
                            ]
                        ]
                    ]
                ],
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ],
                'social-9486' => [
                    'attributes' => [
                        'css' => [
                            'class' => 'social-items'
                        ],
                        'items' => [
                            0 => [
                                'icon' => 'fa fa-twitter',
                                'text' => 'Twitter',
                                'link' => 'http://twitter.com/rockettheme',
                                'name' => 'Twitter'
                            ],
                            1 => [
                                'icon' => 'fa fa-facebook',
                                'text' => 'Facebook',
                                'link' => 'http://facebook.com/rockettheme',
                                'name' => 'Facebook'
                            ],
                            2 => [
                                'icon' => 'fa fa-google',
                                'text' => 'Google',
                                'link' => 'http://plus.google.com/+rockettheme',
                                'name' => 'Google'
                            ],
                            3 => [
                                'icon' => 'fa fa-rss',
                                'text' => 'RSS',
                                'link' => 'http://www.rockettheme.com/product-updates?rss',
                                'name' => 'RSS'
                            ]
                        ]
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'branding-4058' => [
                    'block' => [
                        'variations' => 'align-right'
                    ]
                ],
                'mobile-menu-8733' => [
                    'title' => 'Mobile Menu'
                ]
            ]
        ]
    ]
];
