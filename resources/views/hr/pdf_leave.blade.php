<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('../fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('../fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('../fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('../fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }

        body {
            font-family: "THSarabunNew";
    
            text-align: center;
        }
        a {
            font-size: 40px;
        }

    </style>
</head>

<body>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                <a align = 'center'>ประวัติการลา</a>
                </div>
            </nav>
            <br>
            <br>
            <br>
            <br>
    <div class="content">
        <div class="container-fluid">
           <div class="row">
            <div class="col-sm-">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>เรื่อง</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>ตำเเหน่ง</th>
                        <th>ประเภทการลา</th>
                        <th>เนื่องจาก</th>
                        <th>ตั้งเเต่</th>
                        <th>จนถึง</th>
                        <th>รวมวันลา</th>
                    </tr>
                </thead>
                @foreach($user_aaa as $ticket)
                <tbody>
                    <tr>
                    <td>{{$ticket->id}}</td>
                    <td>{{$ticket->affair}}</td>
                    <td>{{$ticket->lea_fname}}</td>
                    <td>{{$ticket->lea_lname}}</td>
                    <td>{{$ticket->position}}</td>
                    <td>{{$ticket->leave}}</td>
                    <td>{{$ticket->since}}</td>
                    <td>{{$ticket->date1}}</td>
                    <td>{{$ticket->date2}}</td>
                    <td>{{$ticket->da}}</td>
                    </tr>
                </tbody>
                @endforeach
                </table>
                </div>
                </div>
                </div>
                </div>
        </div>
    </div>
    <!--   -->
</body>
<!--   Core JS Files   -->
</html>
