<?php

namespace AthenaTheme\Controllers\Posttypes;

class SnippetPosttype extends \GetOlympus\Hera\Posttype\Controller\Posttype
{
    public function setVars()
    {
        // Update slug
        $this->slug = 'snippet';

        // Update args
        $this->args = [
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_icon' => 'dashicons-editor-code',
            'public' => true,
            'publicly_queryable' => true,
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
            \GetOlympus\Field\Code::build('code', [
                'title' => __('Code', OL_TPL_DICTIONARY),
            ]),
        ];
    }
}
