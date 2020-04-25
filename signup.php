<!doctype html>
<html lang="en">

<head>
    <title>Fix Devices | Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- include navigation -->
    <?php require_once("includes/headerlinks.php");?>

        <!-- include navigation -->

        <div class="sub1a">
            <div class="left-coverc"></div>
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-12 col-md-5">
                    </div>
                    <div class="col-12 col-md-7 ">
                        <div class="row">
                            <div class="col-12 col-md-8 col-lg-7 mx-auto">
                                <div class="text-center mb-5">
                                    <a href="index.php"><img src="img/fixdevicelogo1.svg" class="img-fluid" width="150"></a>

                                    <h1 class="mt-4"><strong>Create an Account</strong> </h1>
                                    <p>What do you want to sign up as ?</p>
                                </div>

                    


                                <div class="row">
                                    <div class="col-6 col-md-6 text-center mb-3 pointer" data-toggle="modal" data-target=".bd-example-modal-student">
                                    <div class="card faqcard shadow">
                                        <div class="card-body">
                                        <img src="img/student.svg" alt="" width="50" >
                                        <p class="faqtoptabtt mt-2">Student</p>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-6 col-md-6 text-center mb-3 pointer" data-toggle="modal" data-target=".bd-example-modal-technician">
                                    <div class="card faqcard shadow">
                                        <div class="card-body">
                                        <img src="img/technician.svg" alt="" width="50">
                                        <p class="faqtoptabtt mt-2">Technician</p>
                                        </div>
                                    </div>
                                    </div>
                            </div>

                            <div class="text-center mt-5">
                                            <p>Have an account?  <span> <a href="login.php">Login </a> </span></p>
                                        </div>
                        </div>

                      
                    </div>
                </div>

            </div>
        </div>


        
        <!-- student form -->
            <div class="modal   fade bd-example-modal-student" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-body">
                <form>
                    
                <div class="form-row ">
                    <div class="mb-3 col-12 col-md-6">
                    <input type="text" class="form-control form-fix" placeholder="Enter first name">
                    </div>
                    
                    <div class="mb-3 col-12 col-md-6">
                    <input type="text" class="form-control form-fix" placeholder="Enter Last name">
                    </div>
                </div>

                <div class="form-row ">
                    <div class="mb-3 col-12 col-md-6">
                    <input type="email" class="form-control form-fix" placeholder="Enter Email address">
                    </div>
                    
                    <div class="mb-3 col-12 col-md-6">
                    <input type="text" class="form-control form-fix" placeholder="Enter phone number">
                    </div>

                    <div class="mb-3 col-12 col-md-12">
                    <select name="" id="" class=" custom-select form-control form-fix">
                    <option selected>Select your Instituation...</option>
                        <option value="University of Professional Studies">University of Professional Studies, Accra</option>
                        <option value="University of Ghana">University of Ghana</option>
                        <option value="Kwame Nkrumah University of Science and Technology">Kwame Nkrumah University of Science and Technology</option>
                        <option value="Regent University College of Science and Technology">Regent University College of Science and Technology</option>
                    </select>
                    </div>

                    <div class="mb-3 col-12 col-md-6">
                    <input type="text" class="form-control form-fix" placeholder="Enter your Student ID">
                    </div>
                    
                    <div class="mb-3 col-12 col-md-6">
                    <input type="text" class="form-control form-fix" placeholder="Enter courses">
                    </div>
                </div>


                </form>
                </div>
                </div>
            </div>
            </div>
        <!-- student form -->

        
        <!-- technician form -->
        <div class="modal  fade bd-example-modal-technician" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        <!-- technician form -->



      

        <!-- footer includes -->
        <?php require_once("includes/footerlinks.php");?>
            <!-- footer includes -->

            </body>

</html>