<?php

require '../app/router.php';


// Get the requested URI and remove leading/trailing slashes
// $request_uri = trim($_SERVER['REQUEST_URI'], '/');

// switch ($request_uri) {
//     case '':
//     case 'home':
//         require __DIR__ . '/views/home.php';
//         break;
//     case 'about':
//         require __DIR__ . '/views/about.php';
//         break;
//     case 'contact':
//         require __DIR__ . '/views/contact.php';
//         break;
//     default:
//         // Handle 404 Not Found error
//         http_response_code(404);
//         require __DIR__ . '/views/404.php';
//         break;
// }
