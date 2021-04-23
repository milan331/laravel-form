<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Form</title>
</head>
<body>

<form class="form-horizontal" method="Post" action="{{route('form.store')}}" enctype="multipart/form-data">
@csrf
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3 mgbt-xs-20">
                <div class="form-group">
                    <label for="">Upload files</label>
                    <input type="file" name="file" >
                </div>
            </div>
            <div class="col-sm-9">
                <h3 class="mgbt-xs-15">Account Setting</h3>
                <div class="form-group">
                    <label class="px-3" for="email">Email</label>

                    <input type="email" name="email" placeholder="Enter Your Email" required>
                <span style="color: red">@error('email'){{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label class="px-3" for="username">Username</label>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label class="px-3" for="password">Password</label>
                    <input type="password"  {{--pattern="(?=.*d)(?=.*[a-z])(?=.*[A-Z]).{8,}"--}} title="must contain atleast upper and smallercase character" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label class="px-3" for="confirm-password">Confirm Password</label>
                    <input type="password" {{--pattern="(?=.*d)(?=.*[a-z])(?=.*[A-Z]).{8,}"--}} title="must contain atleast upper and smallercase character" name="confirm_password" placeholder="Password" required>
                </div>
           
                <h3 class="mgbt-xs-15">Profile Setting</h3>
                <div class="form-group">
                    <label class="px-3" for="">First Name</label>
                    <input type="text" name="first_name" maxlength="10" minlength="5" placeholder="first name" >
                </div>
                <div class="form-group">
                    <label class="px-3" for="">Last Name</label>
                    <input type="text" name="last_name" placeholder="last name" >
                </div>
                <div class="form-group">
                    <label class="px-3" for="">Gender</label>
                    <span>
                    <input type="radio" name="gender" value="male">
                    Male
                    </span>
                    <span>
                    <input type="radio" name="gender" value="female">
                    Female
                    </span>
                </div>
                <div class="form-group">
                    <label class="px-3" for="confirm-password">Birthday</label>
                    <input type="date" name="birthday" required>
                </div>
                <div class="form-group">
                    <label class="px-3" for="">Marital Status</label>
                    <select name="marital_status" id="">
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="px-3" for="">Position</label>
                    <select name="position" id="">
                    <option value="CEO">CEO</option>
                    <option value="director">Director</option>
                    <option value="manager">Manager</option>
                    <option value="staff">Staff</option>
                    <option value="office boy">Office Boy</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="px-3" for="confirm-password">About</label>
                    <textarea name="about" id="" cols="20" rows="2"></textarea>
                </div>
    
                <h3 class="mgbt-xs-15">Contact Setting</h3>
                <div class="form-group">
                    <label class="px-2" for="">Mobile Phone</label>
                    <input type="text" name="mobile_no" placeholder="Mobile No." required>
                </div>
                <div class="form-group">
                    <label class="px-3" for="">Website</label>
                    <input type="text" name="website" placeholder="Website">
                </div>
                <div class="form-group">
                    <label class="px-3" for="">Facebook</label>
                    <input type="text" name="facebook" placeholder="Facebook">
                </div>
                <div class="form-group">
                    <label class="px-3" for="">Twitter</label>
                    <input type="text" name="twitter" placeholder="Twitter">
                </div>
                <div class="px-3">
                    <button class="btn btn-primary col-md-offset-3" type="submit">Submit</button>
                </div>
            </div>           
        </div>   
    </div>       


</form>

<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
 