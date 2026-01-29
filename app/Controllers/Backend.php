<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Backend extends BaseController
{
public function index()
{
    $db = \Config\Database::connect();
    $tables = $db->listTables();

    $dbSchema = [];
    foreach ($tables as $table) {
        // Skip the table if it doesn't exist or is problematic
        if ($table === 'card_data') {
            continue; // skip it
        }

        try {
            $dbSchema[$table] = $db->getFieldData($table);
        } catch (\Exception $e) {
            // optional: log the error but continue
            log_message('error', 'Failed to get field data for table ' . $table . ': ' . $e->getMessage());
        }
    }

    return view('backend/index', ['dbSchema' => $dbSchema]);
}


    public function sql()
    {
        return view('backend/sql');
        log_message('error', 'THIS IS A TEST ERROR LOG');

    }

    public function runSql()
    {
        $db = \Config\Database::connect();
        $query = $this->request->getPost('sql');

        try {
            $result = $db->query($query);

            // If SELECT query
            if (stripos(trim($query), 'select') === 0) {
                $data['results'] = $result->getResultArray();
            } else {
                $data['message'] = 'Query executed successfully.';
            }
        } catch (\Throwable $e) {
            $data['error'] = $e->getMessage();
        }

        $data['sql'] = $query;

        return view('backend/sql', $data);
    }

        public function plan()
    {
        return view('backend/plan');
    }
}
