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
                            <h5 class="alert alert-md alert-success">عرض كل التوصيات</h5>
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
                                <th class="text-center">اسم صاحب التوصية</th>
                                <th class="text-center">نص التوصية</th>
                                <th class="text-center"  style="width: 10% !important;">تاريخ الاضافة - المسؤول</th>
                                <th class="text-center"  style="width: 15% !important;">تحكم</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=0;
                            @endphp
                            @foreach ($testimonials as $key => $testimonial)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{ $testimonial->testimonial_name }}</td>
                                    <td>{{ $testimonial->testimonial_text}}</td>
                                    <td  style="width: 10% !important;">{{$testimonial->created_at}} - {{$testimonial->admin->name}}</td>
                                    <td style="width: 15% !important;">
                                        <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}"
                                           class="btn btn-md btn-info" data-toggle="tooltip"
                                           title="تعديل" data-placement="top"><i class="fa fa-edit"></i></a>

                                        <a class="modal-effect btn btn-md btn-danger delete_testimonial"
                                           testimonial_id="{{ $testimonial->id }}"
                                           testimonial_name="{{ $testimonial->testimonial_name }}" data-toggle="modal"
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

                    <a href="{{route('admin.testimonials.create')}}" class="btn btn-md btn-info">
                        <i class="fa fa-plus"></i>
                        اضافة توصية جديدة
                    </a>
                </div>
            </div>

        </div>

        <div class="modal" id="modaldemo9">
            <div class="modal-dialog modal-dialog-centered" testimonial="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header text-center">
                        <h6 class="modal-title w-100" style="font-family: 'Cairo'; ">حذف توصية</h6>
                        <button aria-label="Close" class="close"
                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ route('admin.testimonials.destroy', 'test') }}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <p>هل انت متأكد من الحذف ?</p><br>
                            <input type="hidden" name="testimonialid" id="testimonialid">
                            <input class="form-control" name="testimonialname" id="testimonialname" type="text" readonly>
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
        $('.delete_testimonial').on('click', function () {
            var testimonial_id = $(this).attr('testimonial_id');
            var testimonial_name = $(this).attr('testimonial_name');
            $('.modal-body #testimonialid').val(testimonial_id);
            $('.modal-body #testimonialname').val(testimonial_name);
        });
    });
</script>
