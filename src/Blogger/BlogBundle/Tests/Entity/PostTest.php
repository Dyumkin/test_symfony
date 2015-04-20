<?php
/**
 * Created by PhpStorm.
 * User: yury
 * Date: 20.04.15
 * Time: 21:52
 */

namespace Blogger\BlogBundle\Tests\Entity;

use Blogger\BlogBundle\Entity\Post;

class PostTest extends \PHPUnit_Framework_TestCase
{

    public function testSlugify()
    {
        $blog = new Post();

        $this->assertEquals('hello-world', $blog->slugify('Hello World'));
        $this->assertEquals('a-day-with-symfony2', $blog->slugify('A Day With Symfony2'));
        $this->assertEquals('hello-world', $blog->slugify('Hello    world'));
        $this->assertEquals('symblog', $blog->slugify('symblog '));
        $this->assertEquals('symblog', $blog->slugify(' symblog'));
    }

    public function testSetSlug()
    {
        $blog = new Post();

        $blog->setSlug('Symfony2 Blog');
        $this->assertEquals('symfony2-blog', $blog->getSlug());
    }

    public function testSetTitle()
    {
        $blog = new Post();

        $blog->setTitle('Hello World');
        $this->assertEquals('hello-world', $blog->getSlug());
    }
} 