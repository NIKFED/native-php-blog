<?php

function getPosts($connect)
{
    $postsQuery = mysqli_query($connect, "select * from `posts`");

    $postsList = [];

    while ($post = mysqli_fetch_assoc($postsQuery)) {
        $postsList[] = $post;
    }

    echo json_encode($postsList);
}

function getPost($connect, $id)
{
    $postQuery = mysqli_query(
        $connect,
        "select * from `posts` where `id` = '$id'"
    );

    if (mysqli_num_rows($postQuery) === 0) {
        $response = get404Response();
        echo json_encode($response);
    } else {
        $post = mysqli_fetch_assoc($postQuery);
        echo json_encode($post);
    }
}

function addPost($connect, $data)
{
    $title = $data['title'];
    $body = $data['body'];
    $insertQuery
        = "insert into `posts` (`id`, `title`, `body`) values (null, '$title', '$body')";
    mysqli_query($connect, $insertQuery);

    $postId = mysqli_insert_id($connect);
    $response = get201Response($postId);
    echo json_encode($response);
}

function updatePost($connect, $id, $data)
{
    $title = $data['title'];
    $body = $data['body'];
    $updateQuery
        = "update `posts` set `title` = '$title', `body` = '$body' where `posts`.`id` = '$id'";
    mysqli_query($connect, $updateQuery);

    $response = get200Response('Post is updated');
    echo json_encode($response);
}

function deletePost($connect, $id)
{
    $deleteQuery
        = "delete from `posts` where `posts`.`id` = '$id'";
    mysqli_query($connect, $deleteQuery);

    $response = get200Response('Post is deleted');
    echo json_encode($response);
}

function get404Response()
{
    http_response_code(404);
    return [
        'status' => false,
        'message' => 'Post not found',
    ];
}

function get201Response($id)
{
    http_response_code(201);
    return [
        'status' => true,
        'post_id' => $id,
    ];
}

function get200Response($message)
{
    http_response_code(200);
    return [
        'status' => true,
        'message' => $message,
    ];
}
