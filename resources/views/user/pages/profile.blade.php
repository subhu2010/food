@extends('site.layouts.layout')

@section("page_title", "User Dashboard")


@section('content')

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid" style="height: 50vh;">
    <div class="banner-content">
        <h1>User Profile</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex align-items-center justify-content-center">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('user.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
    </div>
</section>

<div class="dashboard-section">
    <div class="dashboard-section-space">
        <div class="row g-0">
            <div class="col-lg-3 col-md-3">

                @include("user.includes.side-bar")

            </div>
            <div class="col-lg-9 col-md-9">
                <div class="user-dash-content">
                    <h4 class="user-dashboard-title fw-700">Profile</h4>
                    <div class="user-profile bs-space mt-3">
                        <div class="form-container">

                            @if($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                  {{ $message }}
                                </div>
                            @endif

                            @if($message = Session::get('error'))
                                <div class="alert alert-danger" role="alert">
                                  {{ $message }}
                                </div>
                            @endif

                            <form class="formbox row align-items-center" id="myform" action="{{ route('user.updateProfile') }}" method="POST">

                                @csrf

                                <div class="col-lg-6">
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-user-alt"></i> 
                                                </span>
                                                Full Name
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="text" name="name" class="form-control" placeholder="Full Name" 
                                            value="{{ auth()->user('web')->name }}" >
                                        @if($errors->has('name'))
                                            <span class="text-danger name" >{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-envelope"></i> 
                                                </span>
                                                Email Address
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="email" class="form-control" placeholder="Email" 
                                            name="email" value="{{ auth()->user('web')->email }}">
                                        @if($errors->has('email'))
                                            <span class="text-danger email" >{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-mobile"></i>
                                                </span>
                                                Mobile
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="number" class="form-control"  placeholder="Contact" 
                                            name="contact" value="{{ auth()->user('web')->contact_number }}">
                                        @if($errors->has('contact'))
                                            <span class="text-danger contact" >{{ $errors->first('contact') }}</span>
                                        @endif
                                    </div>
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="lar la-address-card"></i>
                                                </span>
                                                Address
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="text" class="form-control" placeholder="Address" 
                                            value="{{ auth()->user('web')->address }}" name="address">
                                        @if($errors->has('address'))
                                            <span class="text-danger address" >{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-mobile"></i>
                                                </span>
                                                Facebook
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="text" class="form-control"  placeholder="Facebook" 
                                            name="facebook" value="{{ auth()->user('web')->facebook }}">
                                        @if($errors->has('facebook'))
                                            <span class="text-danger facebook" >{{ $errors->first('facebook') }}</span>
                                        @endif
                                    </div>
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-mobile"></i>
                                                </span>
                                                Instagram
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="text" class="form-control"  placeholder="Instagram" 
                                            name="instagram" value="{{ auth()->user('web')->instagram }}">
                                        @if($errors->has('instagram'))
                                            <span class="text-danger instagram" >{{ $errors->first('instagram') }}</span>
                                        @endif
                                    </div>
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-mobile"></i>
                                                </span>
                                                Twitter
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="text" class="form-control"  placeholder="Twitter" 
                                            name="twitter" value="{{ auth()->user('web')->twitter }}">
                                        @if($errors->has('twitter'))
                                            <span class="text-danger twitter" >{{ $errors->first('twitter') }}</span>
                                        @endif
                                    </div>
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-mobile"></i>
                                                </span>
                                                Youtube
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="text" class="form-control"  placeholder="Youtube" 
                                            name="youtube" value="{{ auth()->user('web')->youtube }}">
                                        @if($errors->has('youtube'))
                                            <span class="text-danger youtube" >{{ $errors->first('youtube') }}</span>
                                        @endif
                                    </div>
                                    <!-- <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-birthday-cake"></i>
                                                </span>
                                                Date OF Birth
                                            </div>
                                        </label>
                                        <div class="d-flex justify-content-between">
                                            <input disabled id="editInput" type="" class="form-control me-3" value="10/23/2048" name="">
                                            <input disabled id="editInput" type="" class="form-control" value="02/06/1992" name="">
                                        </div>
                                    </div> -->
                                    <!-- <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-user-friends"></i> 
                                                </span>
                                                Gender
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="text" class="form-control" value="Male" name="">
                                    </div> -->
                                    <div class="formbox-submit">
                                        <button id="edit" type="button" class="btn btn-one" style="background: var(--primary-color);">Edit</button>
                                        <button type="submit" class="btn btn-one">Update</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 flex-center flex-column">
                                    <div class="user-avatar">
                                        <a href="#">
                                            <img class="img-fluid" alt="{{ auth()->user('web')->name }}" src="{{ asset('uploads/profiles/users') }}/{{ !empty(auth()->user('web')->profile)?auth()->user('web')->profile:'default-profile.jpg' }}" >
                                            <span class="flex-center"><i class="las la-edit"></i></span>
                                        </a>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-one mt-4 d-block" data-bs-toggle="modal" data-bs-target="#passwordModal">
                                      <i class="las la-key"></i> Change password
                                  </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h4 class="user-dashboard-title fw-700">My payment option</h4>
                    <div class="user-profile bs-space mt-3">
                        <div class="user-payment">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="payment-img p-4">
                                        <a href="#">
                                            <img src="{{ asset('site-assets/images/payment/esewa.png') }}" class="img-fluid" alt="food on ways">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="payment-img p-4">
                                        <a href="#">
                                            <img src="{{ asset('site-assets/images/payment/khalti.svg') }}" class="img-fluid" alt="food on ways">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="passwordModal" data-bs-backdrop="static" data-bs-keyboard="false" 
    tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordModalLabel">Change Your Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="flash-message" class="text-center"></div>
            <div class="modal-body">
                <form action="javascript:;" id="password-change-form">
                    <div class="mb-3">
                        <label class="form-label">Enter Old Password</label>
                        <input name="old_password" type="password" class="form-control" id="old_password" 
                            placeholder="Old Password" >
                        <span class="text-danger old_password" style="display: none"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter New Password</label>
                        <input name="new_password" type="password" class="form-control" id="new_password" 
                            placeholder="Password" >
                        <span class="text-danger new_password" style="display: none"></span>
                    </div>
                    <div>
                        <label class="form-label">Re-enter New Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" 
                            placeholder="Confirm Password" >
                        <span class="text-danger confirm_password" style="display: none"></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-one" id="password-change-button">Update</button>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" charset="utf-8" async defer>
    
    $(document).ready(function(){
            
        // User Change Password
        $("button#password-change-button").click(function(event){
            
            event.preventDefault();

            let data = $("form#password-change-form").serialize();
            let url  = "{{ route('user.changePassword') }}";

            let button_id = "password-change-button";
            let form_id   = "password-change-form";
            let message   = "flash-message";

            $("button#"+button_id).attr('disabled', true);
            $("button#"+button_id).html("Changing Password . . <i class='fa fa-spinner fa-pulse' style='font-size:24px'></i>");

            $.ajax({

                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'POST',
                dataType: 'json',
                data: data,

            })
            .done(function(response){

                $("div#changePass").html("");

                if(response.success){

                    $("form#"+form_id)[0].reset();

                    $("div#"+message).html("<div class='alert alert-success'>"+
                                    response.message+
                                    "&nbsp;<i class='fa fa-spinner fa-pulse' style='font-size:24px'></i>"+
                                "</div>");

                    setTimeout(function(){
                        window.location = "{{ route('user.login') }}";
                    }, 2000);

                }else{

                    if(response.errors != undefined){

                        for(var i = 0; i < response.errors.length; i ++){

                            $("span."+response.ind[i]).show();
                            $("span."+response.ind[i]).html(response.errors[i]);

                        }

                    }else{

                        $("div#changePass").html("<div class='alert alert-success'>"+
                                    response.message+
                                "</div>");

                    }

                }

                $("button#"+button_id).attr('disabled', false);
                $("button#"+button_id).html("Update");

            })
            .fail(function(){

                $("div#"+message).html("");
                $("div#"+message).html("<div class='alert alert-danger'>"+
                                    "Something Went Wrong While Changing Password ! ! !"+
                                "</div>");
                $("button#adminChangePassword").attr('disabled', false);
                $("button#adminChangePassword").html("Update");
            
            });

        });

    });



</script>



<script>
    var el  = document.getElementById('edit');
    var frm = document.getElementById('myform');
    el.addEventListener('click', function(){
        for(var i=0; i < frm.length; i++) {
            frm.elements[i].disabled = false;
            
        } 
        frm.elements[0].focus();
    });
</script>

<style>
.wrapper {
    box-shadow: 0 10px 30px rgb(0 0 0 / 7%);
    background: #fff;
}
</style>


@endsection