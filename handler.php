<?php

ini_set('allow_url_fopen', 1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
	case '/':
		require 'login.php';
		break;
	case 'login':
		require 'login.php';
		break;
	case '/login.php':
		require 'login.php';
		break;
	case '/config.php':
		require 'config.php';
		break;
	case '/html/newfeed.php':
		require __DIR__.'/html/newfeed.php';
		break;
	/*case '/html/login.php':
		require __DIR__.'/html/login.php';
		break;*/
	case '/html/signup.php':
		require __DIR__.'/html/signup.php';
		break;
	case '/html/listPost.php':
		require __DIR__.'/html/listPost.php';
		break;
	case '/html/getListPhoto.php':
		require __DIR__.'/html/getListPhoto.php';
		break;
	case '/html/mypost.php':
		require __DIR__.'/html/mypost.php';
		break;
	case '/html/Photos.php':
		require __DIR__.'/html/Photos.php';
		break;
	case '/html/profile.php':
		require __DIR__.'/html/profile.php';
		break;
	case '/action/post_newfeed.php':
		require __DIR__.'/action/post_newfeed.php';
		break;
	case '/action/postComment.php':
		require __DIR__.'/action/postComment.php';
		break;
	case '/action/login_submit.php':
		require __DIR__.'/action/login_submit.php';
		break;
	case '/action/uploadfile.php':
		require __DIR__.'/action/uploadfile.php';
		break;
	case '/action/profile_submit.php':
		require __DIR__.'/action/profile_submit.php';
		break;
	case '/action/getComment.php':
		require __DIR__.'/action/getComment.php';
		break;
	case '/action/signup_submit.php':
		require __DIR__.'/action/signup_submit.php';
		break;
	case '/action/change_profile.php':
		require __DIR__.'/action/change_profile.php';
		break;
	case '/action/getListComment.php':
		require __DIR__.'/action/getListComment.php';
		break;
	default:
		http_response_code(404);
		echo @parse_url($_SERVER['REQUEST_URI'])['path'];
		exit('Not Found');
}

?>