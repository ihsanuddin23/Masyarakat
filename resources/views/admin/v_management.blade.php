@extends('dashboard')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="py-2">
				<h4>Mangement Users</h4>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								 <h3>Petugas</h3>
								 <div class="row">
								 	<div class="col-lg-12">
								 		<div class="float-right">
											<div class="">
												<a href="{{ route('management-users.create') }}" class="btn btn-primary float-right mb-2">Tambah Petugas</a>
											</div>
								 		</div>
								 	</div>
								 </div>
							</div>
							<div class="card-body">
								<table class="table table-stripped">
	                                <thead>
	                                    <tr>
	                                        <td>No</td>
	                                        <td>Id Petugas</td>
	                                        <td>Nama </td>
	                                        <td>Email</td>
	                                        <td>action</td>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    @forelse ($users as $ptg)
	                                        <tr>
	                                            <th>{{$loop->iteration }}</th>
	                                            <td>{{$ptg->id}}</td>
	                                            <td>{{$ptg->name}}</td>
	                                            <td>{{$ptg->email}}</td>
	                                            <td>
	                                                
	                                                <form action="{{ url('management-users/'.$ptg->id.'?petugas-edit='.$ptg->id) }}" method="POST">
	                                                    @method('DELETE')
	                                                    @csrf
	                                                    <a href="{{ url('management-users/'.$ptg->id.'/edit?petugas-edit='.$ptg->id) }}" class="btn btn-primary btn-default">Edit</a>
	                                                    <button type="submit" class="btn btn-danger btn-default" onclick="return confirm('apakah anda ingin menghapus {{$ptg->email}} ?')">Delete</button>
	                                                </form>
	                                            </td>
	                                        </tr>
	                                        @empty
	                                            <td colspan="7" class="text-center">TIDAK ADA DATA...</td>
	                                        @endforelse
	                                </tbody>
	                            </table>
							</div>
						</div>
					</div>
				</div>
{{-- 				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								 <h3>Petugas</h3>
								 <div class="row">
								 	<div class="col-lg-12">
								 		<div class="float-right">
								 			<!-- Button trigger modal -->
											<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalMasyarakat">Launch Tambah</button>
								 		</div>
								 	</div>
								 </div>
							</div>
							<div class="card-body">
								<table class="table table-stripped">
	                                <thead>
	                                    <tr>
	                                        <td>No</td>
	                                        <td>Id Petugas</td>
	                                        <td>Nama </td>
	                                        <td>Email</td>
	                                        <td>Password</td>
	                                        <td>Telp</td>
	                                        <td>Alamat</td>
	                                        <td>action</td>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    @forelse ($officers as $ptg)
	                                        <tr>
	                                            <th>{{$loop->iteration }}</th>
	                                            <td>{{$ptg->id}}</td>
	                                            <td>{{$ptg->nama_petugas}}</td>
	                                            <td>{{$ptg->email}}</td>
	                                            <td>{{$ptg->password}}</td>
	                                            <td>{{$ptg->telp}}</td>
	                                            <td>{{$ptg->alamat}}</td>
	                                            <td>
	                                                
	                                                <form action="{{ url('management-users/'.$ptg->id.'?petugas-edit='.$ptg->id) }}" method="POST">
	                                                    @method('DELETE')
	                                                    @csrf
	                                                    <a href="{{ url('management-users/'.$ptg->id.'/edit?petugas-edit='.$ptg->id) }}" class="btn btn-primary btn-default">Edit</a>
	                                                    <button type="submit" class="btn btn-danger btn-default" onclick="return confirm('apakah anda ingin menghapus {{$ptg->nama}} ?')">Delete</button>
	                                                </form>
	                                            </td>
	                                        </tr>
	                                        @empty
	                                            <td colspan="7" class="text-center">TIDAK ADA DATA...</td>
	                                        @endforelse
	                                </tbody>
	                            </table>
							</div>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
</div>

<!-- Modal Petugas -->
<div class="modal fade" id="modalPetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Petugas Add</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            	<form>
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<label>Email</label>		
	            			<input type="email" name="email" class="form-control" placeholder="Masukan Email anda ...">		
	            		</div>
	            	</div>
            	</form>
            </div>
            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
        </div>
    </div>
</div>

<!-- Modal Masyarkat -->
<div class="modal fade" id="modalMasyarakat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masayarkat Add</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            	<form>
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<label>Email</label>		
	            			<input type="email" name="email" class="form-control" placeholder="Masukan Email anda ...">		
	            		</div>
	            	</div>
            	</form>
            </div>
            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
        </div>
    </div>
</div>
@endsection
