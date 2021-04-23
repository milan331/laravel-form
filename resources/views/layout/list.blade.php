<h1>Users List</h1>

<table border=3>
    <tr>
        <th>Id</th>
        <th>email</th>
        <th>username</th>
        <th>password</th>
        <th>confirm_password</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>gender</th>
        <th>birthday</th>
        <th>marital_status</th>
        <th>position</th>
        <th>about</th>
        <th>mobile_no</th>
        <th>website</th>
        <th>facebook</th>
        <th>twitter</th>
        <th>operation</th>
    </tr>

    @foreach($members as $member)
        <tr>
            <td>{{$member->id}}</td>
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
</table>
<div>
    {{$members->links()}}
</div>
<style>

</style>