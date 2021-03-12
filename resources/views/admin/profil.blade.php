@extends('admin.app.appProfil')

@section('title') | Profil @endsection

@section('content')

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
	
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post" action="{{route('admin.profil.update',auth()->user()->id )}}" >
                    @csrf
                    @method('GET')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img style="width: 232px; height: 195px;" src="{{asset('vendors/images/'.auth()->user()->avatars)}}" alt=""/>
                                <div class="file btn btn-lg btn-primary">
                                    Changer la Photo
                                    <input type="file" name="avatar"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                        <h4>{{auth()->user()->name}}</h4>
                                        <h6>
                                            Web Developer and Designer
                                        </h6><br>
                                        <a class="btn btn-info" id="modifier" href="{{ route('admin.profil.edit', auth()->user()->id)}}" >Modifier ces infomations</a><br><br>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                    </li>
                                    @can('edit-users')
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                        </li>
                                    @endcan
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <input  type="submit" class="profile-edit-btn btn btn-danger text-light" name="btnAddMore" value="Modifier Profil"/>
                        </div>
                    </div>       
                <div class="row">
                        <div class="col-md-4">
                            <div class="profile-work">
                                <p>WORK LINK</p>
                                <a href="">Website Link</a><br/>
                                <a href="">Bootsnipp Profile</a><br/>
                                <a href="">Bootply Profile</a>
                                @can('delete-users')
                                    <p>SKILLS</p>
                                    <a href="">Web Designer</a><br/>
                                    <a href="">Web Developer</a><br/>
                                    <a href="">WordPress</a><br/>
                                    <a href="">WooCommerce</a><br/>
                                 @endcan  
                                 @can('edit-profil')
                                    <p>SKILLS</p>
                                    <a href="">Web Developer</a><br/>
                                    <a href="">Html Css3</a><br/>
                                    <a href="">Bootstrap4</a><br/>
                                 @endcan    
                            </div>
                        </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{auth()->user()->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{auth()->user()->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
	</div>
</div>

<div class="footer-wrap pd-20 mb-20 card-box">
	Orientation.Key <a href="https://github.com/dropways" target="_blank">Orientatin.key.Solution</a>
</div>
@endsection