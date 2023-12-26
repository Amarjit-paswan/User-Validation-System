<?php 

session_start();

if(isset($_SESSION['email'])){
    header('Location: welcome.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        ul{
            list-style: none;
            padding: 5px;
        }

        .pass li{
            /* width: 9rem; */
            font-size: 15px;
        }

        .pass  li span::before{
            content: ' 🔘';
            
        }

        .pass  li.active span::before{
            content: ' ✅';
            
        }

        .cursor1{
            cursor: not-allowed;
            user-select: none;
        }

        #reload{
            cursor: pointer;
        }

    </style>
</head>
<body>

    <!-- SignUp Modal Starts -->
    <div class="modal fade" id="signModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register Your Details</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                 <div class="alert alert-danger d-none d-flex justify-content-between" role="alert"></div>
                 
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary spin d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </div>
                        <form action="" id="signForm" class="mt-4">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="S_name" id="s_name" class="form-control border border-secondary" placeholder="Enter Your Name...">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" name="S_email" id="s_email" class="form-control border border-secondary" placeholder="Enter Your Email...">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" name="S_password" id="s_password" class="form-control border border-secondary" placeholder="Password">
                                <ul class=" pass d-none d-flex justify-content-around align-items-center ">
                                    <li class="s_letter"><span></span>Small letter </li>
                                    <li class="o_symbol"><span></span>One Symbol </li>
                                    <li class="o_num"><span></span>One Number </li>
                                    <li class="character"><span></span>8 Character </li>
                                </ul>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Confrim Password</label>
                                <input type="password" name="S_conPass" id="s_conPass" class="form-control border border-secondary" placeholder="Confirm Password" >
                                
                            </div>

                            <input type="submit" value="Submit" name="S_submit" id="s_submit" class="btn btn-primary float-end">
                        </form>
                 </div>
                </div>
            </div>
        </div>
    </div>  
    <!-- SignUp Modal End -->

   <!-- ----------------------------------------- -->

   <!-- Login Modal Starts -->
   <div class="modal fade" id="loginModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login User</h4>
                <button type="button" class="btn-close" data-bs-dismiss='modal'></button>
            </div>

            <div class="modal-body">
                <div class="alert alert-danger d-none d-flex justify-content-between" role="alert"></div>
                <div class="col-12 d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary spin d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                </div>
                 
                <form action="" id="loginForm" class="mt-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" name="L_email" id="l_email" class="form-control border border-secondary" placeholder="Enter Your Email...">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="L_password" id="l_password" class="form-control border border-secondary" placeholder="Enter Your Password...">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Enter Captcha</label>
                        <div class="col-12 d-flex justify-content-around align-items-center">
                            <div class="mb-2 py-0 px-3 rounded fs-3 mx-2 mt-1 text-white   text-center bg-secondary" id="captchaValue">
                               <del class="cursor1"> fdffgg </del>
                            </div>
                            <input type="text"  id="captchaMatch" class="form-control  border border-secondary  text-center" placeholder="Enter Your Captcha">
                            <span id="reload" class="fs-2">🔄️</span>
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            
                        </div>
                         
                    </div>

                    <input type="submit" value="Login" name="L_submit" id="l_submit" class="btn btn-primary float-end">
                </form>
            </div>
        </div>
      </div>
   </div>
   <!-- Login Modal End -->
            
    <div class="container-fluid">

            <div class="row">
                <div class="col-12 p-0">
                    <nav class="navbar bg-secondary justify-content-end">
                    <ul class="nav ">
                        <li class="nav-item">
                            <button type="button" class="nav-link btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                        </li>
                        <li class="nav-item">
                            <buttn type='button' class="nav-link btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#signModal">SignUp</button>
                        </li>
                    </ul>
                    </nav>
                </div>
              

                <div class="col-12 my-5">
                    <h1 class="text-center bg-info py-4 rounded">Welcome to Home Page Website</h1>
                </div>

                <div class="col-12 d-none acSuc  d-flex justify-content-center align-items-center">
                        <div class="col-7 p-3 bg-success text-white rounded  fs-1">
                            ✅ Congrastulation! Your Account has created..
                        </div>
                </div>
            </div>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <script>
        $(document).ready(function(){
            function add(){
                $('#s_submit').click(function(e){
                    e.preventDefault();
                    let name = $('#s_name').val();
                    let email = $('#s_email').val();
                    let password = $('#s_password').val();
                    let cn_pass = $('#s_conPass').val();
                    let regx = /^(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*])|(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*])|(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*\d)$/;

                    // console.log(regx.test("Abc@1"));
                    if(name === '' || email === '' || password === ''){
                        $('.alert-danger').removeClass('d-none');
                        $('.alert-danger').html('Please! Fill All Deatils ' + '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>')
                        $('.alert-danger').addClass('d-block');
                        setTimeout(function(){
                        $('.alert-danger').addClass('d-none');
                        },3000);
                        
                    }else if(!regx.test(password) || password.length !== 8 || !password.length > 8){
                        $('.alert-danger').removeClass('d-none');
                        $('.alert-danger').html('Fill All Password Criteria.. ' + '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>')
                        $('.alert-danger').addClass('d-block');
                        setTimeout(function(){
                        $('.alert-danger').addClass('d-none');
                        },3000);
                    } else if(password !== cn_pass){
                        $('.alert-danger').removeClass('d-none');
                        $('.alert-danger').html('Your Confim Password is not matched.. ' + '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>')
                        $('.alert-danger').addClass('d-block');
                        setTimeout(function(){
                        $('.alert-danger').addClass('d-none');
                        },3000);
                    }else{
                        
                     

                        $.ajax({
                            url:'action.php',
                            type:'POST',
                            data:$('#signForm').serialize()+'&action=add',
                            success:function(res){
                                if(res === 'exists'){
                                    $('.alert-danger').removeClass('d-none');
                                    $('.alert-danger').html('Email already exists.. ' + '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>')
                                    $('.alert-danger').addClass('d-block');
                                    setTimeout(function(){
                                    $('.alert-danger').addClass('d-none');
                                    },3000);
                                }else{
                                    $('.spin').removeClass('d-none');
                                    setTimeout(function(){
                                        $('.spin').addClass('d-none');
                                        $('#signForm').trigger('reset');
                                        $('#signModal').modal('hide');
                                        $('.acSuc').removeClass('d-none');
                                        setTimeout(function(){
                                        $('.acSuc').addClass('d-none');

                                        },3000);
                                        console.log(res);
                                    },3500);
                                }
                                
                            }
                            
                        })
                            
                        
                       
                    }
                })
            }

             function password_valid(){
                $('#s_password').on('focus',function(){
                $('.pass').removeClass('d-none');
                    })
                    $('#s_password').on('blur',function(){
                        $('.pass').addClass('d-none');
                    })

                    $('#s_password').on('keyup',function(){
                        passValue = $(this).val();

                        if(passValue.match(/[a-z]/g)){
                            $('.s_letter').addClass('active');
                        }else{
                            $('.s_letter').removeClass('active');

                        }
                        if(passValue.match(/[0-9]/g)){
                            $('.o_num').addClass('active');
                        }else{
                            $('.o_num').removeClass('active');

                        }
                        if(passValue.match(/[!@#$%^&*]/g)){
                            $('.o_symbol').addClass('active');
                        }else{
                            $('.o_symbol').removeClass('active');

                        }

                        if(passValue.length == 8 || passValue.length > 8){
                            $('.character').addClass('active');
                        }else{
                            $('.character').removeClass('active');
                        }
                    })
            }


            function login_match(){
                function captcha(){
                let letters = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz';
                let captcha;
                generate();

                function generate(){
                    let first =  letters[Math.floor(Math.random() * letters.length)];
                    let second = Math.floor(Math.random()*10);
                    let third = Math.floor(Math.random()*10);
                    let fourth =  letters[Math.floor(Math.random() * letters.length)];
                    let fifth =  letters[Math.floor(Math.random() * letters.length)];
                    let six = Math.floor(Math.random()*10);

                    captcha = first.toString()+second.toString()+third.toString()+fourth.toString()+fifth.toString()+six.toString();

                    $('.cursor1').html(captcha);
                }

                
               $('#reload').click(function(){
                $('#captchaMatch').val('');
                generate();
               });

             

              


                console.log(captcha);
            }
                    captcha();

                $('#l_submit').click(function(e){
                    e.preventDefault();
                    let name = $('#l_name').val();
                    let password = $('#l_password').val();
                    let captchaVal = $('.cursor1').text();
                    let captchaMatch = $('#captchaMatch').val();
                   

                    if(name === '' || password === '' || captchaMatch === ''){

                        $('.alert-danger').removeClass('d-none');
                        $('.alert-danger').html('Please Fill All Details..' + '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>');
                        setTimeout(function(){
                            $('.alert-danger').addClass('d-none');
                        },3000);
                    }else if(captchaVal !== captchaMatch){
                        $('.alert-danger').removeClass('d-none');
                        $('.alert-danger').html('Enter Valid Captcha..' + '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>');
                        setTimeout(function(){
                            $('.alert-danger').addClass('d-none');
                        },3000);
                    }else{
                        $.ajax({
                            url:'action.php',
                            type:'POST',
                            data:$('#loginForm').serialize()+'&action=login',
                            success:function(res){
                                if(res === 'Invalid'){
                                    $('.alert-danger').removeClass('d-none');
                                    $('.alert-danger').html('Email or Password are Invalid..' + '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>');
                                    setTimeout(function(){
                                        $('.alert-danger').addClass('d-none');
                                    },3000);
                                }else{
                                    $('.spin').removeClass('d-none');
                                    $('#loginForm').trigger('reset');
                                    setTimeout(function(){
                                        $('.spin').addClass('d-none');
                                        $('#loginModal').modal('hide');
                                        window.location.href = 'welcome.php';
                                        console.log('Matchedd..');
                                    },3500)
                                   
                                }
                            }
                        })
                    }
                })
            }

            




            add();
            login_match();
            password_valid();

            

          
        })
    </script>
</body>
</html>