<?php

header('Content-type: application/json; charset=utf-8');

$data = $pages->find('intermission')->children()->visible();

$json = array();

$json['data']  = array();

foreach($data as $article) {

  $json['data'][] = array(
    'Mix name'   => (string)$article->author(),
	'Mp3 link'   => (string)$article->audio()->first()->url(),
	'Image link'   => (string)$article->images()->first()->url(),
    'Description' => (string)$article->text()
  );

}

echo json_encode($json);

?>