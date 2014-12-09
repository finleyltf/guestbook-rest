<?php

namespace PostRest\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;

use Post\Entity\Post;          // <-- Add this import
use Post\Form\PostForm;       // <-- Add this import
use Doctrine\ORM\EntityManager;
use Zend\View\Model\JsonModel;

class PostRestController extends AbstractRestfulController
{

    /**
     * @var Doctrine\ORM\EntityManager
     */
    protected $em;

    public function setEntityManager(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getEntityManager()
    {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }

        return $this->em;
    }


    public function getList()
    {
        $results = $this->getEntityManager()->getRepository('Post\Entity\Post')->findall();

        $data = array();
        foreach ($results as $result) {
            $data[] = $result->getArrayCopy();
        }

        return new JsonModel(array(
            'data' => $data,
        ));




    }

    public function get($id)
    {
        $post = $this->getEntityManager()->find('Post\Entity\Post', $id);

        return new JsonModel(array(
            'data' => $post->getArrayCopy(),
        ));
    }

    public function create($data)
    {

        // to be completed
        $form = new PostForm();
        $post = new Post();
        $form->setInputFilter($post->getInputFilter()); // ??

        $form->setData($data);

        if ($form->isValid()) {

//            $file = $this->params()->fromFiles('image');
//            $this->validatedUpload($file, $form);

            $post->populate($form->getData());
            $post->setDate(date_create());

            // set the name of the uploaded file to the image
//            $post->setImage($data->image['name']);
            $post->setImage("download (1).jpeg");

            $this->getEntityManager()->persist($post);
            $this->getEntityManager()->flush();



        }



    }

    public function update($id, $data)
    {
        // to be completed

        $data['id'] = $id;
        $post = $this->getEntityManager()->find('Post\Entity\Post', $id);
        $form = new PostForm();
        $form->bind($post);
        $form->setInputFilter($post->getInputFilter());
        $form->setData($data);
        if ($form->isValid()) {
            $this->getEntityManager()->flush();
        }

        return $this->get($id);


    }

    public function delete($id)
    {
        $post = $this->getEntityManager()->find('Post\Entity\Post', $id);
        $this->getEntityManager()->Remove($post);
        $this->getEntityManager()->flush();

        return new JsonModel(array(
            'data' => 'deleted',
        ));


    }
}