@extends('admin.layouts.master')
<style>
    input[type='radio'] {
        margin: 10px;
        width: 20px;
        height: 20px;
    }
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
                        <h5 style="min-width: 300px;" class="pull-right alert alert-sm alert-success">
                            تحديث بيانات الدورة
                        </h5>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="parsley-style-1" id="selectForm2" name="selectForm2"
                         action="{{route('admin.courses.update',$course->id)}}" enctype="multipart/form-data"
                         method="post">
                        @csrf
                        @method('PATCH')
                        <h5 class="col-lg-12 d-block mb-2">البيانات الاساسية</h5>
                        <hr>
                        <div class="row  mb-3 mt-2">
                            <div class="col-md-4">
                                <label> اسم الدورة <span class="text-danger">*</span></label>
                                <input dir="rtl" value="{{$course->course_name}}" required class="form-control"
                                       name="course_name" type="text">
                            </div>
                            <div class="col-md-4">
                                <label> سعر الدورة <span class="text-danger">*</span></label>
                                <input required value="{{$course->course_price}}" class="form-control" dir="rtl"
                                       name="course_price" type="text">
                            </div>
                            <div class="col-md-4">
                                <label> موعد الدورة <span class="text-danger">*</span></label>
                                <input required class="form-control" value="{{$course->date}}" name="date"
                                       type="date">
                            </div>
                        </div>
                        <div class="row  mb-3 mt-2">
                            <div class="col-md-4">
                                <label for=""> صورة الدورة
                                    <span class="text-danger">*</span>
                                </label>
                                <input accept=".jpg,.png,.jpeg" type="file"
                                       oninput="pic.src=window.URL.createObjectURL(this.files[0])" id="file"
                                       name="course_pic" class="form-control">
                                <label for="" class="d-block"> معاينة الصورة </label>
                                <img id="pic" src="{{asset($course->course_pic)}}"
                                     style="width: 100px; height:100px;"/>
                            </div>
                            <div class="col-md-4">
                                <label for="">
                                    عدد المقاعد المتاحة
                                    <span class="text-danger">*</span>
                                </label>
                                <input value="{{$course->seats}}" required type="number" class="form-control"
                                       name="seats"/>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="d-block">
                                    هل اكتمل العدد ؟
                                    <span class="text-danger">*</span>
                                </label>
                                <input
                                    @if($course->completed == "yes")
                                    checked
                                    @endif
                                    required type="radio" name="completed" value="yes"/> نعم
                                <input
                                    @if($course->completed == "no")
                                    checked
                                    @endif
                                    required type="radio" name="completed" value="no"/> لا

                            </div>
                        </div>
                        <div class="row mb-3 mt-2">

                            <div class="col-lg-12" dir="rtl">
                                <label for="">
                                    وصف الدورة
                                </label>
                                <textarea required style="resize: none;font-size: 13px;" class="form-control"
                                          name="course_description"
                                          id="" cols="30" rows="20">{{$course->course_description}}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button class="btn btn-info pd-x-20" type="submit">تحديث</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
