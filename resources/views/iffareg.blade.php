<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IFFA Summit registration form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/scrollbar.css')}}">
</head>

<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img"></div>
                <div class="signup-form" id="style-4-scrollbar">
                    @if($errors->any() )
                        <div class="alert alert-warning">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" class="register-form" action="{{ route('memberships.store') }}" id="register-form">
                        @csrf()
                        <h2>IFFA Summit registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="sur_name">Sur Name :</label>
                                <input type="text" name="sur_name" id="name" required />
                            </div>
                            <div class="form-group">
                                <label for="other_names">Other Names :</label>
                                <input type="text" name="other_names" id="other_names" required />
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="gender">Gender</label>
                            <div class="form-select">
                                <select name="gender" id="gender">
                                    <option value="">Choose...</option>
                                     <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address :</label>
                            <input type="text" name="email" id="email" required />
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number :</label>
                                <input type="text" name="phone" id="phone" required />
                            </div>

                            <div class="form-group">
                                <label for="cr">Country of residence</label>
                                <input type="text" name="cr" id="cr" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="csr">Current state of residence</label>
                            <input type="text" name="csr" id="csr">
                        </div>

                        <div class="form-group">
                             <label for="uni">Are You Still a Student ? If Yes State/Prefered not to Say.</label>
                            <input type="text" name="uni" id="uni">
                        </div>

                        


                        <div class="form-group">
                            <label for="wi">What industry are you innovating for </label>
                            <div class="form-select">
                                <select name="wi" id="wi">
                                    <option value=""></option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Education">Education</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Fintech">Fintech</option>
                                     <option value="Tech">Tech</option>
                                    <option value="Others">Others</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                         
                        
                         <div class="form-group">
                            <label for="how">How did you get to hear about the conference</label>
                            <div class="form-select">
                                <select name="how" id="how">
                                    <option value=""></option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Radio">Radio</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="through a friend">through a friend</option>
                                    <option value="others">others</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="howt">How are you traveling to the conference? </label>
                            <div class="form-select">
                                <select name="howt" id="howt">
                                    <option value=""></option>
                                    <option value="By Bus/Car">By Bus/Car</option>
                                    <option value="By Train">By Train</option>
                                     <option value="By Airplane">By Airplane</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="do">Do you have any allergies or health challenge ? if  yes, please state</label>
                            <input type="text" name="do" id="do" required />
                        </div>

                        <div class="form-group">
                            <label for="ex">what are your expectations for the conference? </label>
                            <input type="text" name="ex" id="ex">
                        </div>
                         <div class="form-group">
                            <label for="please">Please can you share any other information that will help us plan better for your arrival and participation?</label>
                            <textarea name="please" id="please" cols="30" rows="10"></textarea>
                        </div>

                        

                        <div class="form-submit">

                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
