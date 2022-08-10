<?php

// // Declare the MHS Interview Task 1 namespace
namespace MHS_INTERVIEW_TASK_1;

// Declare the NoticeBox which defines and registers a WordPress shortcode
class NoticeBox
{

    // A function responsible for generating the HTML code for the shortcode
    public static function Generate($Attributes = [], $Content = null)
    {
        

        // Normalize attribute keys to lowercase
        $Attributes = array_change_key_case((array) $Attributes, CASE_LOWER);

        // Override default attributes with user attributes
        $Attributes = shortcode_atts(
            array(
                'type' => 'info',
                'message' => '',
            ),
            $Attributes
        );

    

        // Get notice box type and normalize to lower case
        $NoticeBox_Type = strtolower($Attributes['type']);

        // Get notice box message
        $NoticeBox_Message = $Attributes['message'];


        // Normalize NoticeBox type
        if (strcmp($NoticeBox_Type, 'info') == 0) {
            $NoticeBox_Type = 'Info';
        } elseif (strcmp($NoticeBox_Type, 'danger') == 0) {
            $NoticeBox_Type = 'Danger';
        } elseif (strcmp($NoticeBox_Type, 'warning') == 0) {
            $NoticeBox_Type = 'Warning';
        } elseif (strcmp($NoticeBox_Type, 'success') == 0) {
            $NoticeBox_Type = 'Success';
        } else {
            $NoticeBox_Type = 'Info';
        }


        // Enqueue (include) the plugin's CSS styles file in the head tag
        wp_enqueue_style('MHS_INTERVIEW_TASK_1_CSS');

        // Enqueue (include) the plugin's JavaScript file on the page
        wp_enqueue_script('MHS_INTERVIEW_TASK_1_JS');


        // Construct the output
        $HTML  = '<div class="MHS_INTERVIEW_TASK_1_NoticeBox ' . $NoticeBox_Type . '">';
        $HTML .= '  <span class="MHS_INTERVIEW_TASK_1_CloseButton">&times;</span>';
        $HTML .= '  <strong>' . $NoticeBox_Type . '!</strong>';
        $HTML .= '  ' . $NoticeBox_Message;
        $HTML .= '</div>';

        return $HTML;
    }

    // A function to initialize and register the NoticeBox shortcode
    public static function Initiate()
    {

        // Register the plugin's CSS styles file
        wp_register_style('MHS_INTERVIEW_TASK_1_CSS', plugins_url('../public/style.css', __FILE__), array(), '0.0.1', 'all');

        // Register the plugin's JavaScript file
        wp_register_script('MHS_INTERVIEW_TASK_1_JS', plugins_url('../public/script.js', __FILE__), array(), '', true);

        // Register the shortcode using plugin-specific tag and it's callback
        add_shortcode('MHS_INTERVIEW_TASK_1_NoticeBox', 'MHS_INTERVIEW_TASK_1\NoticeBox::Generate');

    }

}
