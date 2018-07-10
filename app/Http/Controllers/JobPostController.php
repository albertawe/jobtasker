<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\JobPost;

class JobPostController extends Controller
{
    public function getAllJobPost(){
        $job_post = JobPost::get();
        return $job_post;
    }

    public function getJobPost($id){
        $job_post = JobPost::find($id);
        return $job_post;
    }

    public function addJobPost(Request $request){
        $credentials = $request->only('posted_by_id', 'job_type', 'job_category', 'status', 'assigned_tasker_id',
                                            'due_date', 'price', 'address', 'job_description');

        $rules = [
            'posted_by_id' => 'required|max:255',
            'job_type' => 'required|max:255',
            'job_category' => 'required|max:255',
            'status' => 'required|max:255',
            'assigned_tasker_id' => 'required|max:255',
            'due_date' => 'required|max:255',
            'price' => 'required|max:255',
            'address' => 'required|max:255',
            'job_description' => 'required|max:255'
        ];
        $validator = Validator::make($credentials, $rules);

        if($validator->fails()) {
            return response()->json(['success'=> false, 'error'=> $validator->messages()]);
        }

        $job_post = new JobPost;

        $payment_id = sprintf('P-%07d', JobPost::orderBy('id', 'desc')->first()->id + 1);

        $job_post->payment_id = $payment_id;
        $job_post->posted_by_id = $request->posted_by_id;
        $job_post->job_type = $request->job_type;
        $job_post->job_category = $request->job_category;
        $job_post->status = $request->status;
        $job_post->assigned_tasker_id = $request->assigned_tasker_id;
        $job_post->due_date = $request->due_date;
        $job_post->price = $request->price;
        $job_post->address = $request->address;
        $job_post->job_description = $request->job_description;

        $job_post->save();

        return response()->json(['success'=> true, 'message'=> 'User skill successfully added.']);
    }

    public function updateJobPost(Request $request, $id){
        $credentials = $request->only('posted_by_id', 'job_type', 'job_category', 'status', 'assigned_tasker_id',
            'due_date', 'price', 'address', 'job_description');

        $rules = [
            'posted_by_id' => 'required|max:255',
            'job_type' => 'required|max:255',
            'job_category' => 'required|max:255',
            'status' => 'required|max:255',
            'assigned_tasker_id' => 'required|max:255',
            'due_date' => 'required|max:255',
            'price' => 'required|max:255',
            'address' => 'required|max:255',
            'job_description' => 'required|max:255'
        ];
        $validator = Validator::make($credentials, $rules);

        if($validator->fails()) {
            return response()->json(['success'=> false, 'error'=> $validator->messages()]);
        }

        $job_post = JobPost::find($id);

        $job_post->posted_by_id = $request->posted_by_id;
        $job_post->job_type = $request->job_type;
        $job_post->job_category = $request->job_category;
        $job_post->status = $request->status;
        $job_post->assigned_tasker_id = $request->assigned_tasker_id;
        $job_post->due_date = $request->due_date;
        $job_post->price = $request->price;
        $job_post->address = $request->address;
        $job_post->job_description = $request->job_description;

        $job_post->save();

        return response()->json(['success'=> true, 'message'=> 'User skill successfully updated.']);
    }

    public function deleteJobPost($id){
        $job_post = JobPost::find($id);

        $job_post->delete();

        return response()->json(['success'=> true, 'message'=> 'Job post deleted successfully.']);
    }
}
