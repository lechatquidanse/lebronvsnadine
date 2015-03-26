<?php

namespace LCQD\PlaystationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Hateoas\Configuration\Annotation as Hateoas;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use LCQD\PlaystationBundle\Model\AvatarInterface as AvatarInterface;
use LCQD\PlaystationBundle\Model\User as BaseUser;

/**
 * User
 * 
 * @ORM\Entity
 * @ORM\Table(name="lcqd_user")
 *
 * @Hateoas\Relation(
 *     "self",
 *     href = @Hateoas\Route(
 *          "api_1_get_me",
 *          parameters = { "_format" = "json" },
 *          absolute = true
 *     )
 * )
 * 
 * @author lechatquidanse
 */
class User extends BaseUser
{
    /**
     * Add properties, created and updated datetime informations
     */
    use ORMBehaviors\Timestampable\Timestampable;
    
    /**
     * @var integer
     * 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var float
     *
     * @ORM\Column(name="funds", type="float", nullable=true)
     */
    protected $funds;

    /**
    * @ORM\ManyToOne(targetEntity="LCQD\PlaystationBundle\Entity\Avatar", cascade={"persist"}, inversedBy="users")
    * @ORM\JoinColumn(name="avatar_id", referencedColumnName="id", nullable=true)
    */
    private $avatar;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * {@inheritDoc}
     */
    public function setFunds($funds)
    {
        $this->funds = $funds;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getFunds()
    {
        return $this->funds;
    }

    /**
     * @param AvatarInterface $avatar
     * @return User
     */
    public function setAvatar(AvatarInterface $avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * @return AvatarInterface
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
}