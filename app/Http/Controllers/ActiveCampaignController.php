<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ActiveCampaignController extends Controller
{
    public function page1()
    {
        return view('campaign.page1');
    }

    public function page2()
    {
        Session::put('pageStartTime',Date('Y-m-d H:i:s'));
        
        return view('campaign.page2');
    }

    public function page3()
    {
        return view('campaign.page3');
    }

    public function page4()
    {
        if(Session::has('contactId')) {
            $this->saveTag(14);
        }

        return view('campaign.page4');
    }

    public function page5()
    {
        if(Session::has('contactId')) {
            $this->saveTag(15);
            $this->saveTag(16);
            $this->saveTag(17);
            $this->saveTag(18);
        }
        return view('campaign.page5');
    }

    public function storeContact(Request $request)
    {
        $api_key = env("AVTIVE_CAMPAIGN_KEY");
        if(Session::has('contactId')){
            Session::forget('contactId');
        }

        $name = explode(' ',$request->name);
        if(count($name) == 2){
            $firstname = $name[0];
            $lastname = $name[1];
        } 

        $data['contact'] = [
            'email' => $request->email,
            'firstName' => isset($firstname) ? $firstname : $request->name,
            'lastName' => isset($lastname) ? $lastname : ''
        ];

        $contact = json_encode($data);
        try{
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST','https://thesupermail.api-us1.com/api/3/contacts',[
            'body' => $contact,
            'headers' => [
                'accept' => 'application/json',
                'content-type' => 'application/json',
                'Api-Token' => $api_key
            ],
        ]);        
        
        if($response->getStatusCode() == "200" || $response->getStatusCode() == "201") {
            $response_data = json_decode($response->getBody(),true);
            Session::put('contactId', $response_data['contact']['id']);
            $this->saveTag(10);
            $this->saveTag(11);
            return redirect('/vsl');
        }
    } catch(\GuzzleHttp\Exception\ClientException $e){
        $error['error'] = $e->getMessage();
        if ($e->hasResponse()){
            $error['response'] = $e->getResponse()->getBody()->getContents();
            $error_decode = json_decode($error['response'],true);
            
            return redirect('/ads')->with('error',$error_decode['errors'][0]['title']);
        }
        return redirect('/ads')->with('error','Something went wrong!');
        // take other actions
    } catch(\Exception $e){
        return redirect('/ads')->with('error','Internal Server Error');
    }
    }

    public function storePage2tags()
    {
        $to = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', Session::get('pageStartTime'));
        $from = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', Date('Y-m-d H:i:s'));

        $diff_in_minutes = $to->diffInMinutes($from);
        Session::forget('pageStartTime');

        if(Session::has('contactId')) {
            $this->saveTag(12);
            if($diff_in_minutes > 15){
                $this->saveTag(13);
            }
            return redirect('/survey');
        }
    }

    
    public function saveTag($tagId)
    {
        $api_key = env("AVTIVE_CAMPAIGN_KEY");        
        $data['contactTag'] = [
            'contact' => Session::get('contactId'),
            'tag' => $tagId,
        ];

        $tag = json_encode($data);
        try{
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST','https://thesupermail.api-us1.com/api/3/contactTags',[
            'body' => $tag,
            'headers' => [
                'accept' => 'application/json',
                'content-type' => 'application/json',
                'Api-Token' => $api_key
            ],
        ]); 
        // if($response->getStatusCode() == "200" || $response->getStatusCode() == "201") {
        //     echo "tag Added";
        //     exit;
        // }
        } catch(\GuzzleHttp\Exception\ClientException $e){
            return redirect('/ads')->with('error','Something went wrong while adding a tag!');            
        }       
    }
}
