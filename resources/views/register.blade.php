@extends('welcome')
@section('main')
<div class="jumbotron wt-about-main text-center" >
    <div class="container">
        <h1 class="display-4">Registration</h1>
    </div>
</div>
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
{{ session()->get('success') }}
</div>
@endif
@if(session()->has('danger'))
<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
{{ session()->get('danger') }}
</div>
@endif
@if(count($errors) > 0)
<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h4><i class="icon fa fa-ban"></i> Alert!</h4>
@foreach($errors->all() as $error)
{{ $error }}<br>
@endforeach
</div>
@endif
<section class="contact_form pt-pb" id="contact_form">
    <div class="container">
        <div class="wt-contact-bg">
            <div class="row">
                <div class="col-lg-12 wt_main_contact_form">
                    <h3>Register Form</h3>
                    <div role="form" class="wpcf7" id="wpcf7-f1213-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="{{ route('store') }}" method="post" class="wpcf7-form" enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            <div class="form-group">
                                <label for="wt-inputfullname">First Name</label><br />
                                <span class="wpcf7-form-control-wrap text-name">
                                    <input type="text" name="fname" required value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false"  />
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="wt-inputfullname">Last Name</label><br />
                                <span class="wpcf7-form-control-wrap text-name">
                                    <input type="text" name="lname" required value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false"  />
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="wt-inputfullname">Age</label><br />
                                <span class="wpcf7-form-control-wrap text-name">
                                    <input type="text" name="age" required value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false"  />
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="wt-inputfullname">Email</label><br />
                                <span class="wpcf7-form-control-wrap text-name">
                                    <input type="email" name="email" required value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"/>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="wt-inputfullname">Contact No</label><br />
                                <span class="wpcf7-form-control-wrap text-name">
                                    <input type="email" name="phone" required value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"/>
                                </span>
                            </div>
                            <div class="row">
                                <div class="form-check text-right">
                                    <label for="file-180" class="custom-file-upload">
                                        <img src="https://www.weisetech.com/wp-content/themes/mycostomtheme/images/attachment.svg" alt="">Profile<br />
                                    </label><br />
                                    <span class="wpcf7-form-control-wrap file-180">
                                        <input type="file" name="profile" size="40" class="wpcf7-form-control" id="file-180"  aria-invalid="false" />
                                    </span>
                                </div>
                            <div class="col-lg-6 col-md-6 col-sm-7 col-7">
                                <div class="form-check text-right">
                                    <label for="file-190" class="custom-file-upload">
                                        <img src="https://www.weisetech.com/wp-content/themes/mycostomtheme/images/attachment.svg" alt=""> Resume File<br /> <br><span style="color: red;">Note : file type pdf,docx</span>
                                    </label><br />
                                    <span class="wpcf7-form-control-wrap file-180">
                                        <input type="file" name="resume" size="40" class="wpcf7-form-control" id="file-190" aria-invalid="false" />
                                    </span>
                                </div>
                            </div>
                            </div>
                            <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn-primary main-btn wt-custom-btn pad-lr-40 wt-submit-button" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop