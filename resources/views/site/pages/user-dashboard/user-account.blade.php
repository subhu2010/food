@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")


<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid">
    <div class="banner-content">
        <h1>checkout</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>
</section>


<div class="dashboard-section">
    <div class="dashboard-section-space">
        <div class="row g-0">
            <div class="col-lg-3 col-md-3">
                @include('site.pages.user-dashboard.user-dashboard-sidebar')
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="user-dash-content">
                    <h4 class="user-dashboard-title fw-700">Profile</h4>
                    <div class="user-profile bs-space mt-3">
                        <div class="form-container">
                            <form class="formbox row align-items-center" id="myform">
                                <div class="col-lg-6">
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label
                                            class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-user-alt"></i>
                                                </span>
                                                Full Name
                                            </div>
                                            <!-- <span><i class="las la-edit"></i></span> -->
                                        </label>
                                        <input disabled id="editInput" type="text" class="form-control" value="John Doe"
                                            name="">
                                    </div>
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label
                                            class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-envelope"></i>
                                                </span>
                                                Email Address
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="text" class="form-control"
                                            value="info@gmail.com" name="">
                                    </div>
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label
                                            class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-mobile"></i>
                                                </span>
                                                Mobile
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="number" class="form-control"
                                            value="9865236547" name="">
                                    </div>
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label
                                            class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-birthday-cake"></i>
                                                </span>
                                                Date OF Birth
                                            </div>
                                        </label>
                                        <div class="d-flex justify-content-between">
                                            <input disabled id="editInput" type="" class="form-control me-3"
                                                value="10/23/2048" name="">
                                            <input disabled id="editInput" type="" class="form-control"
                                                value="02/06/1992" name="">
                                        </div>
                                    </div>
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label
                                            class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="las la-user-friends"></i>
                                                </span>
                                                Gender
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="text" class="form-control" value="Male"
                                            name="">
                                    </div>
                                    <div class="formbox-textbox d-flex align-items-center mb-3">
                                        <label
                                            class="form-label col-4 d-flex justify-content-between align-items-center mb-0">
                                            <div>
                                                <span>
                                                    <i class="lar la-address-card"></i>
                                                </span>
                                                Address Book
                                            </div>
                                        </label>
                                        <input disabled id="editInput" type="text" class="form-control"
                                            value="Kathmandu Nepal" name="">
                                    </div>
                                    <div class="formbox-submit">
                                        <button id="edit" type="button" class="btn btn-one"
                                            style="background: var(--primary-color);">Edit</button>
                                        <button type="button" class="btn btn-one">Update</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 flex-center flex-column">
                                    <div class="user-avatar">
                                        <a href="#">
                                            <img src="images/avatar/dummy-profile.jpg" class="img-fluid"
                                                alt="food on ways">
                                            <span class="flex-center"><i class="las la-edit"></i></span>
                                        </a>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-one mt-4 d-block" data-bs-toggle="modal"
                                        data-bs-target="#passwordModal">
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
                                            <img src="images/payment/esewa.png" class="img-fluid" alt="food on ways">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="payment-img p-4">
                                        <a href="#">
                                            <img src="images/payment/khalti.svg" class="img-fluid" alt="food on ways">
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
<div class="modal fade" id="passwordModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="passwordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passwordModalLabel">Change Your Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Enter New Password</label>
                        <input type="password" class="form-control" name="">
                    </div>
                    <div>
                        <label class="form-label">Re-enter New Password</label>
                        <input type="password" class="form-control" name="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-one">Update</button>
            </div>
        </div>
    </div>
</div>


<script>
var el = document.getElementById('edit');
var frm = document.getElementById('myform');
el.addEventListener('click', function() {
    for (var i = 0; i < frm.length; i++) {
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