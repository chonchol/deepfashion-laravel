<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function storeFeedback(Request $request)
    {

        $validatedData = Validator::make($request->all(),[
            'name'           => 'required|max:255',
            'email'          => 'required',
            'phone_number'   => 'required',
            'message'        => 'required',
            'accept_privacy' => 'required',
        ]);

        if ($validatedData->fails()) {
            return redirect(url()->previous() .'#contact')
                ->withErrors($validatedData)
                ->withInput();
        }

        $feedback                 = new Feedback();
        $feedback->name           = $request->input('name');
        $feedback->email          = $request->input('email');
        $feedback->phone_number   = $request->input('phone_number');
        $feedback->message        = $request->input('message');
        $feedback->accept_privacy = $request->input('accept_privacy') == 0 ? 0 : 1;

        $feedback->save();

        if ($validatedData){
            Mail::to('info@deepfashion.co')->send(new SendMail($feedback));
        }

        return redirect('/#contact')->with('message', 'Feedback Submitted Successfully!');
        //return response()->json(['message' => 'Feedback Submitted Successfully!']);
    }

}
