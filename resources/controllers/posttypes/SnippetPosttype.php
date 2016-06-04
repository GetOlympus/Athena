<?php

namespace AthenaTheme\Controllers\Posttypes;

use GetOlympus\Field;
use GetOlympus\Hera\Posttype\Controller\Posttype as HeraPosttype;

class SnippetPosttype extends HeraPosttype
{
    protected $slug = 'snippet';

    public function __construct()
    {
        // Update args
        $this->args = [
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_icon' => 'dashicons-editor-code',
            'public' => true,
            'query_var' => true,
            'show_ui' => true,
            'menu_position' => 5,

            'supports' => ['title'],
            'taxonomies' => [],
        ];

        // Update labels
        $this->labels = [
            'name' => __('Snippets', OL_TPL_DICTIONARY),
            'singular_name' => __('Snippet', OL_TPL_DICTIONARY),
        ];

        // Update fields
        $this->fields = [
            Field\Code::build('code', [
                'title' => __('Code', OL_TPL_DICTIONARY),
            ]),
        ];

        // Parent constructor
        parent::__construct();
    }
}
