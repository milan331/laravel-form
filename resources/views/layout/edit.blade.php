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

<h2>Edit Form</h2>

<form method="Post" action="{{route('form.update', $data->id)}}">
  
  @csrf
  {{ method_field('PUT') }}

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="username">Upload files</label>
                    <input type="file" name="file" placeholder="">
                </div>
            </div>
            <div class="col-sm-9">
                <h3 class="mgbt-xs-15">Account Setting</h3>
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" value="{{$data->email}}">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" value="{{$data->username}}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" value="{{$data->password}}">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name="confirm_password" placeholder="Password" value="{{$data->confirm_password}}">
                </div>
        
                <h3 class="mgbt-xs-15">Profile Setting</h3>
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" name="first_name" placeholder="first name" value="{{$data->first_name}}">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="last_name" placeholder="last name" value="{{$data->last_name}}">
                </div>
                <div class="form-group">
                    <label for="">Gender</label>
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
                    <label for="confirm-password">Birthday</label>
                    <input type="text" name="birthday" value="{{$data->birthday}}">
                </div>
                <div class="form-group">
                    <label for="">Marital Status</label>
                    <select name="marital_status" id="">
                    <option value="single" >Single</option>
                    <option value="married" >Married</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Position</label>
                    <select name="position" id="">
                    <option value="CEO">CEO</option>
                    <option value="director">Director</option>
                    <option value="manager">Manager</option>
                    <option value="staff">Staff</option>
                    <option value="office boy">Office Boy</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="confirm-password">About</label>
                    <textarea name="about" id="" cols="20" rows="3" value="{{$data->about}}"></textarea>
                </div>

                <h3 class="mgbt-xs-15">Contact Setting</h3>
                <div class="form-group">
                    <label for="">Mobile Phone</label>
                    <input type="text" name="mobile_no" placeholder="Mobile No." value="{{$data->mobile_no}}">
                </div>
                <div class="form-group">
                    <label for="">Website</label>
                    <input type="text" name="website" placeholder="Website" value="{{$data->website}}">
                </div>
                <div class="form-group">
                    <label for="">Facebook</label>
                    <input type="text" name="facebook" placeholder="Facebook" value="{{$data->facebook}}">
                </div>
                <div class="form-group">
                    <label for="">Twitter</label>
                    <input type="text" name="twitter" placeholder="Twitter" value="{{$data->twitter}}">
                </div>
            </div>

            <div class="pd-20">
                <button class="btn vd_btn vd_bg-green col-md-offset-3" type="submit" value="submit">Submit</button>
            </div>

        </div>        
    </div>
    

</form>

</body>
</html>
 