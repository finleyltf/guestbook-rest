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
            $data[] = $result;
        }

        return new JsonModel(array(
            'data' => $data,
        ));




    }

    public function get($id)
    {
        $post = $this->getEntityManager()->find('Post\Entity\Post', $id);

        return new JsonModel(array(
            'data' => $post,
        ));
    }

    public function create($data)
    {
        # code...
    }

    public function update($id, $data)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }
}