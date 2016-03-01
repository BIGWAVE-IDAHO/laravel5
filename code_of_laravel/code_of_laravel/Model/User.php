<?php namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;  
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;  
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract{
   //public $timestamps = false;
	//
	use Authenticatable, CanResetPassword; 
	protected $table = 'users';
   protected $fillable = array('email', 'password', 'first_name', 'last_name','last_update_by','phone','address','status','remember_token','created_at','updated_at');
   public function ingroup()
	{
		return $this->belongsToMany('App\Group')->withPivot('is_admin');;
	}
	public function number()
	{
		return $this->belongsToMany('App\Number');
	}
	public function numberrequest()
	{
		return $this->hasMany('App\NumberRequest');
	}
	public function getRememberToken()
    {   
     return $this->remember_token;
    }

    public function setRememberToken($value)
    {
      $this->remember_token = $value;
    }   

    public function getRememberTokenName()
    {
       return 'remember_token';
    }	
    
}
