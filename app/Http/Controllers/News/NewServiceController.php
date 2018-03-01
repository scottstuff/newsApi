<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helpers\NewsHelpers;
use Illuminate\Support\Facades\Log;


class NewServiceController extends Controller {

	public $request;
	public $newsBaseUrl;
	public $newsApiKey;
	public $newsTopUSStories;
	public $newsTopUSStoriesUrl;

    public function __construct() {
    	$this->newsBaseUrl = 'https://newsapi.org/v2/';
    	$this->newsTopUSStories = 'top-headlines?country=us';
    	$this->newsApiKey = '&apiKey=4350051e7cb24c2498dcf8a66b021b06';
    	$this->newsTopUSStoriesUrl = $this->newsBaseUrl . $this->newsTopUSStories . $this->newsApiKey;
Log::debug('this->newsTopUSStoriesUrl: ' . $this->newsTopUSStoriesUrl);
    }

    public function init(Request $request) {
        $this->request = $request->all();
    }

    public function news(Request $request) {
        $this->init($request);
    	$body = NewsHelpers::guzzleGet([
    		'method' => 'GET',
    		'URL' => $this->baseUrl . 'histominute',
    		'body' => $this->request
    	]);

    	$parsedBody = self::leanHistoryToTheMinute(json_decode($body,true));

		return $parsedBody;
    }

    public function topUSNews(Request $request) {
        $this->init($request);
    	$body = NewsHelpers::guzzleGet([
    		'method' => 'GET',
    		'URL' => $this->newsTopUSStoriesUrl,
    		'body' => $this->request
    	]);

    	return $body;
  //   	$parsedBody = self::leanHistoryToTheMinute(json_decode($body,true));

		// return $parsedBody;

	}

    public function videos(Request $request) {


    	$videos = [
			'<iframe width="560" height="315" src="https://www.youtube.com/embed/ljL1zimSDr8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
			'<iframe width="560" height="315" src="https://www.youtube.com/embed/ljL1zimSDr8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
			'<iframe width="560" height="315" src="https://www.youtube.com/embed/ljL1zimSDr8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
			'<iframe width="560" height="315" src="https://www.youtube.com/embed/ljL1zimSDr8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
			'<iframe width="560" height="315" src="https://www.youtube.com/embed/ljL1zimSDr8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
			'<iframe width="560" height="315" src="https://www.youtube.com/embed/ljL1zimSDr8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
    	];

		return $videos;
$tmp = $_SERVER['DOCUMENT_ROOT'];
Log::debug( '$_SERVER[DOCUMENT_ROOT]: ' .  $_SERVER['DOCUMENT_ROOT']);
$tmp2 = str_replace('/public', '', $tmp);
Log::debug('tmp2: ' . $tmp2);
    	include('newstest.php');
    	// include('../contrllertest.php');
    	include($tmp2 . '/app/Http/Helpers/api-samples-master/php/geolocation_search.php');
    	// $bdoy = /
    	return $htmlBody;
        $this->init($request);
    	$body = NewsHelpers::guzzleGet([
    		'method' => 'GET',
    		'URL' => $this->newsTopUSStoriesUrl,
    		'body' => $this->request
    	]);

	return $body;
    }

}