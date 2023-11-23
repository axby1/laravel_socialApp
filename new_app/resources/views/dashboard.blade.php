<x-app-layout>

    <div  style ="padding-left: 30%; padding-top: 10%;">

        <form action="{{url('view_post')}}" method="get">
            
            @csrf
            
            <div style="padding-left:100px; padding-bottom:20px;">
            <input type ="submit" value="View my posts" style="background: greenyellow; cursor: pointer; padding: 10px; border-radius: 10px;">
            </div>
        </form>   


        <label style ="padding-left: 25%; font-size: 20px; font-weight:bold;">Add a Post</label>
        <br><br>
        <form action="{{url('upload_post')}}" method="post" enctype="multipart/form-data">
            
            @csrf

            <div>
            <label>Description</label>
            <input type="text" name="description">
            </div>
            <br><br>
            <div>
            <label>Upload an Image</label>
            <input type="file" name="image">
            </div>
            <br><br>
            <div>
                <input type="submit" name="" style="background: skyblue; cursor: pointer; padding: 10px; border-radius: 10px;">

            </div>

        </form>   
    </div>
</x-app-layout>
