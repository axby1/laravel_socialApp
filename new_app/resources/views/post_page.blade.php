<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style type="text/css">

    table,tr,td{
        border: 1px solid black;
        border-collapse: collapse;

    }

    tr,td{
        background: skyblue;
        text-align:center;
    }
    </style>
</head>
<body>
    <x-app-layout>
    </x-app-layout>

    <div style="padding-left:15%; padding-top: 30px;">
        <table style="width:80%">
            <tr>
                <th>Post Description</th>

                <th>Image</th>

                <th>Update</th>

                <th>Delete</th>
            </tr>
            @foreach($post as $post)
            <tr>
                <td>{{$post->description}}</td>

                <td>
                    <img  height ="200px" width ="200px" src="post/{{$post->image}}">
                </td>

                <td>
                <a href="{{url('update_post',$post->id)}}" class="btn btn-primary">Update</a>
                </td>

                <td>
                    <a onclick ="return confirm('are you sure to delete this?');" href="{{url('delete_post',$post->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach            
        </table>   
    </div> 
</body>
</html>