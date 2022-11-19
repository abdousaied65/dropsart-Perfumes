@extends('admin.layouts.master')
<style>

</style>
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissable fade show">
            <button class="close" data-dismiss="alert" aria-label="Close">×</button>
            {{ session('success') }}
        </div>
    @endif
    <!-- row -->
    <div class="row row-md">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <div class="col-lg-12 margin-tb">
                            <h5 class="alert alert-md alert-success">عرض كل الدورات</h5>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-condensed table-striped table-bordered text-center table-hover"
                               id="example-table">
                            <thead>
                            <tr>
                                <th class="text-center"> #</th>
                                <th class="text-center">اسم الدورة</th>
                                <th class="text-center">سعر الدورة</th>
                                <th class="text-center" style="width: 10% !important;">موعد الدورة</th>
                                <th class="text-center" style="width: 10% !important;"> عدد المقاعد</th>
                                <th class="text-center" style="width: 10% !important;"> هل اكتمل العدد ؟</th>
                                <th class="text-center">وصف الدورة</th>
                                <th class="text-center">صورة الدورة</th>
                                <th class="text-center" style="width: 10% !important;">تاريخ الاضافة - المسؤول</th>
                                <th class="text-center" style="width: 15% !important;">تحكم</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=0;
                            @endphp
                            @foreach ($courses as $key => $course)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{ $course->course_name }}</td>
                                    <td>{{ $course->course_price}}</td>
                                    <td>{{ $course->date}}</td>
                                    <td>{{ $course->seats}}</td>
                                    <td>
                                        @if($course->completed == "yes")
                                            نعم
                                        @elseif($course->completed == "no")
                                            لا
                                        @endif
                                    </td>
                                    <td>{{mb_substr($course->course_description,0,150)}} ......</td>
                                    <td><img data-toggle="modal" href="#modaldemo8" src="{{asset($course->course_pic)}}"
                                             style="width:50px; height: 50px;cursor:pointer;"
                                             alt=""></td>
                                    <td style="width: 10% !important;">{{$course->created_at}}
                                        - {{$course->admin->name}}</td>
                                    <td style="width: 15% !important;">
                                        <a href="{{ route('admin.courses.edit', $course->id) }}"
                                           class="btn btn-md btn-info" data-toggle="tooltip"
                                           title="تعديل" data-placement="top"><i class="fa fa-edit"></i></a>

                                        <a class="modal-effect btn btn-md btn-danger delete_course"
                                           course_id="{{ $course->id }}"
                                           course_name="{{ $course->course_name }}" data-toggle="modal"
                                           href="#modaldemo9"
                                           title="delete"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>

                    <a href="{{route('admin.courses.create')}}" class="btn btn-md btn-info">
                        <i class="fa fa-plus"></i>
                        اضافة دورة جديدة
                    </a>
                </div>
            </div>

        </div>
        <!-- Modal effects -->
        <div class="modal" id="modaldemo8">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header text-center">
                        <h6 class="modal-title w-100"
                            style="font-family: 'Cairo'; ">عرض صورة بحجم اكبر</h6>
                        <button aria-label="Close" class="close"
                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <img id="image_larger" alt="image" style="width: 100%; "/>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-sm btn-danger"><i class="fa fa-colse"></i> اغلاق
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="modaldemo9">
            <div class="modal-dialog modal-dialog-centered" course="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header text-center">
                        <h6 class="modal-title w-100" style="font-family: 'Cairo'; ">حذف دورة</h6>
                        <button aria-label="Close" class="close"
                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ route('admin.courses.destroy', 'test') }}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <p>هل انت متأكد من الحذف ?</p><br>
                            <input type="hidden" name="courseid" id="courseid">
                            <input class="form-control" name="coursename" id="coursename" type="text" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-danger">حذف</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.delete_course').on('click', function () {
            var course_id = $(this).attr('course_id');
            var course_name = $(this).attr('course_name');
            $('.modal-body #courseid').val(course_id);
            $('.modal-body #coursename').val(course_name);
        });
        $('img').on('click', function () {
            var image_larger = $('#image_larger');
            var path = $(this).attr('src');
            $(image_larger).prop('src', path);
        });
    });
</script>
