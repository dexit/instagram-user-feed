<?php

namespace Instagram\Tests\Utils;

use GuzzleHttp\Cookie\CookieJar;
use Instagram\Auth\Session;
use Instagram\Utils\Endpoints;
use PHPUnit\Framework\TestCase;

class EndpointsTest extends TestCase
{
    public function testGetFollowUrl()
    {
        $endpoint = Endpoints::getFollowUrl(123456789);
        $this->assertSame('https://www.instagram.com/web/friendships/123456789/follow/', $endpoint);
    }

    public function testGetUnfollowUrl()
    {
        $endpoint = Endpoints::getUnfollowUrl(123456789);
        $this->assertSame('https://www.instagram.com/web/friendships/123456789/unfollow/', $endpoint);
    }

    public function testGetLikeUrl()
    {
        $endpoint = Endpoints::getLikeUrl(123456789);
        $this->assertSame('https://www.instagram.com/web/likes/123456789/like/', $endpoint);
    }

    public function testGetUnlikeUrl()
    {
        $endpoint = Endpoints::getUnlikeUrl(123456789);
        $this->assertSame('https://www.instagram.com/web/likes/123456789/unlike/', $endpoint);
    }
}
