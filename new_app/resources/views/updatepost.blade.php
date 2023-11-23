<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<x-app-layout>
    </x-app-layout>

    <div style="padding-left:40%; padding-bottom:10%;">
        <form action="{{url('confirm_update',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf
            <div>
                <label>Post Description</label>
                <input type ="text" name="description" value="{{$data->description}}">         
            </div>
            <br>

            <div>
                <label>Current Image</label>
                <img src="/post/{{$data->image}}" height="200px" width="200px">         
            </div>
            <br>
            <div>
                <label>Change Image</label>
                <input type ="file" name="image">         
            </div>
            <br>
            <div>
                <input type ="submit" value="Update Post" style="background: skyblue; cursor: pointer; padding: 10px; border-radius: 10px;">         
            </div>

        </form>

    </div>   

</body>
</html>