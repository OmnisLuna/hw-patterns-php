<?php


namespace Model\IdentityMap;


use Model\Entity\User;

class IdentityMap
{
    /**
     * @var array
     */
    private $identityMap = [];

    /**
     * @param User $obj
     */
    public function add(User $obj)
    {
        $key = $this->getGlobalKey(get_class($obj), $obj->getId());
        $this->identityMap[$key] = $obj;
    }

    /**
     * @param string $className
     * @param int $id
     * @return mixed|null
     */
    public function find(string $className, int $id)
    {
        $key = $this->getGlobalKey($className, $id);
        if (isset($this->identityMap[$key])) {
            return $this->identityMap[$key];
        }
        return null;
    }

    /**
     * @param string $className
     * @param int $id
     * @return string
     */
    public function getGlobalKey(string $className, int $id)
    {
        return sprintf('%s.%d', $className, $id);
    }
}