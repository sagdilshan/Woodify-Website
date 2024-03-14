<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;


class DatabaseExportController extends Controller
{


    public function exportDatabase()
    {
        try {
            // Change directory to where mysqldump is located
            chdir('C:\\xampp\\mysql\\bin');

            // Set file name
            $filename = "woodify-website_backup_" . date('Y-m-d_H-i-s') . ".sql";
            // Set path to save the SQL file
            $path = "C:\\xampp\\htdocs\\woodify-website\\xampp-database\\" . $filename;

            // Run the mysqldump command
            exec("mysqldump --user=root --host=127.0.0.1 woodify-website > {$path}");

            // Check if the file was created and is not empty
            if (file_exists($path) && filesize($path) > 0) {

                // Set notification data
                $notification = [
                    'message' => 'Database Downloaded Successfully',
                    'alert-type' => 'success'
                ];

                // Store notification data in session
                Session::flash('notification', $notification);

                // Create a streamed response to download the file
                $response = new StreamedResponse(function () use ($path) {
                    // Open a file handle for reading
                    $handle = fopen($path, 'r');

                    // Send the file content to output
                    while (!feof($handle)) {
                        echo fread($handle, 8192);
                        flush();
                    }

                    // Close the file handle
                    fclose($handle);
                });

                // Set response headers
                $response->headers->set('Content-Type', 'application/octet-stream');
                $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');

                // Return the response
                return $response;
            } else {
                // Return an error if the file is empty or not created
                return back()->with('error', 'Failed to export database or empty file created.');
            }
        } catch (\Exception $e) {
            // Handle error appropriately
            return back()->with('error', 'Failed to export database. Exception: ' . $e->getMessage());
        }


    }


}
