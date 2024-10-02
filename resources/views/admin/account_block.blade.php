@extends('admin.layouts')
@section('account_details')
<div class="col-md-10 content">
    <!-- <div class="panel panel-default"> -->
    <div class="panel-heading">
        Dashboard
    </div>
    <div class="col-md-10"></div>
    <div class="tabs">
        <div class="tab-button-outer">
            <ul id="tab-button">
                <li><a href="#tab01"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li><a href="#tab02"><i class="glyphicon glyphicon-cloud-upload"></i> Deposit</a></li>
                <li><a href="#tab03"><i class="glyphicon glyphicon-cloud-download"></i> Withdrow</a></li>
                <li><a href="#tab04"><i class="glyphicon glyphicon-transfer"></i> Transfer</a></li>
                <li><a href="#tab05"><i class="glyphicon glyphicon-list-alt"></i> Statement</a></li>
            </ul>
        </div>
        <div class="tab-select-outer">
            <select id="tab-select">
                <option value="#tab01">Tab 1</option>
                <option value="#tab02">Tab 2</option>
                <option value="#tab03">Tab 3</option>
                <option value="#tab04">Tab 4</option>
                <option value="#tab05">Tab 5</option>
            </select>
        </div>

        <div id="tab01" class="tab-contents col-md-12 ">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        Welcome User
                    </div>
                    <div class="panel-body">
                        <div class="form-group col-md-8 col-md-offset-2">
                            <label for="usr">Name:</label>
                            <input type="text" name="name" class="form-control" id="usr">
                        </div>
                        <div class="form-group col-md-8 col-md-offset-2">
                            <label for="usr">Name:</label>
                            <input type="text" name="name" class="form-control" id="usr">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab02" class="tab-contents  col-md-12 ">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        Deposit Money
                    </div>
                    <div class="panel-body">
                        <form ref="productForm">
                            <div class="form-group col-md-8 col-md-offset-2">
                                <label for="usr">Amount:</label>
                                <input type="text" name="name" placeholder="enter amount to withdrow"
                                    class="form-control" id="usr">
                            </div>

                            <div class="form-group col-md-8 col-md-offset-2">
                                <button class="btn btn-primary" type="submit"> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab03" class="tab-contents  col-md-12">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        Withdrow Money
                    </div>
                    <div class="panel-body">
                        <form ref="productForm">
                            <div class="form-group col-md-8 col-md-offset-2">
                                <label for="usr">Amount:</label>
                                <input type="text" name="name" placeholder="enter amount to withdrow"
                                    class="form-control" id="usr">
                            </div>

                            <div class="form-group col-md-8 col-md-offset-2">
                                <button class="btn btn-primary" type="submit"> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab04" class="tab-contents  col-md-12">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        Transfer Money
                    </div>
                    <div class="panel-body">
                        <form ref="productForm">
                            <div class="form-group col-md-8 col-md-offset-2">
                                <label for="usr">Account Holder:</label>
                                <input type="text" name="name" placeholder="enter amount to withdrow"
                                    class="form-control" id="usr">
                            </div>
                            <div class="form-group col-md-8 col-md-offset-2">
                                <label for="usr">Amount:</label>
                                <input type="text" name="name" placeholder="enter amount to withdrow"
                                    class="form-control" id="usr">
                            </div>
                            <div class="form-group col-md-8 col-md-offset-2">
                                <button class="btn btn-primary" type="submit"> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab05" class="tab-contents  col-md-12">
            <div class="panell">
                <div class="panell-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1</td>
                                <td>2 </td>
                                <td>3</td>
                                <td>4</td>
                                <td>
                                    5
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop