
@extends('layouts.coba')

@section('content')


        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Package</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <button class="btn btn-primary" style="margin-bottom: 5px;" data-toggle="modal" data-target="#PromoModal">+ Add Package</button>
                    <!-- start project list -->
                    <table id="table_id" class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th style="width: 20%">Package</th>
                          <th style="width: 10%">Category</th>
                          <th style="width: 20%">Location</th>
                          <th style="width: 10%">Booking Price</th>
                          <th style="width: 10%">Total Price</th>
                          <th style="width: 10%">Photo</th>              
                          <th style="width: 15%">#Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($promos as $i => $promo)
                        <tr>
                          <td>{{  $i + 1  }}</td>
                          <td>{{  $promo->promo  }}</td>
                          <td>{{  $promo->kategori->kategori }}</td>
                          <td>{{  $promo->lokasi }}</td>
                          <td>{{  $promo->harga_book }}</td>
                          <td>{{  $promo->Harga }}</td>
                          <td><a href="Detgambar/{{$promo->id}}">View</a></td>
                          </td>
							          <td>
                          <button class="btn btn-info" data-toggle="modal"
                            data-fid="{{$promo->id}}"
                            data-fpromo="{{$promo->promo}}"
                            data-fkategori="{{$promo->kategori->kategori}}"
                            data-flokasi="{{$promo->lokasi}}"
                            data-fharga_book="{{$promo->harga_book}}"
                            data-fdeskripsi="{{$promo->deskripsi}}"
                            data-fharga="{{$promo->Harga}}"
                            data-target="#editModal"> 
                          Edit
                        </button>
                        <button onclick="deletePromo({{ $promo->id }})" data-id="{{$promo->id}}" class="btn btn-danger" data-toggle="modal" data-target="#deletePromo"> 
                              Delete
                    </button>
							  	    </td>
                    </tr>
                      @endforeach
                      </tbody>
                    </table>
                   
                    
                    

                  </div>
                </div>
              </div>
            </div>
          </div>
       

</div>
<div class="modal fade" id="PromoModal" tabindex="-1" role="dialog" aria-labelledby="PromoModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="PromoLabel">Promo</h4>
	      </div>
	      <form action="{{ route('Promo.store'),'test'}}" method="post" enctype="multipart/form-data" files="true">
	      	{{csrf_field()}}
          {{ method_field('post') }}
	      	<div class="modal-body">
	        	@include('admin.form_promo')
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	<button type="submit" class="btn btn-primary">Save</button>
	      	</div>
	      </form>
	    </div>
	  </div>
	</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="PromoModal">Edit Package</h4>
	      </div>
	      <form action="" method="post" id="form-edit-modal">
	      	{{method_field('patch')}}
	      	{{csrf_field()}}
	      	<div class="modal-body">
	      		<input type="hidden" name="id_promo" id="id_promo" value="">
	        	@include('admin.form_promo2')
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	<button type="submit" class="btn btn-primary">Save Changes</button>
	      	</div>
	      </form>
	    </div>
	  </div>
	</div>

  <div class="modal modal-danger fade" id="deletePromo" tabindex="-1" role="dialog" aria-labelledby="deletePromo">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="text-center modal-title" id="decline">Decline Confirmation</h4>
        </div>

          <div class="modal-body">
            <p class="text-center">Are You sure want to delete package ?</p>
            <input type="hidden" name="id" id="id-member-delete" value="">
          </div>
          <form id="formDeletepromo" action="#" method="POST">
          {{csrf_field()}}
          {{method_field('DELETE')}}
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger">Yes</button>
          </form>
              <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
            </div>
          
      </div>
    </div>
  </div>

<script type="text/javascript">
  function deletePromo(id){
    $("#formDeletepromo").attr('action', '/Promo/'+id);
    $('#deletePromo').modal('show');
  }
</script>

@endsection
        
      
   