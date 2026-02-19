<?php

namespace Payroll;

class EmployeeResource
{
    private Client $client;

    function __construct($client)
    {
        $this->client = $client;
    }

    function hello()
    {
        return $this->client->get('/employee/hello');
    }

    // function update_avatar($avatar_url)
    // {
    //     $data = array('avatar_url' => $avatar_url);
    //     return $this->client->post_json('/employee/update_avatar', $data);
    // }

    function login($username, $password)
    {
        $data = array('username' => $username, 'password' => $password);
        return $this->client->post_json('/auth/employee/login', $data);
    }

    function get_timesheets()
    {
        $data = [];
        return $this->client->get('/me/timesheets', $data);
    }

    function verify($code)
    {
        return $this->client->post_json('/auth/employee/verify', ['code' => $code]);
    }

    function register($employee)
    {
        return $this->client->post_json('/auth/employee/register', $employee);
    }

    function get_leaves()
    {
        return $this->client->get('/employee/leaves');
    }

    function get_leave($leave_id)
    {
        return $this->client->get('/employee/leaves/' . $leave_id);
    }

    function apply_for_leave($leave_application)
    {
        return $this->client->post_json('/employee/leaves', $leave_application);
    }

    function cancel_leave($leave_id)
    {
        return $this->client->post_json('/employee/leaves/' . $leave_id . '/cancel', []);
    }

    function get_profile()
    {
        return $this->client->get('/employee/profile');
    }
}
