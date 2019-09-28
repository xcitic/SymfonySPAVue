<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use Safe\Exceptions\JsonException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use function count;

final class PostControllerTest extends AbstractControllerWebTestCase
{

    /**
     * @throws JsonException
     */
    public function testCreatePost(): void
    {
        // Creating a post with no message results in HTTP_BAD_REQUEST 400
        $this->JSONRequest(Request::METHOD_POST, '/api/posts');
        $this->assertJSONResponse($this->client->getResponse(), Response::HTTP_BAD_REQUEST);
        // Creating a post correctly results in HTTP_CREATED 201
        $this->JSONRequest(Request::METHOD_POST, '/api/posts', ['message' => 'My First Post']);
        $this->assertJSONResponse($this->client->getResponse(), Response::HTTP_CREATED);
    }

    /**
     * @throws JsonException
     */
    public function testFindAllPosts(): void
    {
        $this->client->request(Request::METHOD_GET, '/api/posts');
        $response = $this->client->getResponse();
        $content = $this->assertJSONResponse($response, Response::HTTP_OK);
        $this->assertEquals(1, count($content));
    }
}
