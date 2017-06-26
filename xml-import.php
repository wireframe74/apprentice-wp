<?php
$site = 'http://aigwd.splashagency.com.au';
$username = "Job Import";
$password = "*Q8Rc4eUhEViZvgb";
// xml that will change title for job with id=63
$xml = "<wpjb><jobs><job><id>63</id>";
$xml.= "<job_title>My new title</job_title></job></jobs></wpjb>";

// import setup
$path = 'wp-admin/admin-ajax.php';
$url = $site.$path;
$data = array(
 'username' => $username, 
 'password' => $password,
 'xml' => $xml,
 'action' => 'wpjb_import_api'
);

$options = array(
 'http' => array(
 'header' => "Content-type: application/x-www-form-urlencoded",
 'method' => 'POST',
 'content' => http_build_query($data),
 ),
);

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$result = simplexml_load_string($result);

// parsing results
if($result->result == 0) {
 echo "Error: ".(string)$result->message;
} else {
 echo "OK.";
}
var_dump($result);?>