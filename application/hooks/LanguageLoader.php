<?php


class LanguageLoader {

	public function initialize()
	{
		$ci =& get_instance();

		$ci->load->helper('language');

		$ci->load->library('session');

		$site_lang = !empty($ci->session->userdata('site_lang'))
						? $ci->session->userdata('site_lang')
						: "english";


		$ci->lang->load('labels', $site_lang);
        $ci->lang->load('articles', $site_lang);


        // if ($site_lang) {
        //     $ci->lang->load('labels',$ci->session->userdata('site_lang'));
        //     $ci->lang->load('articles', $ci->session->userdata('site_lang'));
        // } else {
        //     $ci->lang->load('labels','english');
        // }

		//$ci->lang->load('labels_lang', 'english');
	}
}