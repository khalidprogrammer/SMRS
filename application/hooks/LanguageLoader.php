<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $ci->lang->load('form','english');
        $site_lang = $ci->session->userdata('site_lang');
        if ($site_lang) {
            $ci->lang->load('form',$ci->session->userdata('site_lang'));
        } else {
            $ci->lang->load('form','english');
        }
    }
    
}



?>