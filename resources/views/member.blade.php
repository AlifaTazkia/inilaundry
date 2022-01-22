@extends('template.index')
 @section('member')
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1>Blank Page</h1> --}}
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title" style="font-family: Freestyle Script; font-size:60px;">Neptune's Laundry</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">

        <div style="margin-top:20px;">
            @if (session('success'))
                <div class="alert alert-success" role="alert" id="success-alert">
                  {{ session('success') }}
                  
            
                  <span aria-hidden="true">&times;</span>
                </div>
            @endif
            
            @if ($errors->any())
            <div class="alert alert-danger" role="alert" >
              {{ session('success') }}
              
            
              <span aria-hidden="true">&times;</span>
              </button>
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            
            </div>
  
       <div>
       <button class="btn btn-warning" style="float: left" data-bs-toggle="modal" data-bs-target="#modalTambahMember"> 
           <i class="nc-icon nc-simple-add "></i>&nbsp; Tambah Member
       </button>
       
       <!-- Modal -->
       <div class="modal fade" id="modalTambahMember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Data Produk</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
       
             
             <div class="modal-body">
               <form  action="member" method="POST" >
               @csrf
               <div class="mb-5">
                 <label for="nama" class="form-label fw-normal">Nama </label>
                 <input type="text" class="form-control"  name="nama">
               </div>
               <div class="mb-5">
                <label for="alamat" class="form-label fw-normal">Alamat </label>
                <input type="text" class="form-control"  name="alamat">
              </div>
              <div class="mb-5">
                <label for="jenis_kelamin" class="form-label fw-normal">Jenis Kelamin </label>
                <select   class="form-control" name="jenis_kelamin" id="jenis_kelamin" required >
                    <option>Pilih pelanggan</option>
                    {{-- @foreach ($member as $members)
                        <option value="{{ $members->jenis_kelamin }}" required>{{ $members->jenis_kelamin }}</option>
                    @endforeach --}}
                    <option value="L">L</option>
                    <option value="P">P</option>
                  </select>
              </div>
              <div class="mb-5">
                <label for="tlp" class="form-label fw-normal">Telepon </label>
                <input type="text" class="form-control"  name="tlp">
              </div>
   
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-dark">Tambah</button>
               </div>
               
               </form>
            </div>
           </div>
         </div>
       </div>

       <table class="table text-center " style="width: 86%;">
        <thead style="border-bottom: 1px solid rgb(65, 64, 64);">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Alamat</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Telepon</th>
            </tr>
          </thead>
          <tbody>   
              @foreach ($member as $members)
                  
                          
            <tr>
              <th >{{ $i = (isset($i)?++$i:$i=1)}}</th>
              <td>{{ $members->nama }}</td>
              <td>{{ $members->alamat }}</td>
              <td>{{ $members->jenis_kelamin}}</td>
              <td>{{ $members->tlp }}</td>
              <td>
            </tr>
            @endforeach
          </tbody>

          
       </table>

      </div>
      <!-- /.card-body -->
      <div class="card-footer">
       <a href="#">inilaundry</a>  CopyRights@2021
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
 @endsection