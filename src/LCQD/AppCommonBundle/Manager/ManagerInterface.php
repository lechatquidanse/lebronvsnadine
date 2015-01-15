<?php

namespace LCQD\AppCommonBundle\Manager;

interface ManagerInterface
{
    /**
     * Get an Entity given the identifier
     *
     * @api
     *
     * @param mixed $id
     *
     * @return Entity
     */
    public function get($id);

    /**
     * Get a list of Entities.
     *
     * @param int $limit  the limit of the result
     * @param int $offset starting from the offset
     *
     * @return array
     */
    public function all($limit = 5, $offset = 0);

    /**
     * Post Entity, creates a new Entity.
     *
     * @api
     *
     * @param array $parameters
     *
     * @return Entity
     */
    //public function post(array $parameters);

    /**
     * Edit an Entity.
     *
     * @api
     *
     * @param Entity $entity
     * @param array $parameters
     *
     * @return Entity
     */
    //public function put($entity, array $parameters);

    /**
     * Partially update an Entity.
     *
     * @api
     *
     * @param Entity $entity
     * @param array $parameters
     *
     * @return Entity
     */
    //public function patch($entity, array $parameters);
}
