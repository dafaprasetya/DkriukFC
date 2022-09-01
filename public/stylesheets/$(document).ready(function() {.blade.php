$(document).ready(function() {
    $('#join-form').submit(function (e) {
        e.preventDefault();
        var nama = document.getElementById("nama").value;
        var tanggal = document.getElementById("date-picker").value;
        var hp = document.getElementById("nomor-hp").value;
        var email = document.getElementById("email").value;
        var ktp = document.getElementById("ktp").value;

        $.ajax({
            type: "POST",
            url: "{{ route('jaoint') }}",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                nama: nama,
                tanggal: tanggal,
                hp:hp,
                email:email,
                ktp:ktp,

            },
            success: function (response) {
                alert("Terimakasih");
            },
            error: function (response) {
                alert('engror')
             }

        });
     })
 })
