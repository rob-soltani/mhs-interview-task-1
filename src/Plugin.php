<?php

// // Declare the MHS Interview Task 1 namespace
namespace MHS_INTERVIEW_TASK_1;

// Declare the NoticeBox which defines and registers a WordPress shortcode
class NoticeBox
{

    // A function responsible for generating the HTML code for the shortcode
    public static function Generate($Type, $Message)
    {

        // Enqueue (include) the plugin's CSS styles file in the head tag
        wp_enqueue_style( 'MHS_INTERVIEW_TASK_1_CSS' );
        
        // Enqueue (include) the plugin's JavaScript file on the page
        wp_enqueue_script( 'MHS_INTERVIEW_TASK_1_JS' );


        $HTML  = '<div class="MHS_INTERVIEW_TASK_1_NoticeBox Danger">';
        $HTML .= '  <span class="MHS_INTERVIEW_TASK_1_CloseButton">&times;</span>';
        $HTML .= '  <strong>Danger!</strong>';
        $HTML .= '  Indicates a dangerous or potentially negative action.';
        $HTML .= '</div>';

        $HTML .= '<div class="MHS_INTERVIEW_TASK_1_NoticeBox Success">';
        $HTML .= '  <span class="MHS_INTERVIEW_TASK_1_CloseButton">&times;</span>';
        $HTML .= '  <strong>Success!</strong>';
        $HTML .= '  Indicates a successful or positive action.';
        $HTML .= '</div>';

        $HTML .= '<div class="MHS_INTERVIEW_TASK_1_NoticeBox Info">';
        $HTML .= '  <span class="MHS_INTERVIEW_TASK_1_CloseButton">&times;</span>';
        $HTML .= '  <strong>Info!</strong>';
        $HTML .= '  Indicates a neutral informative change or action.';
        $HTML .= '</div>';

        $HTML .= '<div class="MHS_INTERVIEW_TASK_1_NoticeBox Warning">';
        $HTML .= '  <span class="MHS_INTERVIEW_TASK_1_CloseButton">&times;</span>';
        $HTML .= '  <strong>Warning!</strong>';
        $HTML .= '  Indicates a warning that might need attention.';
        $HTML .= '</div>';
      

        return $HTML;
        
    }

    // A function to initialize and register the NoticeBox shortcode
    public static function Initiate()
    {

        // Register the plugin's CSS styles file
        wp_register_style( 'MHS_INTERVIEW_TASK_1_CSS', plugins_url( '../public/style.css', __FILE__ ), array(), '0.0.1', 'all' );
      
        // Register the plugin's JavaScript file
        wp_register_script( 'MHS_INTERVIEW_TASK_1_JS', plugins_url('../public/script.js', __FILE__), array(),'', true);

        // Register the shortcode using plugin-specific tag and it's callback
        add_shortcode( 'MHS_INTERVIEW_TASK_1_NoticeBox', 'MHS_INTERVIEW_TASK_1\NoticeBox::Generate' );
        
    }

}