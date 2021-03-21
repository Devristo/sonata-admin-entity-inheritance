<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 */
class Sub extends Base
{
    /**
     * @ORM\Column(options={"default"="HELLO WORLD"})
     */
    private string $otherField = 'HELLO WORLD';

}
