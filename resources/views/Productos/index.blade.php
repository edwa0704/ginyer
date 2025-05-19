<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mi App Invetario</h1>
    <br>
    {{ $productos }}
    <br>
    
    <table border="1">
        <thead>
            <tr>
                <th>nombres</th>
                <th>pri_ape</th>
                <th>seg_ape</th>
                <th>Tipo_doc</th>
                <th>nombres</th>

            </tr>
        </thead>
        <body>
            @foreach ($productos as $producto)
            <tr>
            
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->pri_ape }}</td>
            <td>{{ $producto->seg_ape }}</td>
            <td>{{ $producto->docu_tip }}</td>
            <td>{{ $producto->docu_num }}</td>
            </tr>
            @endforeach
        </body>
    </table>
</body>
</html>