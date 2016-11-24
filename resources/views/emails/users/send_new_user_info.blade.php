Welcome {{$user['name']}}, you have been add to our platform as an 

@if($user['role'] == 1)
	Admin
@elseif($user['role'] == 2)
	Property Owner
@elseif($user['role'] == 3)
	Tenant
@endif

<br>
<br>

Your login details are <br><br>

{{$user['email']}} <br><br>
{{$user['tmp_password']}}