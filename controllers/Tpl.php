<?php
use lib\Controller;
use lib\helpers\Mailer;

/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 22.02.2016
 * Time: 16:49
 */
class Tpl extends Controller
{

    public function send_q_msg($name){
        return $this->app->parser->renderCode('msg', [
            'name' => $name,
        ], false);
    }

    public function send_mails_q($name, $text, $email){
        //Пользователю
        $mail = new Mailer();
        $mail->to = $email;
        $mail->subject = "Ответ с сайта";
        $mail->message = $this->send_q_msg($name);
        $mail->send();

        //Администратору
        $mailA = new Mailer();
        $mailA->to = get_option('admin_email');
        $mailA->subject = "Ответ с сайта";
        $mailA->message = $this->send_q_msg_admin($name, $text, $email);
        $mailA->send();
    }

    public function send_q_msg_admin($name, $text, $email){
        return $this->app->parser->renderCode('msg_admin', [
            'name' => $name,
            'text' => $text,
            'email' => $email
        ], false);
    }

    public function reviews($reviews){
        return $this->app->parser->renderCode('reviews', [
            'reviews' => $reviews
        ], false);
    }

    public function video_reviews($reviews){
        return $this->app->parser->renderCode('video-reviews', [
            'reviews' => $reviews
        ], false);
    }

    public function get_category_list($list){
        return $this->app->parser->renderCode('category_list', [
            'list'=>$list
        ], false);
    }

    public function questions($q){
        return $this->app->parser->renderCode('questions', [
            'questions' => $q
        ], false);
    }
}