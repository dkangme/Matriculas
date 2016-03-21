<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Alumno;
use AppBundle\Form\AlumnoType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * Alumno controller.
 *
 * @Route("/alumno")
 */
class AlumnoController extends Controller
{
    /**
     * Lists all Alumno entities.
     *
     * @Route("/", name="alumno_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $logger = $this->get('logger');
        
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('
            SELECT p FROM AppBundle:Alumno p
            ORDER BY p.apepPaterno ASC'
        );

        $form = $this->createFormBuilder()
        //->setAction($this->generateUrl('search_alumno'))
        ->setMethod('GET')
        //->add('rut', SearchType::class , array('required'=> false, 'label'=>'Rut: '))
        ->add('apellido_paterno', SearchType::class , array('required'=> false, 'label'=>'Apellido Paterno: '))
        ->add('submit', SubmitType::class)
        ->getForm();

        $form->handleRequest($request);

        
        $logger->DEBUG('Antes de evaluar el Form');

        if ($form->isValid())
        {
            $data = $form->getData();

            $query = $em->createQuery('
                SELECT p FROM AppBundle:Alumno p
                WHERE p.apepPaterno = :apepPaterno
                ORDER BY p.rut ASC'
            )
            ->setParameter('apepPaterno', $data['apellido_paterno']);
            

            $logger->info($data['apellido_paterno']);

        }

        
        //$logger->info($query);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );


        return $this->render('alumno/index.html.twig', array(
            'alumnos' => $pagination,
            'searchForm' => $form->createView(),
        ));
    }

    /**
     * Lists all Alumno entities.
     *
     * @Route("/json", name="json_alumno")
     * @Method("GET")
     */
    public function jsonAction(Request $request)
    {        
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('
            SELECT p FROM AppBundle:Alumno p
            ORDER BY p.apepPaterno ASC'
        );

        $alumnos = $query->getArrayResult();

        return new JsonResponse($alumnos);
    }
    /**
     * Creates a new Alumno entity.
     *
     * @Route("/new", name="alumno_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $alumno = new Alumno();
        $form = $this->createForm('AppBundle\Form\AlumnoType', $alumno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($alumno);
            $em->flush();

            return $this->redirectToRoute('alumno_show', array('id' => $alumno->getId()));
        }

        return $this->render('alumno/new.html.twig', array(
            'alumno' => $alumno,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Alumno entity.
     *
     * @Route("/{id}", name="alumno_show")
     * @Method("GET")
     */
    public function showAction(Alumno $alumno)
    {
        $deleteForm = $this->createDeleteForm($alumno);

        return $this->render('alumno/show.html.twig', array(
            'alumno' => $alumno,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Alumno entity.
     *
     * @Route("/{id}/edit", name="alumno_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Alumno $alumno)
    {
        $deleteForm = $this->createDeleteForm($alumno);
        $editForm = $this->createForm('AppBundle\Form\AlumnoType', $alumno);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($alumno);
            $em->flush();

            return $this->redirectToRoute('alumno_edit', array('id' => $alumno->getId()));
        }

        return $this->render('alumno/edit.html.twig', array(
            'alumno' => $alumno,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Alumno entity.
     *
     * @Route("/{id}", name="alumno_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Alumno $alumno)
    {
        $form = $this->createDeleteForm($alumno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($alumno);
            $em->flush();
        }

        return $this->redirectToRoute('alumno_index');
    }

    /**
     * Creates a form to delete a Alumno entity.
     *
     * @param Alumno $alumno The Alumno entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Alumno $alumno)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('alumno_delete', array('id' => $alumno->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
