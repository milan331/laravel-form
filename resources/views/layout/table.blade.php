<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>table</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="table-responsive">
        <table class="table" id="dtBasicExample">
            
            <thead>
                <tr>
                <th class="th-lg">Id</th>
                <th class="th-lg">email</th>
                <th class="th-lg">username</th>
                <th class="th-lg">password</th>
                <th class="th-lg">confirm_password</th>
                <th class="th-lg">first_name</th>
                <th class="th-lg">last_name</th>
                <th class="th-lg">gender</th>
                <th class="th-lg">birthday</th>
                <th class="th-lg">marital_status</th>
                <th class="th-lg">position</th>
                <th class="th-lg">about</th>
                <th class="th-lg">mobile_no</th>
                <th class="th-lg">website</th>
                <th class="th-lg">facebook</th>
                <th class="th-lg">twitter</th>
                <th class="th-lg">operation</th>
                </tr>
            </thead>
            <tbody>
            @foreach($members as $member)
                <tr>
                <th scope="row">{{$member->id}}</th>
                <td>{{$member->email}}</td>
                <td>{{$member->username}}</td>
                <td>{{$member->password}}</td>
                <td>{{$member->confirm_password}}</td>
                <td>{{$member->first_name}}</td>
                <td>{{$member->last_name}}</td>
                <td>{{$member->gender}}</td>
                <td>{{$member->birthday}}</td>
                <td>{{$member->marital_status}}</td>
                <td>{{$member->position}}</td>
                <td>{{$member->about}}</td>
                <td>{{$member->mobile_no}}</td>
                <td>{{$member->website}}</td>
                <td>{{$member->facebook}}</td>
                <td>{{$member->twitter}}</td>
                <td><a href="/delete/{{$member->id}}">Delete</a><a href="form/{{$member->id}}/edit">Edit</a></td>
                </tr>
            @endforeach    
            </tbody>
        </table>
    </div>
    <script>
    $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>


  
</body>
</html>