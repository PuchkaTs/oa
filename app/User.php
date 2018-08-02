<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'lastName', 'registerId', 'phone', 'school', 'grade', 'district', 'parentName', 'parentPhone', 'parentMail', 'confirmed'
    ];

    protected $hidden = ['remember_token', 'authy_status', 'authy_id'];



    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function setBirthAttribute($date)
    {
        $this->attributes['birth'] = Carbon::parse($date);
    }

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function surgaltuud()
    {
        return $this->belongsToMany('App\Surgalt');
    }

    public function isAdmin()
    {   
        if ($this->role->name == 'super_admin'){

            return true;
        }  
        if ($this->role->name == 'viewer'){

            return true;
        }   
        if ($this->role->name == 'editor'){

            return true;
        }               
        return false;
    }

    public function hasRole($ArrayNames)
    {
        if (in_array($this->role->name, $ArrayNames))
        {
            return true;
        }
        
        return false;
    }

    public function posts()
    {
        return $this->hasMany('App\Post', 'user_id');
    } 

    public function orders()
    {
        return $this->hasMany('App\Order', 'user_id');
    }     

    public function orderedproducts()
    {
        return $this->hasMany('App\Orderedproduct', 'user_id');
    }  

// authy
  public function register_authy() {
    $authy_api = new AuthyApi(getenv('AUTHY_API_KEY'));
    $user = $authy_api->registerUser($this->email, $this->phone, $this->country_code); //email, cellphone, country_code
    if($user->ok()) {
     $this->authy_id = $user->id();
     $this->save();
     return true;
    } else {
      // something went wrong
      return false;
    }
  }
  public function sendOneTouch($message) {
    // reset oneTouch status
    if($this->authy_status != 'unverified') {
      $this->authy_status = 'unverified';
      $this->save();
    }
    $params = array(
      'api_key'=>getenv('AUTHY_API_KEY'),
      'message'=>$message,
      'details[Email]'=>$this->email,
    );
    $defaults = array(
      CURLOPT_URL => "https://api.authy.com/onetouch/json/users/$this->authy_id/approval_requests",
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => $params,
    );
    $ch = curl_init();
    curl_setopt_array($ch, $defaults);
    $output = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($output);
    return $json;
  }
  public function sendToken() {
    $authy_api = new AuthyApi(getenv('AUTHY_API_KEY'));
    $sms = $authy_api->requestSms($this->authy_id);
    return $sms->ok();
  }
  public function verifyToken($token) {
    $authy_api = new AuthyApi(getenv('AUTHY_API_KEY'));
    $verification = $authy_api->verifyToken($this->authy_id, $token);
    if($verification->ok()) {
      return true;
    } else {
      return false;
    }
  }

  // Bonus toocoh

  public function totalBonus(){

    $totalBonus = 0;

    foreach (auth()->user()->orders as $key => $order) {

        $totalBonus += $order->totalPrice;

    }

    $totalBonus = $totalBonus * 0.05;

    return $totalBonus;
  }

  public function approvedBonus(){
    $approvedBonus = 0;

    foreach (auth()->user()->orders as $key => $order) {

        if($order->delivered){
            $approvedBonus += $order->totalPrice;
        }
    }

    $approvedBonus = $approvedBonus * 0.05;

    return $approvedBonus;
  }

  public function currentBonus(){

    $currentBonus = $this->approvedBonus() - $this->usedBonus;

    return $currentBonus;
  }

  public function waitingBonus(){
    return $this->totalBonus() - $this->approvedBonus();
  }


}
