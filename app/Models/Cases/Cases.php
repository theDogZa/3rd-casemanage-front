<?php

namespace App\Models\Cases;

use Illuminate\Database\Eloquent\Model;
use \Curl\Curl;

class Cases extends Model
{
    public $sortable = ['id', 'product_id'];

    protected $API_HOST_TICKET = "http://192.168.22.16:4306/api/1.0.0/";
    protected $API_TOKEN_OS = "&access_token=rAGiAUURPKNR5EHT0sK9qX0DU1ELeYDkeJAFWoDA4bVn3LNBV34IIshxdEn70Qhh";
    //
    public function scopeGetCasesList(){
        $userid = 3;

        $strApiUrl_user = $this->API_HOST_TICKET . 'cm/userinfos/casemanage?user_id=' . $userid . '' . $this->API_TOKEN_OS;
       
        $curl = new Curl();
        $response_user = $curl->get($strApiUrl_user);
        $err_user = $curl->error;        
        if ($err_user) {
            echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
        }
        $curl->close();
        $arr_main['customer_id'] = "1";
        if (count($response_user->resultData[0]->dept_id) != 1) { //user ทั่วไปจะมีแค่ 1dept แต่ถ้าใครมีมากกว่า 1 เอา dept อันที่สองมาใช้ก่อน
            $arr_main['dept_id'] = [(int) $response_user->resultData[0]->dept_id[1]];
        } else {
            $arr_main['dept_id'] = [(int) $response_user->resultData[0]->dept_id[0]];
        }

        $arr_main['user_type'] = (int) $response_user->resultData[0]->user_type;
        $arr_main['user_level'] = (int) $response_user->resultData[0]->user_level;
        // $arr_main['user_level']=2; //เทส เดะปิดอันนี้เปิดอันบน อันล่างเปลี่ยนเป็น ==
        if ((int) $response_user->resultData[0]->user_level == 1) {
            $arr_main['search_criteria'] = ['owner_id' => (int) $response_user->resultData[0]->user_id];
        } else {
            $arr_main['search_criteria'] = (object) [];
        }

        $strApiUrl = $this->API_HOST_TICKET . 'cm/search?' .$this->API_TOKEN_OS;

        $curl = new Curl();
        $curl->setHeader('Content-Type', 'application/json');
        $response = $curl->post($strApiUrl, json_encode($arr_main));
        $err = $curl->error;        
        if ($err) {
            echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
        }
        $curl->close();
        
       //  $arrData = array();
       //  $arrData['data'] = $response->resultData->caseInfo;     

       // dd($response);die;
       // $results->test = (object)array();
       // $results->test = $this->aaa();
        $results = $response->resultData;
        return $results;
    }

    public function setTestAttribute()
    {
        return $this->attributes['Test'] = strtolower(Test);
        
    }

    public function getTotalCostAttribute()
    {
        return 500;
    }

    public function scopeAaa($name = ''){
        return 5000;
    }
}
