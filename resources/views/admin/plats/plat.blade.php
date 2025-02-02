@extends('layouts.masteradmin', ['title'=>'Plat'])

@section('content')

  <!-- BEGIN CONTENT BODY -->
                <div class="page-content-wrapper">
                    <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title">

                                        <h4 class="float-left">Product List</h4>


                                        <ol class="breadcrumb float-left float-md-right">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                                            <li class="breadcrumb-item">Product List</li>
                                        </ol>


                                </div>
                            </div>
                        </div><!-- end .page title-->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card p-xl-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <label class="form-control-label" for="input-name">Designation</label>
                                                <input type="text" name="filter_name" value="" placeholder="Product Name" id="input-name" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                                            </div>
                                            <div class="form-group row">
                                                <label class="form-control-label" for="input-model">Description</label>
                                                <input type="text" name="filter_model" value="" placeholder="Model" id="input-model" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <label class="form-control-label" for="input-price">Prix</label>
                                                <input type="text" name="filter_price" value="" placeholder="Price" id="input-price" class="form-control">
                                            </div>
                                            <div class="form-group row">
                                                <label class="form-control-label" for="input-quantity">Quantité</label>
                                                <input type="text" name="filter_quantity" value="" placeholder="Quantity" id="input-quantity" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <label class="form-control-label" for="input-price">Photo</label>
                                                <input type="text" name="filter_price" value="" placeholder="Price" id="input-price" class="form-control">
                                            </div>
                                            <div class="form-group row">
                                                <label class="form-control-label" for="input-status">Catégorie</label>
                                                <select name="filter_status" id="input-status" class="form-control">
                                                    <option value="*">Choose</option>
                                                    <option value="1">Enabled</option>
                                                    <option value="0">Disabled</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group row">
                                                <label class="form-control-label" for="input-status">Restaurant</label>
                                                <select name="filter_status" id="input-status" class="form-control">
                                                    <option value="*">Choose</option>
                                                    <option value="1">Enabled</option>
                                                    <option value="0">Disabled</option>
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <button type="button" id="button-filter" class="btn btn-primary float-right"><i class="fa fa-"></i> Valider</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <form  method="post" enctype="multipart/form-data" id="form-product" class="">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <td  class="text-center"><input type="checkbox" onClick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
                                                    <td class="text-center">Image</td>
                                                    <td class="text-left">                    <a href="#" class="asc">Desigantion</a>
                                                    </td>
                                                    <td class="text-left">                    <a href="#">Description</a>
                                                    </td>
                                                    <td class="text-left">                    <a href="#">Prix</a>
                                                    </td>
                                                    <td class="text-right">                    <a href="#">Quantité</a>
                                                    </td>
                                                    <td class="text-left">                    <a href="#">Status</a>
                                                    </td>
                                                    <td class="text-right">Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="42">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/apple_cinema_30-40x40.jpg" alt="Apple Cinema 30&quot;" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">Apple Cinema 30"</td>
                                                    <td class="text-left">Product 15</td>
                                                    <td class="text-left">                    <span class=" line-through">100.0000</span><br>
                                                        <div class="text-danger">90.0000</div>
                                                    </td>
                                                    <td class="text-right">                    <span class="label label-success">988</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="30">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/canon_eos_5d_1-40x40.jpg" alt="Canon EOS 5D" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">Canon EOS 5D</td>
                                                    <td class="text-left">Product 3</td>
                                                    <td class="text-left">                    <span class=" line-through">100.0000</span><br>
                                                        <div class="text-danger">80.0000</div>
                                                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="47">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/hp_1-40x40.jpg" alt="HP LP3065" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">HP LP3065</td>
                                                    <td class="text-left">Product 21</td>
                                                    <td class="text-left">                    100.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-success">1000</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="28">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/htc_touch_hd_1-40x40.jpg" alt="HTC Touch HD" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">HTC Touch HD</td>
                                                    <td class="text-left">Product 1</td>
                                                    <td class="text-left">                    100.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="41">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/imac_1-40x40.jpg" alt="iMac" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">iMac</td>
                                                    <td class="text-left">Product 14</td>
                                                    <td class="text-left">                    100.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="40">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/iphone_1-40x40.jpg" alt="iPhone" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">iPhone</td>
                                                    <td class="text-left">product 11</td>
                                                    <td class="text-left">                    101.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="48">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/ipod_classic_1-40x40.jpg" alt="iPod Classic" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">iPod Classic</td>
                                                    <td class="text-left">product 20</td>
                                                    <td class="text-left">                    100.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="36">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/ipod_nano_1-40x40.jpg" alt="iPod Nano" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">iPod Nano</td>
                                                    <td class="text-left">Product 9</td>
                                                    <td class="text-left">                    100.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="34">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/ipod_shuffle_1-40x40.jpg" alt="iPod Shuffle" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">iPod Shuffle</td>
                                                    <td class="text-left">Product 7</td>
                                                    <td class="text-left">                    100.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="32">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/ipod_touch_1-40x40.jpg" alt="iPod Touch" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">iPod Touch</td>
                                                    <td class="text-left">Product 5</td>
                                                    <td class="text-left">                    100.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="43">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/macbook_1-40x40.jpg" alt="MacBook" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">MacBook</td>
                                                    <td class="text-left">Product 16</td>
                                                    <td class="text-left">                    500.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="44">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/macbook_air_1-40x40.jpg" alt="MacBook Air" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">MacBook Air</td>
                                                    <td class="text-left">Product 17</td>
                                                    <td class="text-left">                    1000.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>

                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="31">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/nikon_d300_1-40x40.jpg" alt="Nikon D300" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">Nikon D300</td>
                                                    <td class="text-left">Product 4</td>
                                                    <td class="text-left">                    80.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="29">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/palm_treo_pro_1-40x40.jpg" alt="Palm Treo Pro" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">Palm Treo Pro</td>
                                                    <td class="text-left">Product 2</td>
                                                    <td class="text-left">                    279.9900                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="35">
                                                    </td>
                                                    <td class="text-center">                    <img src="../../../demo.opencart.com/image/cache/no_image-40x40.png" alt="Product 8" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">Product 8</td>
                                                    <td class="text-left">Product 8</td>
                                                    <td class="text-left">                    100.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-success">968</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="49">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/samsung_tab_1-40x40.jpg" alt="Samsung Galaxy Tab 10.1" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">Samsung Galaxy Tab 10.1</td>
                                                    <td class="text-left">SAM1</td>
                                                    <td class="text-left">                    199.9900                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="33">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/samsung_syncmaster_941bw-40x40.jpg" alt="Samsung SyncMaster 941BW" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">Samsung SyncMaster 941BW</td>
                                                    <td class="text-left">Product 6</td>
                                                    <td class="text-left">                    200.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="46">
                                                    </td>
                                                    <td class="text-center">                    <img src="assets/images/ecommerce/sony_vaio_1-40x40.jpg" alt="Sony VAIO" class="img-thumbnail">
                                                    </td>
                                                    <td class="text-left">Sony VAIO</td>
                                                    <td class="text-left">Product 19</td>
                                                    <td class="text-left">                    1000.0000                    </td>
                                                    <td class="text-right">                    <span class="label label-warning">0</span>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    <td class="text-right"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 text-left"></div>
                            <div class="col-sm-6 text-right">Showing 1 to 19 of 19 (1 Pages)</div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="footer">
                        <div class="float-right">
                            10GB of <strong>250GB</strong> Free.
                        </div>
                        <div>
                            <strong>Copyright</strong> Example Company © 2017
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->

@endsection
