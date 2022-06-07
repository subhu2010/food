@section('page_title', 'News List')

@extends('admin.layouts.layout')

@section('content')

    <div class="m-content">

        @include('admin.includes.errors')

        <div id="error" class="text-center"></div>

        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            <small>List of News</small>
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <a class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" 
                        href="{{ route('admin.addNews') }}">Add News
                    </a>
                </div>
            </div>
            <div class="m-portlet__body">

                <div class="loader" id="tableLoader" style="display: none;">
                    <h3 class="text">
                        please wait . . <span class="m-loader m-loader--brand"></span>
                    </h3>
                </div>

                <div class="m-section">
                    <div class="m-section__content">
                        <div class="table-responsive m_datatable m-datatable m-datatable--default 
                            m-datatable--brand m-datatable--loaded"> 
                            <table class="table m-table m-table--head-bg-info">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Pics</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @php 
                                    $page = $data['news']->currentPage()-1;
                                    $per_page = $data['news']->perPage();
                                    $i = $page * $per_page; 
                                @endphp

                                @foreach($data['news'] as $news)
                                    <tr id="news{{ $news->id }}">
                                        <th scope="row">{{ ++$i }}</th>
                                        <td class="sorting_1">{{ $news->name }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/news/'.$news->pics) }}" 
                                                alt="{{ $news->name }}" width="155" >
                                        </td>
                                        <td>
                                            <span class="m-badge m-badge--<?= $news->status=='Banned'?'danger':'success'; ?> m-badge--wide"><?= $news->status; ?>
                                            </span>
                                        </td>
                                        <td class="center">
                                            {{ empty($news->created_at)?"Un Known":date('j M, Y', strtotime($news->created_at)) }}
                                        </td>
                                        <td data-field="Actions" class="m-datatable__cell">
                                            <span style="overflow: visible; width: 110px;">
                                                <a href="{{ route('admin.editNews', $news->id) }}" 
                                                    class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">                         
                                                    <i class="la la-edit text-success"></i>
                                                </a>
                                                <a href="javascript:;" onclick="deleteNews(<?= $news->id; ?>)" 
                                                    class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                                    <i class="la la-trash text-danger"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                                
                                </tbody>
                            </table>

                            {{ $data['news']->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" charset="utf-8" async defer>

        var defaultMessage = "Something Went Wrong, Try Again ! ! !";
        
        function deleteNews(id){

            $this = this;

            if(confirm('Are You Sure Want To Delete ??')){

                var url = "{{ route('admin.deleteNews') }}";

                $("div#tableLoader").show();

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

                        $this.alertMessage(response.message, 'success', 'check');

                        $("tr#news"+id).delay(500).fadeOut(500);

                    }else{

                        $this.alertMessage(response.message, 'danger', 'ban');

                    }

                })
                .fail(function(){

                    $this.alertMessage(defaultMessage, 'danger', 'ban');

                });

            }

        }



        function alertMessage(message, alert, type){

            $("div#alertMessage").html(
                "<div data-notify='container' class='alert alert-"+alert+" m-alert animated bounce'"+ 
                    "role='alert'"+ 
                    "style='display:inline-block; margin:0px auto; position:fixed;"+
                    "transition:all 0.5s ease-in-out 0s; z-index:10000; right: 30px; bottom: 60px;"+
                    "animation-iteration-count:1;'>"+
                    "<button type='button' class='close' data-dismiss='alert' aria-label='Close'"+
                        "style='position:absolute; right:10px; top:5px; z-index:100002;'"+
                        "id='closeAlertMessage'>"+
                    "</button>"+
                    "<span data-notify='message' id='message'>"+
                    "<i class='fa fa-"+type+"' aria-hidden='true'>&nbsp;</i>"+message+"</span>"+
                "</div>");

            $("div#tableLoader").hide();
            
            setTimeout(function(){
                $("button#closeAlertMessage").click();
            }, 5000);

        }


    </script>


@endsection