<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">

        @include('admin.navbar')
        <div style="position: relative; top:60px; right:-150px">
            <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">

                @csrf

                <div>
                    <label style=" font-size: 14px; font-weight: bold; margin-bottom: 8px; display: block;">Title</label>
                    <input type="text" name="title" placeholder="Write a title" required
                        style="color:black; width: 100%; padding: 12px 20px; margin-bottom: 20px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
                </div>

                <div>
                    <label style="font-size: 14px; font-weight: bold; margin-bottom: 8px; display: block;">Price</label>
                    <input type="num" name="price" placeholder="Price" required
                        style="color:black; width: 100%; padding: 12px 20px; margin-bottom: 20px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
                </div>

                <div>
                    <label style="font-size: 14px; font-weight: bold; margin-bottom: 8px; display: block;">Image</label>
                    <input type="file" name="image" required
                        style="width: 100%; padding: 12px 20px; margin-bottom: 20px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
                </div>

                <div>
                    <label
                        style="font-size: 14px; font-weight: bold; margin-bottom: 8px; display: block;">Description</label>
                    <input type="text" name="description" placeholder="Description" required
                        style="color:black; width: 100%; padding: 12px 20px; margin-bottom: 20px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
                </div>

                <div>
                    <input type="submit" value="Save"
                        style="width: 100%; background-color: black; color: white; padding: 14px 20px; margin-top: 20px; border: none; border-radius: 4px; cursor: pointer;">
                </div>

            </form>
        </div>



    </div>

    @include('admin.adminscript');
</body>

</html>
