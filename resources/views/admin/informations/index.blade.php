@extends('admin.layouts.master')
<style>
    .bootstrap-select {
        width: 80% !important;
    }

    label {
        display: block !important;

    }
</style>
@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissable fade show">
            <button class="close" data-dismiss="alert" aria-label="Close">×</button>
            {{ session('success') }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>الاخطاء :</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="col-12">
                        <h5 style="min-width: 300px;" class="pull-right alert alert-sm alert-success">
                            تعديل بيانات التواصل
                        </h5>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <form class="parsley-style-1" id="selectForm2" name="selectForm2"
                          action="{{route('informations.post')}}" enctype="multipart/form-data"
                          method="post">
                        {{csrf_field()}}
                        <div class="row mt-2 mb-5">
                            <div class="col-lg-3 pull-right">
                                <label for="">البريد الالكترونى</label>
                                <input
                                    @if(isset($informations) && isset($informations->email_link))
                                    value="{{$informations->email_link}}"
                                    @endif
                                    type="email" dir="ltr" class="form-control" name="email_link"/>
                            </div>

                            <div class="col-lg-3 pull-right">
                                <label for="">رابط انستجرام</label>
                                <input
                                    @if(isset($informations) && isset($informations->instagram_link))
                                    value="{{$informations->instagram_link}}"
                                    @endif
                                    type="text" dir="ltr" class="form-control" name="instagram_link"/>
                            </div>

                            <div class="col-lg-3 pull-right">
                                <label for="">رقم الواتساب</label>
                                <input
                                    @if(isset($informations) && isset($informations->whatsapp_number))
                                    value="{{$informations->whatsapp_number}}"
                                    @endif
                                    type="text" dir="ltr" class="form-control" name="whatsapp_number"/>
                            </div>

                            <div class="col-lg-3 pull-right">
                                <label for="">رسالة الواتساب</label>
                                <input
                                    @if(isset($informations) && isset($informations->whatsapp_message))
                                    value="{{$informations->whatsapp_message}}"
                                    @endif
                                    type="text" dir="rtl" class="form-control" name="whatsapp_message"/>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 mt-3 text-center">
                            <button class="btn btn-info pd-x-20" type="submit"> تعديل</button>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
