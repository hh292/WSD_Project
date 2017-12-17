<?php

//........................Himanshu Hunge hh292

class homepageController extends http\controller
{
    public static function show()
    {
        $templateData['site_name'] = 'WSD Project - hh292';

        self::getTemplate('homepage', $templateData);
    }
    public static function create()
    {

        print_r($_POST);
    }
}
?>