<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\Contacts;
use App\Http\Requests\ContactRequest;


class ContactsController extends Controller
{
    
     use ContactRequest;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try{
            $contacts = DB::table('contacts as cts')
            ->select(
                'cts.*',
            )
            ->get(); 
        } catch (\Exception $e) {
                
                
            }
          
            
        return view("contact/contact", ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("contact/add");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $validation = $this->ContactRequest($request);
            if (!$validation['validated']) {
                return redirect('/create')->with('message', $validation['message']);
            }
        
        try{
            $email = $request['email'];
            $contact = $request['contact'];
            
            $verification_contact = DB::table('contacts as cts')
            ->where([['cts.email', '=', $email], ['cts.contact', '=', $contact]]) 
            ->select(
                'cts.*',
            )
            ->first();
            
            if(!empty($verification_contact)){
                return redirect('/create')->with('message', 'The contact is create already');
            }else{
                $contact = $request->except('_token');
                Contacts::insert($contact);
            }
        }catch (\Exception $e) {
                return redirect('/create')->with('message', '500 ');
                
        }
        
        return redirect('/create')->with('message', 'The contact is create');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $contact = Contacts::findOrFail($id);
        
        return view('contact.edit', compact('contact') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $validation = $this->ContactRequest($request);
            if (!$validation['validated']) {
                return redirect('/edit/'.$id)->with('message', $validation['message']);
            }
           
        try{
            
            $email = $request['email'];
            $contact = $request['contact'];
            
            $verification_contact = DB::table('contacts as cts')
            ->where([['cts.email', '=', $email], ['cts.contact', '=', $contact]]) 
            ->select(
                'cts.*',
            )
            ->first();
            
            if($verification_contact != null){
                return redirect('/edit/'.$id)->with('message', 'The contact is edit already');
            }
            
            
            $contact = $request->except('_token', '_method');
            $contact = Contacts::where('id', '=', $id)->update($contact);
            $contact = Contacts::findOrFail($id);
        
        
        }catch (\Exception $e) {
                return redirect('/create')->with('message', '500 Internal Server Error');
        }
        
        return view('contact.edit', compact('contact') )->with('message', 'The contact is edit');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $contact = Contacts::destroy($id);
        return redirect('/')->with('message', 'The contact is delete');
    }
}
