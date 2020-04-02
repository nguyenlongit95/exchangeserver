@extends('admin.master')

@section('content')
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Order</h3>

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
                        <form action="admin/Order/updateOrder/{{ $Order->id }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Update form data element</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date mm/dd/yyyy -->
                                    <div class="form-group">
                                        <label for="">Clients own <span style="color:red;">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-edit fa-pen-alt"></i>
                                            </div>
                                            <select name="idUser" class="form-control" id="">
                                                @foreach($User as $user)
                                                <option <?php if($user->id == $Order->idUser){echo "SELECTED";}else{} ?> value="{{ $user->id }}"> {{ $user->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Your Name <span style="color:red;">*</span></label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-align-left"></i>
                                            </div>
                                            <input type="text" name="name" class="form-control" value="{{ $Order->name }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->


                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Address ship area <span style="color:red;">*</span></label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-align-left"></i>
                                            </div>
                                            <textarea name="address" class="form-control ckeditor" id="" cols="30" rows="10">{{ $Order->address }}</textarea>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->



                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Phone <span style="color:red;">*</span></label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-align-left"></i>
                                            </div>
                                            <input type="text" name="phone" class="form-control" value="{{ $Order->phone }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->



                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Total price <span style="color:red;">*</span></label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-align-left"></i>
                                            </div>
                                            <input type="text" name="total" class="form-control" value="{{ $Order->total }}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->



                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Check Code Order <span style="color:red;">*</span></label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-align-left"></i>
                                            </div>
                                            <input type="text" name="code_order" class="form-control" value="{{ $Order->code_order }}">
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

                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </form>
                    </div>

                    <div class="col-md-6">
                        <div class="box-header">
                            <h3 class="box-title">Update item in orders</h3>
                        </div>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Product</th>
                                <th>Name PRoduct</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Code order</th>
                                <th class="text-center">Update</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($OrderDetails as $orderDetail)
                                <form action="admin/Order/updateOrderDetails/{{$orderDetail->id}}">
                                <tr>
                                    <td>{{ $orderDetail->id }}</td>
                                    <td>
                                        {{ $orderDetail->idProduct }}
                                    </td>
                                    <td>
                                        {{ $orderDetail->product_name }}
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" onclick="changeQTY({{ $orderDetail->id }})" name="Quantity" id="qty" value="{{ $orderDetail->quantity }}">
                                    </td>
                                    <td>
                                        {{ $orderDetail->price }} $
                                    </td>
                                    <td>
                                        {{ $orderDetail->code_order }}
                                    </td>
                                    <td class="text-center"><a href="admin/Order/updateOrderDetails/{{$orderDetail->id}}" class="btn-warning padding510510">Update</a></td>
                                    <td class="text-center"><a href="admin/Order/deleteOrderDetails/{{$orderDetail->id}}" class="btn-danger padding510510">Delete</a></td>
                                </tr>
                                </form>
                            @endforeach
                            </tfoot>
                        </table>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore quibusdam odit culpa aspernatur ex voluptas soluta doloremque exercitationem deserunt dicta vel nemo, et enim fugit expedita ullam laudantium minus quam.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eveniet maxime neque accusantium perferendis repudiandae magni sint amet tempora repellendus recusandae eligendi temporibus cupiditate atque, porro consectetur voluptas cum incidunt.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ipsa repellat accusamus nemo fuga, neque asperiores consectetur tempora necessitatibus minima rem aspernatur. Beatae eius aliquam maxime distinctio id reprehenderit repudiandae.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nemo ea maiores saepe quo minima, culpa sint incidunt perspiciatis omnis dolore accusamus adipisci quam architecto pariatur natus! Necessitatibus, quibusdam exercitationem!
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta adipisci provident suscipit veritatis distinctio, aliquam qui, quod minima eveniet voluptates vero esse. Nam, officiis! Unde ipsum architecto culpa corrupti vitae!
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.col (right) -->
        </div>
        <!-- /.row -->
        <!-- /.content -->
        </div>
    </section>
@endsection
