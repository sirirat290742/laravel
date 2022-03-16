<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            @yield("title","BikeShop | จำหน่ายอะไหล่จักรยานออนไลน์")
        </title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css')}}" >
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/angular.min.js')}}"></script>
    <script src="{{asset('vendor/toastr/toastr.min.js')}}"></script>
    </head>

    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">BikeShop</a>
                </div>
                    <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ URL::to('home')}}">หน้าแรก</a></li>
                        <li><a href="{{ URL::to('product')}}">ข้อมูลสินค้า</a></li>
                        <li><a href="#">รายงาน</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @guest
                        <li><a href="{{route('login')}}">ล็อกอิน</a></li>
                        <li><a href="{{route('register')}}">ลงทะเบียน</a></li>
                        @else
                        
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li><a href={{ URL::to('/logout')}} >logout</a></li>
                    
                        @endguest
                        <li>
                            <a href="{{ URL::to('cart/view')}}">
                                <i class="fa fa-shopping-cart"></i> ตะกร้า
                                @if(Session::get('cart_items'))
                                    <span class="label label-danger">{!! count(Session::get('cart_items')) !!}</span>
                                @else
                                    <span class="label label-danger">0</span>
                                @endif
                               
                            </a>
                        </li>
                        </ul>
                </div>

                @yield("content")
                @if(session('msg'))
                    @if(session('ok'))
                        <script>toastr.success("{{session('msg')}}")</script>
                    @else 
                    <script>toastr.error("{{session('msg')}}")</script>
                    @endif
                @endif
                
            </div> 
        </nav>    
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    </body>
</html>





















<!--<script type="text/javascript">
    toastr.success("บันทึกข้อมูลสำเร็จ");
    toastr.error("ไม่สามารถบันทึกข้อมูลได้");
    </script>-->




<!--
                <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>ราคาขาย</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>P001</td>
                                <td>ชุดจักรยาน ขนาด XL</td>
                                <td>2500.00</td>
                            </tr>
                            <tr>
                                <td>P002</td>
                                <td>หมวกกันน็อก รุ่น DL330</td>
                                <td>1500.00</td>
                            </tr>
                            <tr>
                                <td>P003</td>
                                <td>ชุดเกียร์ Shimano รุ่น SH-001</td>
                                <td>4500.00</td>
                            </tr>
                        </tbody>
                </table>
                <a href="#" class="btn btn-default">Default</a>
                <a href="#" class="btn btn-primary">Primary</a>
                <a href="#" class="btn btn-info">Info</a>
                <a href="#" class="btn btn-success">Success</a>
                <a href="#" class="btn btn-warning">Warning</a>
                <a href="#" class="btn btn-danger">Danger</a>
            
            <div class="form-inline">
                <input type="text" class="form-control" placeholder="ชื่อผู้ใช้">
                <input type="password" class="form-control" placeholder="รหัสผ่าน">
                <button class="btn btn-primary">เข้าระบบ</button>
            </div>
        

            <div class="form-group">
                <label>ชื่อ-นามสกุล</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>ที่อยู่</label>
                <textarea rows="4" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">เพิ่มข้อมูล</button>
            </div>
        

        <a href="#" class="btn btn-default"><i class="fa fa-home"></i>หน้าหลัก</a>
        <a href="#" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</a>
        <a href="#" class="btn btn-info"><i class="fa fa-edit"></i>แก้ไข</a>
        <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i>ลบ</a>
        -->