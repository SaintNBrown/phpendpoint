<?php 
  header('Content-Type: application/json');

  $slack_name = isset($_GET['slack_name']) ? $_GET["slack_name"] : "";
  $track = isset($_GET['track']) ? $_GET['track'] : '';

  $today = date('l');
  $utcTime = gmdate('Y-m-d\TH:i:s\Z');

  $response = [
    'slack_name' => $slack_name,
    'current_day' => $today,
    'utc_time' => $utcTime,
    'track' => $track,
    'github_file_url' => 'https:&#47;&#47;github.com&#47;SaintNBrown&#47;phpendpoint&#47;blob&#47;main&#47;endpoint.php',
    'github_repo_url' => 'https:&#47;&#47;github.com&#47;SaintNBrown&#47;phpendpoint',
    'status_code' => 200
  ];

  echo json_encode($response, JSON_PRETTY_PRINT);
?>
