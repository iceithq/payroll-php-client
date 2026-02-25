# Payroll PHP Client

```
composer require iceithq/payroll-php-client
```

## Usage

```
<?php

require_once __DIR__ . '/../vendor/autoload.php';

$base_url = 'http://localhost:8003/api/v2';
$client = new Payroll\Client($base_url, true);
$r = $client->employee()->login('your_username', 'your_password');
$token = $r->token;
$client->token($token);
$r = $client->employee()->time_in();
$r = $client->employee()->time_out();
$r = $client->employee()->get_timesheets();

$r = $client->employee()->apply_for_leave([
    'start_date' => '2024-07-01',
    'end_date' => '2024-07-05',
    'reason' => 'Vacation',
]);
$r = $client->employee()->get_leaves();

print_r($r);

```
