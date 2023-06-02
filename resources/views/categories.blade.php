<!DOCTYPE html >
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content= "width=device-width,
                    user-scalable=no,
                    initial-scale=1.0, 
                    maximum-scale=1.0, 
                    minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
          rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
          crossorigin="anonymous">
          <style>
        table, th, td {
            border: 1px solid black;
            background-color: DodgerBlue;
        }
        th, td {
            background-color: #F0FFFF;
            text-align: center;
        }
    </style>
</head>

<body>
@foreach ($view  as $row)
    @if ($row->active == false)
        <h1>404 <br></h1>
        <h2>No such category or category is inactive</h2>
    @else
        <div>
            <h1>{{"Category Name: {$row->name}"}}<br></h1>
            <h1>{{"ID: {$row->id}"}}<br></h1>
            <h2>{{"Symbol code: {$row->code}"}}<br></h2>
            <h2>{{"Is active: {$row->active}"}}<br></h2>
            <h2>{{"Root category: {$row->root_category}"}}<br></h2>
            <h2>{{"Created at: {$row->created_at}"}}<br></h2>
            <h2>{{"Category Name: {$row->name}"}}<br></h2>

            <form action="" method="get">
                <input type="text" name="prodPrice" placeholder="Enter price">
                <br>
                <button type="submit">Filter</button>
            </form>

            <table>
                <thead>
                <tr>
                <th witdh = 10%>ID</th>
                    <th>Product name</th>
                    <th>Code</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Category ID</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($pro as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->code}}</td>
                        <td text-align: center>{{$row->description}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->quantity}}</td>
                        <td><img src= {{$row->img}} style="width:96px;height:96px;"></td>
                        <td>{{$row->cat_id}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    @endif
@endforeach
</body>


</html>