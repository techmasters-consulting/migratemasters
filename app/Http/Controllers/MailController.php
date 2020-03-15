<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use SendinBlue\Client\Api\ContactsApi;
use SendinBlue\Client\Model\CreateContact;
use Vansteen\Sendinblue\Facades\Sendinblue;

class MailController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {

        //collate data
        //storedata
        //sendemailtoadminandsender
        //populaterespondvariable
        //ajax

        //return response()->json(['success'=>"Your Message has been sent successfully"]);
        $data = array(
            'email' => $request["email"],
            'fname' => $request["fname"],
            'subject' => $request["subject"],
            'lname' => $request["lname"],
            'message' => $request["message"],
        );
//
//        Mail::send('emails.newcontact', $data, function ($message) use ($data) {
//
//            $message->from( 'olalekanarowoselu@gmail.com', $data["fname"]);
//
//            $message->to('olalekanarowoselu@gmail.com')->subject($data["subject"]);
//
//        });

        // Configure API keys authorization according to the config file
        $config = SendinBlue::getConfiguration();

        // Uncomment below to setup prefix (e.g. Bearer) for API keys, if needed
        // $config->setApiKeyPrefix('api-key', 'Bearer');
        // $config->setApiKeyPrefix('partner-key', 'Bearer');

        $apiInstance = new ContactsApi (
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            new Client(),
            $config
        );
        $createContact = new CreateContact; // \SendinBlue\Client\Model\CreateContact | Values to create a contact
        $createContact['email'] = $request["email"];
        $createContact['attributes'] = array('SMS'=>$request["phone"], 'FIRSTNAME'=>$request["fname"], 'NAME'=>$request["lname"], 'DOUBLE_OPT-IN'=>'Yes');
//        $createContact['listIds'] = array(11);
//        $createContact['emailBlacklisted'] = false;
//        $createContact['smsBlacklisted'] = false;
         $createContact['updateEnabled'] = true;

        try {
            $result = $apiInstance->createContact($createContact);
            return response()->json(['success'=>"Your Message has been sent successfully"]);
        } catch (Exception $e) {
            //return response()->json(['error'=>'Exception when calling ContactsApi->createContact: '. $e->getMessage()]);
            echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
        }


        return response()->json(['success'=>'Your Message has been sent successfully.']);





    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function newsletter(Request $request)
    {

        //collate data
        //senddatatosendinblue
        //populaterespondvariable
        //ajax

        // Configure API keys authorization according to the config file
        $config = SendinBlue::getConfiguration();

        // Uncomment below to setup prefix (e.g. Bearer) for API keys, if needed
        // $config->setApiKeyPrefix('api-key', 'Bearer');
        // $config->setApiKeyPrefix('partner-key', 'Bearer');

        $apiInstance = new ContactsApi (
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            new Client(),
            $config
        );
        $createContact = new CreateContact; // \SendinBlue\Client\Model\CreateContact | Values to create a contact
        dd($request);
        $createContact['email'] = $request["email"];
        $createContact['attributes'] = array( 'DOUBLE-OPT-IN'=>'True');
//        $createContact['email'] = $request["fullname"];
//        $createContact['attributes'] = array('SMS'=>'919900994', 'FNAME'=>'John', 'LNAME'=>'Doe');
//        $createContact['listIds'] = array(11);
//        $createContact['emailBlacklisted'] = false;
//        $createContact['smsBlacklisted'] = false;
//        $createContact['updateEnabled'] = false;

        try {
            $result = $apiInstance->createContact($createContact);
            return response()->json(['success'=>"You have been subscribed to our Newsletter"]);
        } catch (Exception $e) {
            //return response()->json(['error'=>'Exception when calling ContactsApi->createContact: '. $e->getMessage()]);
            echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
        }


        return response()->json(['success'=>'You have been subscribed to our Newsletter.']);
    }
        //

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
    }
}
