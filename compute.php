
<?php
$param        = $_POST['data'];
$committee_id = $_POST['id'];
$id = $_GET['appdate'];
header('Content-Type: application/json');


if ($id == "legisdata") {
    $url  = "http://104.198.0.197:8080/legislators?&apikey=7956e02432db4a279f0fa5c1aff1431f&per_page=all";
    $json = file_get_contents($url);
}
if ($id == "legissenate") {
    $url  = "http://104.198.0.197:8080/legislators?chamber=senate&apikey=7956e02432db4a279f0fa5c1aff1431f&per_page=all";
    $json = file_get_contents($url);
}
if ($id == "legishouse") {
    $url  = "http://104.198.0.197:8080/legislators?chamber=house&apikey=7956e02432db4a279f0fa5c1aff1431f&per_page=all";
    $json = file_get_contents($url);
}
if ($id == "committees") {
    $url2 = "http://104.198.0.197:8080/committees?&apikey=7956e02432db4a279f0fa5c1aff1431f&per_page=50";
    $json = file_get_contents($url2);
}
if ($id == "bills") {
    $url3 = "http://104.198.0.197:8080/bills?&apikey=7956e02432db4a279f0fa5c1aff1431f&per_page=50";
    $json = file_get_contents($url3);
}
echo $json;
?>
