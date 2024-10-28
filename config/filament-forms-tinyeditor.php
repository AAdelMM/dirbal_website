<?php

return [
    'profiles' => [
        'default' => [
            'plugins' => 'advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount fontfamily template',
            'toolbar' => 'removeformat | fontselect fontsizeselect | bold italic | alignjustify alignright aligncenter alignleft | forecolor backcolor | rtl ltr | undo redo | wordcount fullscreen formatselect | preset1 preset2 preset3 | template', // Custom buttons added
            'upload_directory' => null,
            'custom_configs' => [
                'content_css' => [
                    'https://fonts.googleapis.com/css2?family=Cairo:wght@400..700&display=swap',
                    'https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap',
                    'https://fonts.googleapis.com/css2?family=Marhey:wght@300..700&display=swap',
                    'https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap',
                    'https://fonts.googleapis.com/css2?family=Amiri&display=swap',
                    'https://fonts.googleapis.com/css2?family=Changa:wght@200..700&display=swap',
                    'https://fonts.googleapis.com/css2?family=Zain:wght@200;300;400;700;800;900&display=swap',
                    'https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap',
                    'https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap',
                    'https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;500;600;700&display=swap',
                ],
                'font_formats' => 'Arial=arial,helvetica,sans-serif; Times New Roman=times new roman,times,serif; 
                                   Courier New=courier new,courier,monospace;
                                   Cairo=cairo, sans-serif; El Messiri=El Messiri, sans-serif; 
                                   Marhey=Marhey, sans-serif; Noto Kufi Arabic=Noto Kufi Arabic, sans-serif;
                                   Amiri=amiri, serif; Changa=changa, sans-serif;
                                   Sakkal Majalla=sakkal majalla, sans-serif;
                                   Zain=zain, sans-serif; Almarai=almarai, sans-serif;
                                   Tajawal=tajawal, sans-serif; Scheherazade New=scheherazade new, serif;',
                'fontsize_formats' => '8pt 10pt 12pt 14pt 16pt 18pt 20pt 22pt 24pt 30pt 36pt 48pt ',
                'style_formats' => [
                    [
                        'title' => 'مسافة بادئة وفاصلة صغيرة',
                        'block' => 'p',
                        'styles' => [
                            'text-indent' => '1em',
                            'margin-bottom' => '0.3em',
                        ],
                        'wrapper' => false,
                    ],
                    [
                        'title' => 'مسافة بادئة وفاصلة متوسطة',
                        'block' => 'p',
                        'styles' => [
                            'text-indent' => '2em',
                            'margin-bottom' => '0.6em',
                        ],
                        'wrapper' => false,
                    ],
                    [
                        'title' => 'مسافة بادئة وفاصلة كبيرة ',
                        'block' => 'p',
                        'styles' => [
                            'text-indent' => '3em',
                            'margin-bottom' => '1em',
                        ],
                        'wrapper' => false,
                    ],
                    [
                        'title' => 'أفتراضي1',
                        'block' => 'p',
                        'styles' => [
                            'font-family'=>'Zain',
                            'font-weight'=>'bold',
                            'font-size' => '18pt',
                            'text-align'=>'center',
                            'color' => '#cf9455',
                            'margin-bottom' => '0.6em',
                        ],
                    ],
                    [
                        'title' => 'أفتراضي2',
                        'block' => 'p',
                        'styles' => [
                            'font-family'=>'Zain',
                            'font-size' => '18pt',
                            'text-align'=>'justify',
                            
                            'text-indent' => '1em',
                            'margin-bottom' => '0.3em',
                        ],
                    ],
                    [
                        'title' => 'أفتراضي3',
                        'block' => 'p',
                        'styles' => [
                            'font-family'=>'Sakkal Majalla',
                            'font-size' => '18pt',
                            'text-align'=>'justify',
                            'text-indent' => '1.5em',
                            'margin-bottom' => '0.5em',
                        ],
                    ],
                    [
                        'title' => 'أفتراضي4',
                        'block' => 'p',
                        'styles' => [
                            'font-family'=>'Sakkal Majalla',
                            'font-size' => '18pt',
                            'text-align'=>'justify',
                            'text-indent' => '1.5em',
                            
                        ],
                    ],
                ],
                //add setup
                'autoresize_bottom_margin' => 0,
                'autoresize_min_height' => 100,
                'autoresize_max_height' => 500,
                'resize' => true,
                'statusbar' => false,
                'content_style' => 'body { margin-bottom: 0 !important; }',
               
            ],
        ],
    
        'simple' => [
            'plugins' => 'autoresize directionality emoticons link wordcount',
            'toolbar' => 'fontselect',
            'upload_directory' => null,
        ],

        'template' => [
            'plugins' => 'autoresize template fullscreen',
            'toolbar' => 'template | bold | forecolor | undo redo | wordcount fullscreen formatselect |',
            'upload_directory' => null,
            
            
        ],
    ],

    'templates' => [
        // Template for Preset 1
        [
            'title' => 'Preset 1',
            'description' => 'Applies preset 1 styles',
            'content' => '<p style="font-size: 20pt; color: #FF5733; text-indent: 2em; margin-bottom: 0.6em;">Preset 1 Text</p>',
        ],
        // Template for Preset 2
        [
            'title' => 'Preset 2',
            'description' => 'Applies preset 2 styles',
            'content' => '<p style="font-size: 16pt; color: #4287f5; text-indent: 1em; margin-bottom: 0.3em;">Preset 2 Text</p>',
        ],
        // Template for Preset 3
        [
            'title' => 'Preset 3',
            'description' => 'Applies preset 3 styles',
            'content' => '<p style="font-size: 24pt; color: #28a745; text-indent: 3em; margin-bottom: 1em;">Preset 3 Text</p>',
        ],
    ],
   /*  'templates' => [
        'example' => [
            // content
            ['title' => 'Some title 1', 'description' => 'Some desc 1', 'content' => 'My content'],
            // url
            ['title' => 'Some title 2', 'description' => 'Some desc 2', 'url' => 'http://localhost'],
        ],
    ], */
];
