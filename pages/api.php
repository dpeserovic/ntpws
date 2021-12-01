<?php
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://free-nba.p.rapidapi.com/teams?page=0",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: free-nba.p.rapidapi.com",
        "x-rapidapi-key: 439febadaemshb73284fc718c829p10f59djsn0c17c87c6348"
    ],
]);
$response = json_decode(curl_exec($curl), true);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
}
?>
<h1 class="title title-primary-api">NBA</h1>
<h3 class="title title-secondary-api">API: free-nba.p.rapidapi - ENDPOINT: teams</h3>
<h3 class="title title-secondary-api">[TEAM NAME] - [CONFERENCE] - [DIVISION]</h3>
<ul class="ul ul-api">
    <?php
    for ($i = 0; $i <= 29; $i++) {
        echo '<li>' . $response['data'][$i]['full_name'] . ' - ' . $response['data'][$i]['conference'] . ' - ' . $response['data'][$i]['division'] . '</li>';
    }
    ?>
</ul>