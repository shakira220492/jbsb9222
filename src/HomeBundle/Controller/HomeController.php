<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HomeBundle\Entity\Task;
use HomeBundle\Entity\Optiondiv;

class HomeController extends Controller
{
    public function homeAction()
    {
        $taskEntity = new Task;
        $optionDivEntity = new Optiondiv;
        
        
        $get_task_properties_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'get_task_properties_form');
        
        
//        i_SessionController.php
        
        $check_session_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'check_session_form');
        
        $log_in_user_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'log_in_user_form');
        
        $log_out_user_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'log_out_user_form');
        
        
//        GUIPropertiesController.php
        
        $get_stored_field_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'get_stored_field_form');
        $get_stored_layout_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'get_stored_layout_form');
        
        
        $set_this_field_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'set_this_field_form');
        $set_this_layout_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'set_this_layout_form');
        
        
        $delete_stored_field_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'delete_stored_field_form');
        $delete_stored_layout_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'delete_stored_layout_form');
        
        
        $update_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'update_form');
        
        $set_usualMode_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'set_usualMode_form');
        
        $set_currentMode_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'set_currentMode_form');
        
        

        $get_info_about_video_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'get_info_about_video_form');
        
        $get_comment_about_video_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'get_comment_about_video_form');
        
        $add_like_video_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'add_like_video_form');
        
        $add_dislike_video_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'add_dislike_video_form');
        
        $add_comment_video_form_ajax = $this->createCustomForm(
        'HomeBundle\Form\TaskType', $taskEntity, 'POST', 'add_comment_video_form');
        
        
        return $this->render('@Home/home/home.html.twig', array(
            'get_task_properties_form_ajax' => $get_task_properties_form_ajax->createView(),
            'check_session_form_ajax' => $check_session_form_ajax->createView(),
            
            'log_in_user_form_ajax' => $log_in_user_form_ajax->createView(),
            'log_out_user_form_ajax' => $log_out_user_form_ajax->createView(),
            
            'get_stored_field_form_ajax' => $get_stored_field_form_ajax->createView(),
            'get_stored_layout_form_ajax' => $get_stored_layout_form_ajax->createView(),
            
            'set_this_field_form_ajax' => $set_this_field_form_ajax->createView(),
            'set_this_layout_form_ajax' => $set_this_layout_form_ajax->createView(),
            
            'delete_stored_field_form_ajax' => $delete_stored_field_form_ajax->createView(),
            'delete_stored_layout_form_ajax' => $delete_stored_layout_form_ajax->createView(),
            'update_form_ajax' => $update_form_ajax->createView(),
            'set_usualMode_form_ajax' => $set_usualMode_form_ajax->createView(),
            'set_currentMode_form_ajax' => $set_currentMode_form_ajax->createView(),
            
            'get_info_about_video_form_ajax' => $get_info_about_video_form_ajax->createView(),
            'get_comment_about_video_form_ajax' => $get_comment_about_video_form_ajax->createView(),
            'add_like_video_form_ajax' => $add_like_video_form_ajax->createView(),
            'add_dislike_video_form_ajax' => $add_dislike_video_form_ajax->createView(),
            'add_comment_video_form_ajax' => $add_comment_video_form_ajax->createView()
        ));
        
    }
    
    private function createCustomForm($objForm, $objEntity, $method, $route) {
        $form = $this->createForm($objForm, $objEntity, array(
            'action' => $this->generateUrl($route),
            'method' => $method
        ));
        return $form;
    }
    
}