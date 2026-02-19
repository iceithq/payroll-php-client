<?php

require_once __DIR__ . '/../vendor/autoload.php';

$base_url = 'https://payroll.iceitapps.com/api/v2';
// $base_url = 'http://localhost:8003/api/v2';
$client = new Payroll\Client($base_url, true);
$r = $client->employee()->login('juan@mailinator.com', 'password');
$token = $r->token;
$client->token($token);
$r = $client->token($r->token)->employee()->get_timesheets();
// $r = $client->token($token)->employee()->get_leaves();
// $r = $client->token($token)->employee()->apply_for_leave([
//     'start_date' => '2024-07-01',
//     'end_date' => '2024-07-05',
//     'reason' => 'Vacation',
// ]);
// $leave_id = $r->data->id;
// $r = $client->employee()->get_leave($leave_id);
// $r = $client->employee()->cancel_leave($leave_id);
print_r($r);
