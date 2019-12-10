<?php
// Gets a specific track and track meta data
require_once 'Dao.php';
$dao = new Dao();
$fcbd = $api->getTrack('6lTlH3hjm4o4yQL46OR31s');
$ds3 = $api->getTrack('36Y0aBbV4QhkMNuzsVShtF');
$mmx5 = $api->getTrack('2eyaZmFVMi4JzfNMpWSZzh');

$h = $api->getTrack('4B7OypxHvqBg2DDtGZKByC');
$ffxiv = $api->getTrack('5QOxC0PHzEgeKzWD7mySDy');
//$kh3 = $api->getTrack('6wTVlrLR2qyEAbEuyoS7b2');

$loh = $api->getTrack('0Rh6dyIt8kVApoAy7WAF8o');
$ffx = $api->getTrack('1anT56ZrRpmLzwmGNdsOUF');
$mc = $api->getTrack('0clPr5yn863vymO1QITbsS');

$dao->insertTrackData($fcbd->id, $fcbd->name, $fcbd->album->name, 'red' );
$dao->insertTrackData($ds3->id, $ds3->name, $ds3->album->name, 'red' );
$dao->insertTrackData($mmx5->id, $mmx5->name, $mmx5->album->name, 'red' );

$dao->insertTrackData($h->id, $h->name, $h->album->name, 'blue' );
$dao->insertTrackData($ffxiv->id, $ffxiv->name, $ffxiv->album->name, 'blue' );
//$dao->insertTrackData($kh3->id, $kh3->name, $kh3->album->name, 'blue' );

$dao->insertTrackData($loh->id, $loh->name, $loh->album->name, 'yellow' );
$dao->insertTrackData($ffx->id, $ffx->name, $ffx->album->name, 'yellow' );
$dao->insertTrackData($mc->id, $mc->name, $mc->album->name, 'yellow' );

//example of getting columns from pdo object
/*
foreach($songs as $column){
    echo '<pre>'.$column['id'].'</pre>';
    echo '<pre>'.$column['name'].'</pre>';
    echo '<pre>'.$column['album'].'</pre>';
    echo '<br>';
}


//example of getting data from tracks
echo '<pre>'.$track->name.'</pre>';
echo '<pre>'.$track->artists[0]->name.'</pre>';
echo '<pre>'.$track->album->name.'</pre>';
echo '<pre>'.$track->id.'</pre>';
$analysis = $api->getAudioFeatures($track->id);
echo '<pre>'.$analysis->audio_features[0]->energy.'</pre>';

foreach ($tracks->items as $track) {
    //$dao->insertTrackData($track->id,$track->name,'The Elder Scrolls IV: Oblivion');
    
    echo '<b>' . $track->name . '</b> <br>';
    echo '<pre>'.$track->id.'</pre>';
    $analysis = $api->getAudioFeatures($track->id);
    echo '<pre>'.'Key: '.$analysis->audio_features[0]->key.'</pre>';
    echo '<pre>'.'Mode: '.$analysis->audio_features[0]->mode.'</pre>';
    echo '<pre>'.'Time Signature: '.$analysis->audio_features[0]->time_signature.'</pre>';
    echo '<pre>'.'Acoustic: '.$analysis->audio_features[0]->acousticness.'</pre>';
    echo '<pre>'.'Dance: '.$analysis->audio_features[0]->danceability.'</pre>';
    echo '<pre>'.'Energy: '.$analysis->audio_features[0]->energy.'</pre>';
    echo '<pre>'.'Instrumental: '.$analysis->audio_features[0]->instrumentalness.'</pre>';
    echo '<pre>'.'Live: '.$analysis->audio_features[0]->liveness.'</pre>';
    echo '<pre>'.'Loud: '.$analysis->audio_features[0]->loudness.'</pre>';
    echo '<pre>'.'Speech: '.$analysis->audio_features[0]->speechiness.'</pre>';
    echo '<pre>'.'Valence: '.$analysis->audio_features[0]->valence.'</pre>';
    echo '<pre>'.'Tempo: '.$analysis->audio_features[0]->tempo.'</pre>';
} 
*/
?>