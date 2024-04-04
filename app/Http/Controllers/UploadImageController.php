<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UploadImageController extends Controller
{

    function index() : View
    {
        return view('upload');
    }


    function upload(Request $request) : JsonResponse
    {
        try {
            $this->validate($request, [
                'upl' => ['image', 'mimes:jpeg,png,jpg,gif,svg'],
            ]);

            $year = date("Y");
                $date = Carbon::now();
                $month = $date->format('F');
                $path_date = $month.$year;
                $fullpath = "public/galleries/".$path_date;
                $array = [];

            if (is_array($request->file('upl'))) {
                // Handle multiple files
                $files = $request->file('upl');
                foreach ($files as $file) {
                    // Process each file
                    $path = $file->store($fullpath);
                    Log::info($path);
                }
            } else {

                // $path = $request->file('upl')->store($fullpath);
                $path = Storage::disk('local')->put($fullpath, $request->file('upl'), "public");
                $absolutePath = str_replace('public/', '', $path);
                Log::info("absolutePath::: ".$absolutePath);
                $array[] = $absolutePath;

                Gallery::create([
                    "owner" => $request->owner != null ? $request->owner : $this->extractDeviceName($request->header('User-Agent')),
                    "message" => $request->message != null ? $request->message : "Unknown",
                    "images" => json_encode($array),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ]);

                Log::info("Uploaded successfully");
            }

            return new JsonResponse(["status" => "success"], 201);
        } catch (Exception $e) {
            Log::error("ERORR 500: ".$e->getMessage());
            return new JsonResponse(["status" => "error"], 500);
        }
    }


    private function extractDeviceName($userAgent)
    {
        if (stripos($userAgent, 'iphone') !== false) {
            return 'iPhone';
        } elseif (stripos($userAgent, 'android') !== false) {
            return 'Android';
        } else {
            return 'Unknown';
        }
    }

}
