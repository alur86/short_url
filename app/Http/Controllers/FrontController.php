<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;
use App\Link;
use Carbon\Carbon;

use App\Http\Requests\AddUrlRequest;


class FrontController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index');
    }

   public function postAddUrl(AddUrlRequest  $request) 
    {
         $expired = Carbon::createFromFormat('d-m-Y', $request->get('datetimepicker1'))->format('Y-m-d');
         $link = new Link;
         $link->url = $request->get('url');
         $link->code = Link::MakeURL($request->get('url'));
         $link->created_at = Carbon::now(); 
         $link->expire_at =$expired;
         $link->save();
        \Session::flash('flash_message','Url was successfully added.');
         return redirect('show');
    }





  public function showUrl()
    {
    $links = Link::orderBy('created_at', 'asc')->paginate(5);
    return view('front.show')->with('links', $links);

    }














}
