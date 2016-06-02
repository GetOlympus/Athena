<?php

namespace AthenaTheme\Controllers\Widgets;

use GetOlympus\Field;
use GetOlympus\Hera\Widget\Controller\Widget as HeraWidget;

class SnippetLatestsWidget extends HeraWidget
{
    public function __construct()
    {
        // Update temlpate
        $this->template = VIEWS_PATH.'widgets'.S.'snippet_latests.php';

        // Update fields
        $this->fields = [
            Field\Text::build('title', [
                'title' => __('Title', OL_TPL_DICTIONARY),
            ]),
            Field\Text::build('number', [
                'title' => __('Choose how many snippets to display', OL_TPL_DICTIONARY),
                'options' => [
                    'type' => 'number',
                    'min' => 1,
                    'step' => 1
                ],
            ]),
        ];
    }

    /**
     * Display widget contents
     *
     * @param array $instance Contains all field data.
     */
    public function display($instance = [])
    {
        // Work on vars
        $title = isset($instance['title']) ? $instance['title'] : '';
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
        echo $this->before;
            echo !empty($title) ? $this->before_title.$title.$this->after_title : '';
            include $this->template;
        echo $this->after;
    }
}
