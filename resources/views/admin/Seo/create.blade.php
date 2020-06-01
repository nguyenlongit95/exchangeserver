@extends('admin.master')

@section('content')

    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Seo module</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @include('admin.layouts.alert')
                <div class="row">
                    <div class="col-md-6">
                        <form action="admin/seo/add" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Update form data element</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date mm/dd/yyyy -->
                                    <div class="form-group">
                                        <label for="">Link Seo<span style="color:red;">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-edit fa-pen-alt"></i>
                                            </div>
                                            <input type="text" name="link" class="form-control" placeholder="contentlink/sublink...">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Title seo</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-align-left"></i>
                                            </div>
                                            <input type="text" name="title" class="form-control" placeholder="The title of link seo">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Keywords</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-align-left"></i>
                                            </div>
                                            <input type="text" name="keywords" class="form-control" placeholder="Keywords this seo link">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Description<span style="color:red;">*</span></label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-compress"></i>
                                            </div>
                                            <textarea name="description" class="ckeditor form-control" id="description" cols="30" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dignissimos, facere fuga fugiat id impedit, laboriosam maiores neque quibusdam quisquam recusandae, saepe sit voluptas. Eius illum minima obcaecati tenetur voluptates!</textarea>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                    </div>

                    <div class="col-md-6">

                        <!-- phone mask -->
                        <div class="form-group">
                            <label>Heading 1 the link page</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-align-left"></i>
                                </div>
                                <input type="text" name="h1" class="form-control" placeholder="Heading the link...">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- phone mask -->
                        <div class="form-group">
                            <label>Noindex</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-align-left"></i>
                                </div>
                                No: <input type="radio" name="noindex" value="0">
                                Yes: <input type="radio" name="noindex" value="1" selected>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- phone mask -->
                        <div class="form-group">
                            <label>Avatar</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-align-left"></i>
                                </div>
                                <input type="file" name="avatar" class="form-control" value="default.jpg">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- phone mask -->
                        <div class="form-group">
                            <label>Language</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-align-left"></i>
                                </div>
                                <select name="language" class="form-control" id="language">
                                    <option value="vi">Vietnamese</option>
                                    <option value="en">English</option>
                                </select>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- IP mask -->
                        <div class="form-group">
                            <label>Submit data:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-paper-plane"></i>
                                </div>
                                <input type="submit" class="form-control" value="Submit">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <p>
                            Module SEO sẽ có các mục cơ bản để seo pages
                        </p>
                        <p>
                            - Link SEO: đường dẫn tới trang web hiện tại.
                        <p>
                            - Title SEO: tiêu đề của trang web cần được SEO.
                        </p>
                        <p>
                            - Keywords: Các từ khoá phục vụ cho việc SEO.
                        </p>
                        <p>
                            - Description: Chi tiết các từ khoá và trang web hiện tại đang cần SEO.
                        </p>
                        <p>
                            - Heading 1...: Tiêu đề phụ cho website với từ khoá chính ở phần keywords
                        </p>
                        <p>
                            - avatar: hình ảnh đại diện của trang.
                        </p>
                    </div>
                </div>
                </form>
            </div>
            <!-- /.col (right) -->
        </div>
        <!-- /.row -->
        </tbody>

        <!-- /.content -->


@endsection
