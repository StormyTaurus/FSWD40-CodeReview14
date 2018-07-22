<?php

namespace AppBundle\Controller;

use AppBundle\Entity\bigevents;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class bigeventsController extends Controller

{

    /**

     * @Route("/", name="bigevents_list")

     */

    public function listAction(){

        $bigevents = $this->getDoctrine()->getRepository('AppBundle:bigevents')->findAll();

        // replace this example code with whatever you need

        return $this->render('bigevents/index.html.twig', array('bigevents'=>$bigevents));

    }

     /**

     * @Route("/bigevents/create", name="bigevents_create")

     */

    public function createAction(Request $request){

        $bigevents = new bigevents;

        $form = $this->createFormBuilder($bigevents)
        
        ->add('eventName', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('eventDate', DateTimeType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('eventDateEnd', DateTimeType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        
        ->add('eventDesc', TextareaType::class, array('attr'=>array('Low'=>'Low', 'Normal'=>'Normal', 'High'=>'High'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
        
        ->add('eventImg', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        
        ->add('eventCapacity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('eventMail', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('eventPhone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('eventUrl', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('eventType', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Sport'=>'Sport', 'Movie'=>'Movie', 'Theater'=>'Theater', 'Art'=>'Art', 'Other'=>'Other'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))

        ->add('eventStreet', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('eventStreetN', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        
        ->add('eventZip', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        ->add('eventCity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

        // ->add('eventImg', TextType::class, array('attr' => array('style'=>'margin-bottom:15px')))

        ->add('save', SubmitType::class, array('label'=> 'Create Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))

        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            //fetching data

            $eventName = $form['eventName']->getData();

            $eventDate = $form['eventDate']->getData();

            $eventDateEnd = $form['eventDateEnd']->getData();

            $eventDesc = $form['eventDesc']->getData();

            $eventImg = $form['eventImg']->getData();

            $eventCapacity = $form['eventCapacity']->getData();

            $eventMail = $form['eventMail']->getData();

            $eventPhone = $form['eventPhone']->getData();

            $eventUrl = $form['eventUrl']->getData();

            $eventType = $form['eventType']->getData();

            $eventStreet = $form['eventStreet']->getData();

            $eventStreetN = $form['eventStreetN']->getData();

            $eventZip = $form['eventZip']->getData();

            $eventCity = $form['eventCity']->getData();

            // $now = new\DateTime('now');

            $bigevents->seteventName($eventName);

            $bigevents->seteventDate($eventDate);

            $bigevents->seteventDateEnd($eventDateEnd);

            $bigevents->seteventDesc($eventDesc);

            $bigevents->seteventImg($eventImg);

            $bigevents->seteventCapacity($eventCapacity);

            $bigevents->seteventMail($eventMail);

            $bigevents->seteventPhone($eventPhone);

            $bigevents->seteventUrl($eventUrl);

            $bigevents->seteventType($eventType);

            $bigevents->seteventStreet($eventStreet);

            $bigevents->seteventStreetN($eventStreetN);

            $bigevents->seteventZip($eventZip);

            $bigevents->seteventCity($eventCity);

            // $bigevents->setCreateDate($now);

            $em = $this->getDoctrine()->getManager();

            $em->persist($bigevents);

            $em->flush();

            $this->addFlash(

                    'notice',

                    'bigevents Added'

                    );

            return $this->redirectToRoute('bigevents_list');

        }

        // replace this example code with whatever you need

        return $this->render('bigevents/create.html.twig', array('form' => $form->createView()));

    }

      /**

     * @Route("/bigevents/edit/{id}", name="bigevents_edit")

     */

    public function editAction( $id, Request $request){

        $bigevents = $this->getDoctrine()->getRepository('AppBundle:bigevents')->find($id);
    
    $now = new\DateTime('now');
    
                $bigevents->seteventName($bigevents->geteventName());
    
                $bigevents->seteventDate($bigevents->geteventDate());
    
                $bigevents->seteventDesc($bigevents->geteventDesc());
    
                $bigevents->seteventImg($bigevents->geteventImg());
    
                $bigevents->seteventCapacity($bigevents->geteventCapacity());
    
                // $bigevents->setCreateDate($now);
    
            $form = $this->createFormBuilder($bigevents)
            
            ->add('eventName', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
    
            ->add('eventDate', DateTimeType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
    
            ->add('eventDesc', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
    
            ->add('eventImg', TextareaType::class, array('attr'=>array('Low'=>'Low', 'Normal'=>'Normal', 'High'=>'High'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
    
            ->add('eventCapacity', TextType::class, array('attr' => array('style'=>'margin-bottom:15px')))
    
        ->add('save', SubmitType::class, array('label'=> 'Update bigevents', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-botton:15px')))
    
            ->getForm();
    
            $form->handleRequest($request);
    
            if($form->isSubmitted() && $form->isValid()){
    
                //fetching data
    
                $eventName = $form['eventName']->getData();
    
                $eventDate = $form['eventDate']->getData();
    
                $eventDesc = $form['eventDesc']->getData();
    
                $eventImg = $form['eventImg']->getData();
    
                $eventCapacity = $form['eventCapacity']->getData();
    
                $now = new\DateTime('now');
    
                $em = $this->getDoctrine()->getManager();
    
                $bigevents = $em->getRepository('AppBundle:bigevents')->find($id);
    
                $bigevents->seteventName($eventName);
    
                $bigevents->seteventDate($eventDate);
    
                $bigevents->seteventDesc($eventDesc);
    
                $bigevents->seteventImg($eventImg);
    
                $bigevents->seteventCapacity($eventCapacity);
    
                $bigevents->seteventDate($now);
    
             
    
                $em->flush();
    
                $this->addFlash(
    
                        'notice',
    
                        'bigevents Updated'
    
                        );
    
                return $this->redirectToRoute('bigevents_list');
    
            }
    
            return $this->render('bigevents/edit.html.twig', array('bigevents' => $bigevents, 'form' => $form->createView()));
    
        }

/**

     * @Route("/bigevents/delete/{id}", name="bigevents_delete")

     */

    public function deleteAction($id){

        $em = $this->getDoctrine()->getManager();

   $bigevents = $em->getRepository('AppBundle:bigevents')->find($id);

   $em->remove($bigevents);

    $em->flush();

   $this->addFlash(

           'notice',

           'bigevents Removed'

           );

    return $this->redirectToRoute('bigevents_list');

}


     /**

     * @Route("/bigevents/details/{id}", name="bigevents_details")

     */

    public function detailsAction($id){

        $bigevents = $this->getDoctrine()->getRepository('AppBundle:bigevents')->find($id);

return $this->render('bigevents/details.html.twig', array('bigevents' => $bigevents));

}



}