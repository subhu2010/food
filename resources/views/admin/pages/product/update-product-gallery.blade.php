@extends("admin.layouts.layout")

@section("page_title", "Add Product")

@section("content")

<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.0/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.productList') }}">Product List</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Add Product
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    
    @include("admin.includes.errors")

    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Add Product</h3>
            </div>
            <div class="card-body order-table">
                <form class="form" method="POST" enctype="multipart/form-data" 
                    action="{{ route('admin.updateProductGalleryProcess', $product->id) }}" id="product-gallery">
                        
                    @csrf

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="form-label" for="name">Product Name</label>
                            <input type="text" class="form-control" id="name" readonly
                                value="{{ $product->name }}" placeholder="Product Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label" for="gallery">Gallery</label>
                            <input type="file" class="form-control" id="gallery" 
                            	onchange="imageSelect()" name="gallery[]" multiple>
                            @error('gallery')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-lg-12 d-flex">

							@foreach($product->gallery as $gal)
							<div class="col-md-4 img-display justify-content-center p-2 galler-{{ $gal->id }}" 
								style="max-width: 250px; max-height: auto;position: relative;">
			                    <a href="{{ asset('uploads/gallery/'.$gal->pics) }}" 
			                    	data-fancybox="group" data-caption="{{ $gal->pics }}">
			                        <img src="{{ asset('uploads/gallery/'.$gal->pics) }}" title="{{ $gal->pics }}"/>
			                    </a>
		                        <span onclick="deleteProductGallery({{ $gal->id }})" title="Delete This Image">
		                        	<i class="las la-times-circle"></i>
		                        </span>
			                </div>
							@endforeach

						</div>

                        <div class="col-lg-12 d-flex mt-5" id="container"></div>

                        <div class="col-lg-12 col-md-12 mt-5">
                            <div class="form-group">
                                <button class="btn btn-outline-success" style="width: 25%;">Submit</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
	.img-display {
		position:relative;
	}
	.img-display img {
		width: 100%;
		height: 100%;
		object-fit:contain;
	}
	.img-display span:hover {
		background: #000;
	}
	.img-display span {
		height:40px;
		width:40px;
		background:#ffca3c;
		position:absolute;
		top:10px;
		left:10px;
		visibility: hidden;
		opacity: 0;
		transition: all 0.5s ease;
		color: #fff;
		cursor: pointer;
	}
	.img-display span i {
		 font-size: 25px;
		 display: flex; 
		 justify-content:center;
		 align-items: center;
		 height: 100%;
	}
	.img-display:hover span {
		visibility: visible;
		opacity: 1;
	}
</style>

    
<script>

var images = [];
var count  = {{ count($product->gallery) }}

function imageSelect(){

	images = [];

	var image = document.getElementById('gallery').files;

    if((image.length + parseInt(count)) > 4){

        $("input#gallery").val('');

        alert("Cannot Upload More Than 4 Image . . .");

        return false;

    }

	for(i = 0; i < image.length; i++){

        images.push({
  	  	    "name" : image[i].name,
  	  	    "url" : URL.createObjectURL(image[i]),
  	  	    "file" : image[i]
  	    });

    }

    setImage();

}


function setImage(){

	let image = "";

    images.forEach((i) => {

        image+= `<div class="col-md-4 justify-content-center p-2" style="max-width: 250px; max-height: auto">
                    <a href="`+i.url+`" class="img-display" data-fancybox="group" data-caption="`+i.name+`">
                        <img src="`+i.url+`" title="`+i.name+`"/>
                    </a>
                </div>`;
    });


	$("div#container").html(image);

}


/*<span class="position-absolute" onclick="delete_image(`+ images.indexOf(i) +`)" >&times;</span>*/

// function delete_image(e){

//     images.splice(e, 1);

//     image_show();

// }


/********************************** Delete Product ****************************/
function deleteProductGallery(id){

    $this = this;

    if(confirm('Are You Sure Want To Delete ??')){

        let url = "{{ route('admin.deleteProductGallery') }}";

        $.ajax({

            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'POST',
            dataType: 'json',
            data: {id: id},

        })
        .done(function(response){

            if(response.success){

                $("div.gallery-"+id).fadeOut(1000);

                // $this.alertMessage(response.message, 'success', 'check');

            }else{

                // $this.alertMessage(response.message, 'danger', 'ban');

            }

        })
        .fail(function(){

            // $this.alertMessage(defaultMessage, 'danger', 'ban');

        });

    }

}

</script>


<script>
    $('[data-fancybox]').fancybox({
        // Options will go here
        buttons: [
            'close'
        ],
        wheel: false,
        transitionEffect: "slide",
        // thumbs          : false,
        // hash            : false,
        loop: true,
        // keyboard        : true,
        toolbar: false,
        // animationEffect : false,
        // arrows          : true,
        clickContent: false
    });
</script>


@endsection
