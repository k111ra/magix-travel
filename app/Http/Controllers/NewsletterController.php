<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Facades\Newsletter;
class NewsletterController extends Controller
{
    //
    public function subscribe(Request $request){
        $request->validate([
            'email'=>'required|email'
        ]);
        try {
            if (Newsletter::isSubscribed($request->email)) {
                return redirect()->back()->with('error','vous étes déjà inscrit');
            }else {
                Newsletter::subscribe($request->email);
                return redirect()->back()->with('success','vous étes inscrit avec succes');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());

        }
    }
}
