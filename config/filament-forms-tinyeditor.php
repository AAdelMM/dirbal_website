<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Profiles
    |--------------------------------------------------------------------------
    |
    | You can add as many as you want of profiles to use it in your application.
    |
    */

    'profiles' => [

        'default' => [
            'plugins' => 'advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount fontfamily',
            // 'toolbar' => 'undo redo removeformat | formatselect fontsizeselect  fontfamily| bold italic | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist | forecolor backcolor | blockquote table toc hr | image link media codesample  | wordcount fullscreen ',
          'toolbar' => 'fontselect  formatselect fontsizeselect | bold italic | alignjustify alignright aligncenter alignleft | forecolor backcolor | rtl ltr | undo redo removeformat | wordcount fullscreen ',
            'upload_directory' => null,
            'custom_configs' => [
                'content_css' => [
                    'https://fonts.googleapis.com/css2?family=Cairo:wght@400..700&display=swap',
                    'https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap',
                    'https://fonts.googleapis.com/css2?family=Marhey:wght@300..700&display=swap',
                    'https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap',
                    'https://fonts.googleapis.com/css2?family=Amiri&display=swap', // Adding Amiri font
                    'https://fonts.googleapis.com/css2?family=Changa:wght@200..700&display=swap', // Adding Changa font
                ],
                'font_formats' => 'Arial=arial,helvetica,sans-serif; Times New Roman=times new roman,times,serif; 
                                   Courier New=courier new,courier,monospace;
                                   Cairo=cairo, sans-serif; El Messiri=El Messiri, sans-serif; 
                                   Marhey=Marhey, sans-serif; Noto Kufi Arabic=Noto Kufi Arabic, sans-serif;
                                   Amiri=amiri, serif; Changa=changa, sans-serif;
                                   Sakkal Majalla=sakkal majalla, sans-serif;',
            ],
        ],

        'simple' => [
            'plugins' => 'autoresize directionality emoticons link wordcount',
            // 'toolbar' => 'removeformat | bold italic | rtl ltr |redo| link emoticons',
            'toolbar' => 'fontselect',
            'upload_directory' => null,
        ],

        'template' => [
            'plugins' => 'autoresize template',
            'toolbar' => 'template',
            'upload_directory' => null,
        ],
        /*
        |--------------------------------------------------------------------------
        | Custom Configs
        |--------------------------------------------------------------------------
        |
        | If you want to add custom configurations to directly tinymce
        | You can use custom_configs key as an array
        |
        */

        /*
          'default' => [
            'plugins' => 'advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount',
            'toolbar' => 'undo redo removeformat | formatselect fontsizeselect | bold italic | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist | forecolor backcolor | blockquote table toc hr | image link media codesample emoticons | wordcount fullscreen',
            'custom_configs' => [
                'allow_html_in_named_anchor' => true,
                'link_default_target' => '_blank',
                'codesample_global_prismjs' => true,
                'image_advtab' => true,
                'image_class_list' => [
                  [
                    'title' => 'None',
                    'value' => '',
                  ],
                  [
                    'title' => 'Fluid',
                    'value' => 'img-fluid',
                  ],
              ],
            ]
        ],
        */

    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    | You can add as many as you want of templates to use it in your application.
    |
    | https://www.tiny.cloud/docs/plugins/opensource/template/#templates
    |
    | ex: TinyEditor::make('content')->profiles('template')->template('example')
    */

    'templates' => [

        'example' => [
            // content
            ['title' => 'Some title 1', 'description' => 'Some desc 1', 'content' => 'My content'],
            // url
            ['title' => 'Some title 2', 'description' => 'Some desc 2', 'url' => 'http://localhost'],
        ],

    ],
];
