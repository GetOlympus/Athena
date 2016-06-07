<?php

namespace AthenaTheme\Controllers\Widgets;

class SnippetLatestsWidget extends \GetOlympus\Hera\Widget\Controller\Widget
{
    public function setVars()
    {
        // Update classname
        $this->classname = 'snippet_latests';

        // Update fields
        $this->fields = [
            \GetOlympus\Field\Text::build('title', [
                'title' => __('Title', OL_TPL_DICTIONARY),
            ]),
            \GetOlympus\Field\Text::build('number', [
                'title' => __('Choose how many snippets to display', OL_TPL_DICTIONARY),
                'options' => [
                    'type' => 'number',
                    'min' => 1,
                    'step' => 1
                ],
            ]),
        ];

        // Update options
        $this->options = [
            'width' => 480,
        ];

        // Update settings
        $this->settings = [
            'description' => __('Get the latest snippets', OL_TPL_DICTIONARY),
        ];

        // Update temlpate
        $this->template = VIEWS_PATH.'widgets'.S.'snippet_latests.php';

        // Update title
        $this->title = __('Latest snippets', OL_TPL_DICTIONARY);
    }

    /**
     * Display widget contents
     *
     * @param array $instance Contains all field data.
     */
    public function display($instance = [])
    {
        // Work on vars
        $number = isset($instance['number']) ? $instance['number'] : 5;

        // Get recent video posts
        $items = wp_get_recent_posts([
            'post_type' => 'snippet',
            'number' => $number
        ]);

        // Check
        if (empty($items)) {
            return;
        }

        // Display
        include $this->template;
    }
}
