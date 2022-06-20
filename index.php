<?php

$channelID = "UCxxnxya_32jcKj4yN1_kD7A"; // Muse Indonesia
// $channelID = "UCGbshtvS9t-8CW11W7TooQg"; // Muse Asia
// $channelID = "UC0wNSTMWIL3qaorLx0jie6A"; // Ani-One Asia


function get_CURL($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    return json_decode($result, true);
}

function get_CURL2($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result2 = curl_exec($curl);
    curl_close($curl);
    return json_decode($result2, true);
}


function get_CURL3($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result3 = curl_exec($curl);
    curl_close($curl);
    return json_decode($result3, true);
}


function get_CURL4($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result4 = curl_exec($curl);
    curl_close($curl);
    return json_decode($result4, true);
}


function get_CURL5($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result5 = curl_exec($curl);
    curl_close($curl);
    return json_decode($result5, true);
}


function get_CURL6($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result6 = curl_exec($curl);
    curl_close($curl);
    return json_decode($result6, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/playlists?pageToken=&part=id,snippet&channelId=' . $channelID . '&maxResults=50&key=' . $API_KEY);
$result2 = get_CURL2('https://www.googleapis.com/youtube/v3/playlists?pageToken=CDIQAA&part=id,snippet&channelId=' . $channelID . '&maxResults=50&key=' . $API_KEY);
$result3 = get_CURL3('https://www.googleapis.com/youtube/v3/playlists?pageToken=CGQQAA&part=id,snippet&channelId=' . $channelID . '&maxResults=50&key=' . $API_KEY);
$result4 = get_CURL4('https://www.googleapis.com/youtube/v3/playlists?pageToken=CJYBEAA&part=id,snippet&channelId=' . $channelID . '&maxResults=50&key=' . $API_KEY);
$result5 = get_CURL5('https://www.googleapis.com/youtube/v3/playlists?pageToken=CMgBEAA&part=id,snippet&channelId=' . $channelID . '&maxResults=50&key=' . $API_KEY);
$result6 = get_CURL6('https://www.googleapis.com/youtube/v3/playlists?pageToken=CPoBEAA&part=id,snippet&channelId=' . $channelID . '&maxResults=50&key=' . $API_KEY);

$outputs = array_merge_recursive($result, $result2, $result3, $result4, $result5, $result6);

asort($outputs);


function get_CURL_channel($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result_channel = curl_exec($curl);
    curl_close($curl);
    return json_decode($result_channel, true);
}
$result = get_CURL('https://www.googleapis.com/youtube/v3/playlists?pageToken=&part=id,snippet&channelId=' . $channelID . '&maxResults=50&key=' . $API_KEY);
$result2 = get_CURL2('https://www.googleapis.com/youtube/v3/playlists?pageToken=CDIQAA&part=id,snippet&channelId=' . $channelID . '&maxResults=50&key=' . $API_KEY);
$result3 = get_CURL3('https://www.googleapis.com/youtube/v3/playlists?pageToken=CGQQAA&part=id,snippet&channelId=' . $channelID . '&maxResults=50&key=' . $API_KEY);
$result4 = get_CURL4('https://www.googleapis.com/youtube/v3/playlists?pageToken=CJYBEAA&part=id,snippet&channelId=' . $channelID . '&maxResults=50&key=' . $API_KEY);
$result5 = get_CURL5('https://www.googleapis.com/youtube/v3/playlists?pageToken=CMgBEAA&part=id,snippet&channelId=' . $channelID . '&maxResults=50&key=' . $API_KEY);
$result6 = get_CURL6('https://www.googleapis.com/youtube/v3/playlists?pageToken=CPoBEAA&part=id,snippet&channelId=' . $channelID . '&maxResults=50&key=' . $API_KEY);

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- CSS Manual -->
    <link rel="stylesheet" href="css/desain.css"/>

    <title>Playlist Muse Indonesia</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Playlist Anime Legal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Muse Indonesia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="muse-asia.php">Muse Asia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ani-one-asia.php">Ani-One Asia</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="bg-light">
        <br>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?php echo $profilePicture ?>" class="rounded-circle img-thumbnail custom-img">
                        </div>
                        <div class="col-12">
                            <h5><?php echo $channelName ?></h5>
                            <p><?php echo $subscribersCount ?> subscribers</p>
                            <div class="g-ytsubscribe" data-channelid="UCxxnxya_32jcKj4yN1_kD7A" data-layout="default" data-theme="dark" data-count="default"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?php echo $profilePicture2 ?>" class="rounded-circle img-thumbnail custom-img">
                        </div>
                        <div class="col-12">
                            <h5><?php echo $channelName2 ?></h5>
                            <p><?php echo $subscribersCount2 ?> subscribers</p>
                            <div class="g-ytsubscribe" data-channelid="UCGbshtvS9t-8CW11W7TooQg" data-layout="default" data-theme="dark" data-count="default"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?php echo $profilePicture3 ?>" class="rounded-circle img-thumbnail custom-img">
                        </div>
                        <div class="col-12">
                            <h5><?php echo $channelName3 ?></h5>
                            <p><?php echo $subscribersCount3 ?> subscribers</p>
                            <div class="g-ytsubscribe" data-channelid="UC0wNSTMWIL3qaorLx0jie6A" data-layout="default" data-theme="dark" data-count="default"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>


    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col py-5">
                <h2 class="text-center">Playlist Muse Indonesia</h2>
            </div>
        </div>

        
        <!-- card -->
        
        <div class="row gy-4">
            <?php foreach ($outputs['items'] as $item) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="card text-white bg-dark h-100" >
                        <img src="<?php echo $item['snippet']['thumbnails']['medium']['url']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title overflow-auto"><?php echo $item['snippet']['title']; ?></p>
                        </div>
                        <a href="https://www.youtube.com/playlist?list=<?php echo $item['id']; ?>" target="_blank" class="btn btn-light btn-outline-dark btn-sm">Go to Playlist</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <br>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

    <script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>