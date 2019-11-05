?php
// Gets a specific track and track meta data
$fcbd = $api->getTrack('0D0gYmLWoVn9yuyZCOeGG8');
$ds3 = $api->getTrack('3Yl7RLoezIr1bRHCRB1Qs5');
$mmx5 = $api->getTrack('0lmuYQ0NTH4twgd3KiwB0l');

$teso = $api->getTrack('1NhDv99nTtRm37rZpoH7Ix');
$fft = $api->getTrack('1Ptt2vsB5QfmzcpcO75Vbc');
$tw3 = $api->getTrack('761SMhVKJlJlUCUveNcq1m');

$h = $api->getTrack('3bNSW31JpVtDBM65mIXK3u');
$ffxiv = $api->getTrack('6tPBg0KodeIuRERRkaH5Ty');
$kh3 = $api->getTrack('7LD7J9TuBYJpSEUbmxyTPX');

$loh = $api->getTrack('7sQZDJI9fSG6q9GvQPJs73');
$ffx = $api->getTrack('6Q4nNB7exf30TTt2SdhPAb');
$mc = $api->getTrack('5fqjfiMOFapIb8uFcxBStH');

$dao->insertTrackData($fcbd->id, $fcbd->name, $fcbd->album->name, 'red' );
$dao->insertTrackData($ds3->id, $ds3->name, $ds3->album->name, 'red' );
$dao->insertTrackData($mmx5->id, $mmx5->name, $mmx5->album->name, 'red' );

$dao->insertTrackData($teso->id, $teso->name, $teso->album->name, 'green' );
$dao->insertTrackData($fft->id, $fft->name, $fft->album->name, 'green' );
$dao->insertTrackData($tw3->id, $tw3->name, $tw3->album->name, 'green' );

$dao->insertTrackData($h->id, $h->name, $h->album->name, 'blue' );
$dao->insertTrackData($ffxiv->id, $ffxiv->name, $ffxiv->album->name, 'blue' );
$dao->insertTrackData($kh3->id, $kh3->name, $kh3->album->name, 'blue' );

$dao->insertTrackData($loh->id, $loh->name, $loh->album->name, 'yellow' );
$dao->insertTrackData($ffx->id, $ffx->name, $ffx->album->name, 'yellow' );
$dao->insertTrackData($mc->id, $mc->name, $mc->album->name, 'yellow' );

//example of getting columns from pdo object
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
?>
