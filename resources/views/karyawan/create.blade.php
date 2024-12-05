@extends('layout/app')  
@section('content')
<form action="{{route('karyawan.store')}}" method="post" enctype="multipart/form-data">  
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6>Formulir Tambah Karyawan</h6>
                </div> 

                <div class="card-body">
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="number" class="form-control" name="nip">
                    </div>

                
                 
                
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input type="text" class="form-control" name="nama_karyawan">
                    

                </div>

                
                    <div class="form-group">
                        <label>Gaji Karyawan</label>
                        <input type="number" class="form-control" name="gaji_karyawan">
                    </div>

                

               
                    <div class="form-group">
                        <label>Alamat</label>
                       <textarea class="form-control" name="alamat"></textarea>
                    </div>

               

               
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                       <select name="jenis_kelamin" class="custom-select">
                        <option value="" selected disabled hidden>--Pilih Jenis Kelamin--</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                        
                       </select>
                    </div>

                    <div class="form-group">
                        <label for="foto" >Upload Foto Karyawan</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>          
            </div>
        </div>

    </div>
</form>

@endsection