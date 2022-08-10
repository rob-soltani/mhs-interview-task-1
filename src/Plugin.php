<?php

// // Declare the MHS Interview Task 1 namespace
namespace MHS_INTERVIEW_TASK_1;

// Declare the NoticeBox which defines and registers a WordPress shortcode
class NoticeBox
{

    // A function responsible for generating the HTML code for the shortcode
    public static function Generate($Type, $Title, $Message)
    {

        $HTML  = '<div class="">';
        $HTML .= 'Testing MHS Interview Task 1\'s shortcode ...';
        $HTML .= '</div>';

        return $HTML;
        
    }

    // A function to initialize and register the NoticeBox shortcode
    public static function Initiate()
    {

        // Register the shortcode using plugin-specific tag and it's callback
        add_shortcode( 'MHS_INTERVIEW_TASK_1_NoticeBox', 'MHS_INTERVIEW_TASK_1\NoticeBox::Generate' );
        
    }

}