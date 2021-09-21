<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>List ManagementPhone</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Phone Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $prod )
            <tr>
                <td>{{$prod->Id}}</td>
                <td>{{$prod->PhoneName}}</td>
                <td><img src="ImgPhone/{{$prod->Image}}" width="100px" alt=""></td>
                <td>{{$prod->Price}}</td>
                <td><a href="{{route('product.addCart',['Id'=>$prod['Id']])}}">Add Cart</a></td>
                @empty
                <td colspan="5">No data!</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
