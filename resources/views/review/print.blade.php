 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Report Review Buku</title>
    <style>
          body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        /* .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:auto;
            height:auto;
            background-color:#fff;
        } */
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:740px;
        }
        td, tr, th{
            padding:12px;
            border:1px solid #333;
            width:185px;
        }
        td{
            text-transform: capitalize !important;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin-top:10px;
        }
    </style>
</head>
<body>
<div class="container">

<table class="table">
    <caption>Review Buku Siswa</caption>
    <tr>
        <td colspan="4">
           
            <h4>Nama Lengkap : {{$print->name}} </h4>
        </td>
        <td>
            <h4>Kelas : {{$print->nama_kelas}}</h4>
           
        </td>
    </tr>
           
    </thead>
    <tbody>
        
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tempat Terbit</th>
            <th>Halaman</th>
        </tr>
         <tr>
        <td>{{$print->judul_buku}}</td>
            <td>{{$print->penulis}}</td>
            <td>{{$print->penerbit}}</td>
            <td>{{$print->tempat_terbit}}</td>
            <td>{{$print->jumlah_halaman}}</td>
        </tr>
        <tr>
            <td colspan="5">
            <strong>Sinopsis</strong>
            <p>{{$print->sinopsis}}</p>
            </td>
        </tr>
        <tr>
            <td colspan="5">
            <strong>Kelebihan</strong>
            <p>{{$print->kelebihan}}</p>
            </td>
        </tr>
        <tr>
            <td colspan="5">
            <strong>Kekurangan</strong>
            <p>{{$print->kekurangan}}</p>
            </td>
        </tr>
        <tr>
            <td colspan="5"> 
            <strong>Kesimpulan</strong>
            <p>{{$print->kesimpulan}}</p>
            </td>
        </tr>

    </tbody>
</table>
</div>
</body>
</html>