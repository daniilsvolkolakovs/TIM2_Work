<x-app-layout>
    <div style="padding-left: 40%; padding-top: 10%;">
        
        <form action="{{url('view_post')}}" method="get" style="padding-bottom:10px ;">
            @csrf
            <div>
                <input type="submit" value="View my Post" style="background: blue ; color: white; cursore: pointer; padding: 5px; border-radius: 10px;">
            </div>
        </form>

        <label style="padding-left: 7%;font-size: 20px; font-weight: bold;">Add your Audi Foto</label>
        <br><br>
        <form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Description</label>
                <input type="text" name="desription">    
            </div>
                <br>
            <div>
                <label>Upload a Image</label>
                <input type="file" name="image">    
            </div>
                <br>
            <div>
                <input type="Submit" style="background: red ; color: white; cursore: pointer; padding: 10px; border-radius: 15px;">
            </div>
        </form>
    </div>
</x-app-layout>