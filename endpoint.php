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
    'github_file_url' => '',
    'github_repo_url' => '',
    'status_code' => 200
  ];

  echo json_encode($response, JSON_PRETTY_PRINT);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>endpoint</title>
</head>
<body>
  <form action="<?php echo $_SERVER["PHP_SELF"] ;?>" method="get">

  </form>
</body>
</html>