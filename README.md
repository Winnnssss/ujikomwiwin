<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




@extends('_template_back.layout')

@section('content')
    	<!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div>
                <h4 class="content-title mb-2">Hi, welcome back!</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a   href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Basic Tables</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- /breadcrumb -->

        <!-- row opened -->
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex my-auto btn-list justify-content-end">
                         <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Data</a>
                        
                <div class="card-body mt-3">
                        <!-- @include('_component.pesan') -->
                        <div class="table-responsive">
                            <table class="table table-striped table mg-b-0 text-md-nowrap">
                                <thead>
                                    <tr>

                                        <th>No</th>
                                        <th>Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produk as $dt)
                                        
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $dt->Produk_id }}</td>
                                        <td>{{ $dt->Nama_produk }}</td>
                                        <td>{{ $dt->Harga }}</td>
                                        <td>{{ $dt->Stok }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('produk.destroy',$dt->id) }}" onsubmit="return confirm('Apakah Anda Yakin Ingin Hapus Data')" method="post" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            <!--/div-->
@endsection


index produk
@extends('_template_back.layout') 

@section('content') 
<div class="breadcrumb-header justify-content-between"> 
    <div> 
        <h4 class="content-title mb-2">Selamat Datang</h4> 
        <nav aria-label="breadcrumb"> 
            <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a   href="javascript:void(0);">Data Produk</a></li> 
                <li class="breadcrumb-item active" aria-current="page"> Form Data Produk</li> 
            </ol> 
        </nav> 
    </div> 
</div> 
     
<div class="col-xl-12"> 
    <div class="card"> 
        <div class="card-header pb-0"> 
            <div class="d-flex my-auto btn-list justify-content-end"> 
                <a href="{{ route('produk.create')}}" class="btn btn-sm btn-danger"><i 
                    class="fa fa-plus"></i> Tambah</a></a>
            </div> 
        </div> 
    </div> 
</div> 
        <div class="card-body mt-3"> 
            <div class="table-responsive"> 
                <table class="table table-bordered table-hover table-striped mg-b-1 text-md-nowrap mb-3"> 
                    <thead> 
                        <tr> 
                            <th style="text-align: center" width="2px">No</th> 
                            <th style="text-align: center" width="187px">Nama Produk</th> 
                            <th style="text-align: center" width="187px">Harga</th> 
                            <th style="text-align: center" width="187px">Stok</th> 
                            <th style="text-align: center" width="2px">Action</th> 
                        </tr> 
                    </thead>  
                </table> 
            </div><!-- bd --> 
        </div>
    </div>

 
@endsection


login ontroller
<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash; 
use App\Models\User; 
 
class LoginController extends Controller 
{ 
    public function login() 
    { 
        return view('auth.login'); 
    } 
    public function auth(Request $request) 
    { 
        $request->validate([ 
            'email' => 'required', 
            'password' => 'required' 
        ], [ 
            'email.required' => 'Email wajib diisi', 
            'password.required' => 'Password wajib diisi' 
        ]); 
 
        $infologin = [ 
            'email' => $request->email, 
            'password' => $request->password 
        ]; 
        if (Auth::attempt($infologin)) { 
            return redirect('produk')->with('success', 'Berhasil login'); 
        } else { 
            return redirect('/')->withErrors('Username dan password yang dimasukkan tidak sesuai'); 
        } 
    } 
    function logout() 
{ 
    Auth::logout(); 
    return redirect('/')->with('success', 'Berhasil logout'); 
} 
 
 
function register() 
{ 
    return view('auth.register'); 
} 
function create(Request $request) 
{ 
    $request->validate([ 
        'name' => 'required', 
        'email' => 'required|email|unique:users', 
        'password' => 'required|min:8' 
    ], [ 
        'nama.required' => 'Nama wajib diisi', 
        'email.required' => 'Email wajib diisi', 
        'email.email' => 'Email yang dimasukkan tidak valid', 
        'email.unique' => 'Email sudah digunakan, silakan masukkan email yang lain', 
        'password.required' => 'Password wajib diisi', 
        'password.min' => 'Minumum password 8 karakter' 
    ]); 
 
    $data = [ 
        'name' => $request->name, 
        'email' => $request->email, 
        'password' => Hash::make($request->password) 
    ]; 
    User::create($data); 
 
    $infologin = [ 
        'email' => $request->email, 
        'password' => $request->password 
    ]; 
 
    if (Auth::attempt($infologin)) { 
        return redirect('register')->with('success', 'Berhasil login'); 
    } else { 
        return redirect('/')->withErrors('Username dan password yang dimasukkan tidak sesuai'); 
    } 
} 
}