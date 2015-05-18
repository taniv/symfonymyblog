<?php
/**
 * Created by PhpStorm.
 * User: tv
 * Date: 26/09/14
 * Time: 9:19 PM
 */

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blogger\BlogBundle\Entity\Blog;

class BlogFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Blog();
        $blog1->setTitle('A day with Symfony2');
        $blog1->setBlog('Symfony is the basic principle of a framework. It is a set of PHP Components, a Web Application framework, a Philosophy, and a Community Symfony2 is a reusable set of standalone, decoupled, and cohesive PHP components that solve common web development problems. based on these components, Symfony2 is also a full-stack web framework. Symfony today is a stable environment that is both well-known and recognized internationally. Symfony is first and foremost a pragmatic tool, the features of which address real-world-requirements. the Symfony framework is today still the daily tool used by its own teams to develop customer projects.');

        $blog1->setImage('symfony1.png');
        $blog1->setAuthor('Tani');
        $blog1->setTags('symfony2, php, paradise, symblog');
        $blog1->setCreated(new \DateTime());
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);

        $blog2 = new Blog();
        $blog2->setTitle('The World Best Stargazing Destinations');
        $blog2->setBlog('Hawaii may be a cliched honeymoon destination, but it is also a picturesque location with its dormant volcano sites and verdant surroundings. The next time you sit down to plan a trip with family or friends, head over to the idyllic Mauna Kea volcano to view the starry night once the sun goes down. It also has a scattering of observatories on the island, where Gemini North Observatory provides a breathtaking view of Hawaii');


        $blog2->setImage('world2.jpg');
        $blog2->setAuthor('John Cool');
        $blog2->setTags('tour, hacked, movie, hacking, symblog');
        $blog2->setCreated(new \DateTime("2015-05-1 06:12:33"));
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);

        $blog3 = new Blog();
        $blog3->setTitle('Antarctic Ice Shelf in Last Throes of Collapse');
        $blog3->setBlog('A vast Antarctica ice shelf that partly collapsed in 2002 has only a few years left before it fully disappears, according to a new study. Radar data reveals that the Larsen B ice shelf could shatter into hundreds of icebergs by 2020, researchers reported Thursday (March 14) in the journal Earth and Planetary Science Letters. "It is really startling to see how something that existed on our planet for so long has disappeared so quickly," lead study author Ala Khazendar, a scientist at NASA Jet Propulsion Laboratory in Pasadena, California, told Live Science.');

        $blog3->setImage('Anta3.jpg');
        $blog3->setAuthor('Bill than');
        $blog3->setTags('misdirection, magic, movie, hacking, symblog');
        $blog3->setCreated(new \DateTime("2015-04-16 16:14:06"));
        $blog3->setUpdated($blog3->getCreated());
        $manager->persist($blog3);


        $manager->flush();
    }
}


