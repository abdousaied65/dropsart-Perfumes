@extends('admin.layouts.master')
<style>

</style>
@section('content')
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
                        <h5 style="min-width: 300px;" class="pull-right alert alert-sm alert-success"> اضافة توصية
                            جديدة </h5>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <form class="parsley-style-1" id="selectForm2" name="selectForm2"
                          action="{{route('admin.testimonials.store','test')}}" enctype="multipart/form-data"
                          method="post">
                        {{csrf_field()}}
                        <h5 class="col-lg-12 d-block mb-2">البيانات الاساسية</h5>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-6 pull-right">
                                <label> اسم صاحب التوصية <span class="text-danger">*</span></label>
                                <input dir="rtl" required class="form-control" name="testimonial_name" type="text">
                            </div>
                            <div class="col-lg-6 pull-left" dir="rtl">
                                <label for="">
                                    نص التوصية
                                </label>
                                <textarea required style="resize: none;font-size: 13px;" class="form-control"
                                          name="testimonial_text" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button class="btn btn-info pd-x-20" type="submit">اضافة</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
