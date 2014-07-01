<?php

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_details',
        'title' => 'Details',
        'fields' => array (
            array (
                'key' => 'field_537f5dbc755b0',
                'label' => 'Contact',
                'name' => 'contact',
                'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_537f5dc9755b1',
                        'label' => 'Name',
                        'name' => 'name',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_537f5dd6755b2',
                        'label' => 'Email',
                        'name' => 'email',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Contact',
            ),
            array (
                'key' => 'field_537f5dfd755b3',
                'label' => 'Website',
                'name' => 'website',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => 'http://',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_537f5e18755b4',
                'label' => 'Photo',
                'name' => 'photo',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'large',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'student-group',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_display-on-homepage',
        'title' => 'Display on Homepage',
        'fields' => array (
            array (
                'key' => 'field_5388a4d1ec2e8',
                'label' => 'Display on homepage?',
                'name' => 'homepage',
                'type' => 'true_false',
                'message' => '',
                'default_value' => 0,
            ),
            array (
                'key' => 'field_5388a51fec2eb',
                'label' => 'Group Name',
                'name' => 'group_name',
                'type' => 'text',
                'instructions' => 'Maximum 70 characters.',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_5388a4d1ec2e8',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => 70,
            ),
            array (
                'key' => 'field_5388a4e4ec2e9',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_5388a4d1ec2e8',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'save_format' => 'url',
                'preview_size' => 'large',
                'library' => 'all',
            ),
            array (
                'key' => 'field_5388a4f4ec2ea',
                'label' => 'Excerpt',
                'name' => 'excerpt',
                'type' => 'textarea',
                'instructions' => 'Maximum 160 characters.',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_5388a4d1ec2e8',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => 160,
                'rows' => '',
                'formatting' => 'none',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'student-group',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}

    register_field_group(array (
        'id' => 'acf_announcement',
        'title' => 'Announcement',
        'fields' => array (
            array (
                'key' => 'field_537f632ab5043',
                'label' => 'Learn More Link',
                'name' => 'link',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => 'http://',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'announcement',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_header',
        'title' => 'Header',
        'fields' => array (
            array (
                'key' => 'field_537f5513cc673',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'instructions' => 'Dimensions need to be 960px by 400px.',
                'save_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'header',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'acf_after_title',
            'layout' => 'default',
            'hide_on_screen' => array (
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array (
        'id' => 'acf_featured-student',
        'title' => 'Featured Student',
        'fields' => array (
            array (
                'key' => 'field_538784bd89a41',
                'label' => 'Photo',
                'name' => 'photo',
                'type' => 'image',
                'save_format' => 'id',
                'preview_size' => 'full',
                'library' => 'all',
            ),
            array (
                'key' => 'field_538784cf89a42',
                'label' => 'Year',
                'name' => 'year',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_538784e089a43',
                'label' => 'About',
                'name' => 'about',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => 350,
                'rows' => '',
                'formatting' => 'html',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'featured-student',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array (
        'id' => 'acf_featured-events',
        'title' => 'Featured Events',
        'fields' => array (
            array (
                'key' => 'field_538c7f79a850f',
                'label' => 'Date(s)',
                'name' => 'date',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_538f83292aa1d',
                'label' => 'About',
                'name' => 'about',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 4,
                'formatting' => 'none',
            ),
            array (
                'key' => 'field_538f7f9125277',
                'label' => 'Learn More Link',
                'name' => 'link',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => 'http://',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'featured-event',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'acf_after_title',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}

?>