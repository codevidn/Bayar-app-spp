@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-3">
            <div class="card profile-card">
                <div class="profile-header">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                        <img src="../../images/user-lg.jpg" alt="AdminBSB - Profile Image" />
                    </div>
                    <div class="content-area">
                        <h3>Marc K. Hammond</h3>
                        <p>Web Software Developer</p>
                        <p>Administrator</p>
                    </div>
                </div>
                <div class="profile-footer">
                    <ul>
                        <li>
                            <span>Followers</span>
                            <span>1.234</span>
                        </li>
                        <li>
                            <span>Following</span>
                            <span>1.201</span>
                        </li>
                        <li>
                            <span>Friends</span>
                            <span>14.252</span>
                        </li>
                    </ul>
                    <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
                </div>
            </div>

            <div class="card card-about-me">
                <div class="header">
                    <h2>ABOUT ME</h2>
                </div>
                <div class="body">
                    <ul>
                        <li>
                            <div class="title">
                                <i class="material-icons">library_books</i>
                                        Education
                            </div>
                            <div class="content">
                                        B.S. in Computer Science from the University of Tennessee at Knoxville
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">location_on</i>
                                        Location
                            </div>
                            <div class="content">
                                        Malibu, California
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">edit</i>
                                        Skills
                            </div>
                            <div class="content">
                                <span class="label bg-red">UI Design</span>
                                <span class="label bg-teal">JavaScript</span>
                                <span class="label bg-blue">PHP</span>
                                <span class="label bg-amber">Node.js</span>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">notes</i>
                                        Description
                            </div>
                            <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
