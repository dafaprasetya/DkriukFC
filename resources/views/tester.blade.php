<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
    <table>
        <thead>
            <th>id</th>
            <th>nama</th>
        </thead>
        <tbody>
            <td>1</td>
            <td>ujang</td>
        </tbody>
        <p id="test"></p>
    </table>
    <script>
        test();
        function test() {
            $.ajax({
                type: "GET",
                url: "{{ route('ujang') }}",

                dataType: "json",
                success: function (response) {
                    console.log(response.shelby);
                    $.each(response.shelby, function (key, item) {
                        $('#test').append(item.nama);
                    });
                }
            });
        }
        setInterval(test(), 1000);
    </script>
</body>
</html>
