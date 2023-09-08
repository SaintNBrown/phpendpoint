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
    'github_file_url' => 'https://github.com/SaintNBrown/phpendpoint/blob/main/endpoint.php',
    'github_repo_url' => 'https://github.com/SaintNBrown/phpendpoint',
    'status_code' => 200
  ];

  echo json_encode($response, JSON_PRETTY_PRINT);
?>