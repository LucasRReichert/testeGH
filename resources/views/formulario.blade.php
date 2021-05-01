<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>GH Branding</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="images/logo.svg" alt="Logo"/>
                </div>
                <div class="col-6 d-flex justify-content-around">
                    <span>Work</span>
                    <span>Services</span>
                    <span>About</span>
                    <span>Contact</span>
                    <span>BRA / EUA</span>
                    <div class="d-flex justify-content-center align-items-center flex-column" style="border-radius: 50%; height: 40px; width: 40px; border: 2px solid #0075bf;">
                        <div>
                            <div style="border: 1px solid #0075bf; width: 15px; background-color: #0075bf"></div>
                        </div>
                        <div>
                            <div style="border: 1px solid #0075bf; width: 15px; margin-top: 3px; background-color: #0075bf"></div>
                        </div>
                        <div>
                            <div style="border: 1px solid #0075bf; width: 15px; margin-top: 3px; background-color: #0075bf"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
      <div>
            <div class="row">
                <div class="col-12">
                    <img src="images/headerImg.svg" alt="Logo" />
                </div>
            </div>
       </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="title-paragraph col-6">
                     <h1 class="title-page">
                    Desenvolvimento <br>de Produtos Digitais
                     <h1>
                    <p style="margin-top: 30px">
                         Brands are built based on the DNA of the companies, while respecting.
                    </p>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <div class="form" style="width: 350px; height: 350px; margin-top: -350px">
                    <div class="form-intern">
                    <h2 class="form-title">
                        Entre em contato!
                    </h2>                    
                    <form name="formulario" id="formulario">  
                        @csrf
                             <input type="hidden" name="id" required/>
                              <label class="label">
                                   Nome: <br>
                                  <input value="" type="text" class="input-form" id="name" name="name" />
                             </label>

                              <label class="label">
                                 Telefone: <br>
                                 <input value="" type="tel" class="input-form" id="telephone" name="telephone" />
                             </label>

                             <label class="label">
                                 E-mail: <br>
                                <input value="" type="email" class="input-form" id="email" name="email" />
                             </label>
                             <div class="d-flex justify-content-center">
                             <button class="send-button">
                                Enviar
                            </button>
                             </div>  
                         </form> 
                     </div>  
                    </div>   
                </div>  
            </div>
        </div>
    </section>

    <div style="margin-bottom: 50px">
        <b class="bold-description">
            Brands are built based on the DNA of the companies, while respecting its
            <br>values and principies. They are built of strategic positioning and through the true identification with people both inside and
            <br>outside the enterprise.
            <br>Our role is to find the purpose of your brand in this world and thus walk a relevant and consistent way by qualified execution
            <br>of branding across all touch points of your brand and so occupy a place only your on the market, and especially in the people's
            <br>hearts.
        </b>
    </div>
    <section class="section-help">
        <div class="container">
            <div class="row">
                <h1 class="title-help">
                    Como nós ajudamos
                <h1>
        </div>
        <div class="container">
        <div class="d-flex justify-content-around row">
                    <div class="box col-3">
                    <div class="box-inter">
                        <h2>
                            Lorem ipsum dolor sit, amet consectetur adipisicing eli,
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo culpa minus maiores blanditiis.
                        </p>
                        <div class="d-flex justify-content-end">
                            <img src="images/setaDiagonal.svg" alt="Logo"/>
                        </div>
                    </div>
                    </div>
                    <div class="box col-3">
                    <div class="box-inter">
                        <h2>
                            Lorem ipsum dolor sit, amet consectetur adipisicing eli,
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo culpa minus maiores blanditiis.
                        </p>
                        <div class="d-flex justify-content-end">
                            <img src="images/setaDiagonal.svg" alt="Logo"/>
                        </div>
                    </div>
                    </div>
                    <div class="box col-3">
                    <div class="box-inter">
                        <h2>
                            Lorem ipsum dolor sit, amet consectetur adipisicing eli,
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo culpa minus maiores blanditiis.
                        </p>
                        <div class="d-flex justify-content-end">
                            <img src="images/setaDiagonal.svg" alt="Logo"/>
                        </div>
                    </div>
                    </div>
                    </div>
            </div>
        <div class="container">
            <div class="d-flex justify-content-around row">
                    <div class="mt-5 box col-3">
                    <div class="box-inter">
                        <h2>
                            Lorem ipsum dolor sit, amet consectetur adipisicing eli,
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo culpa minus maiores blanditiis.
                        </p>
                        <div class="d-flex justify-content-end">
                            <img src="images/setaDiagonal.svg" alt="Logo"/>
                        </div>
                    </div>
                    </div>
                    <div class="mt-5 box col-3">
                    <div class="box-inter">
                        <h2>
                            Lorem ipsum dolor sit, amet consectetur adipisicing eli,
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo culpa minus maiores blanditiis.
                        </p>
                        <div class="d-flex justify-content-end">
                            <img src="images/setaDiagonal.svg" alt="Logo"/>
                        </div>
                    </div>
                    </div>
                    <div class="mt-5 box col-3">
                    <div class="box-inter">
                        <h2>
                            Lorem ipsum dolor sit, amet consectetur adipisicing eli,
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo culpa minus maiores blanditiis.
                        </p>
                        <div class="d-flex justify-content-end">
                            <img src="images/setaDiagonal.svg" alt="Logo"/>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
            </div>
            </div>
            <div>
            <div class="d-flex justify-content-center">
                <button class="contact-button">
                        Entre em contato
                </button> 
            </div>
            </div>
        </div>
    </section>
    <section class="section-help">
        <div class="container">
            <div class="row">
                <h1 class="title-help">
                    Cases
                </h1>
                <div class="d-flex justify-content-around">
                    <div class="py-5 container row col-3" style="background-color: #0075bf; width: 350px; height:350px">
                        <div class="col-12" style="height: 25%">
                            <div class="col-4" style="margin-left: auto">
                            <img class="col-3"  style="width: 50px" src="images/seta.svg" alt="seta">
                                <span style="color: white">
                                    More
                                </span>
                            </div>
                        </div>

                        <div class="d-flex flex-column justify-content-end col-12" style="height: 75%">
                            <h3 style="color: white; fontWeight: 700">
                                Godoc
                            </h3>
                            <p style="color: white">
                                Godoc is an app for scheduling of<br>medical appointments.
                            </p>
                            <small style="color: lightgray">
                                branding, interaction
                            </small>
                            <div style="border: 1px solid white; width: 20px"></div>
                        </div>
                    </div>

                    <div class="py-5 container row col-3" style="background-color: black; width: 350px; height:350px">
                        <div class="col-12" style="height: 25%">
                            <div class="col-4" style="margin-left: auto">
                            <img class="col-3"  style="width: 50px" src="images/seta.svg" alt="seta">
                                <span style="color: white">
                                    More
                                </span>
                            </div>
                        </div>

                        <div class="d-flex flex-column justify-content-end col-12" style="height: 75%">
                            <h3 style="color: white; fontWeight: 700">
                                Gerencial
                            </h3>
                            <p style="color: white">
                                Gerencial is an office of auditing,<br>
                                accounting and consulting.
                            </p>
                            <small style="color: lightgray">
                                branding, interaction
                            </small>
                            <div style="border: 1px solid white; width: 20px"></div>
                        </div>
                    </div>
                    
                    <div class="py-5 container row col-3" style="background-color: lightGray; width: 350px; height:350px" >
                        <div class="col-12" style="height: 25%">
                            <div class="col-4" style="margin-left: auto">
                            <img class="col-3"  style="width: 50px" src="images/setaPreta.svg" alt="seta">
                                <span style="color: black">
                                    More
                                </span>
                            </div>
                        </div>

                        <div class="d-flex flex-column justify-content-end col-12" style="height: 75%">
                            <h3 style="color: black; fontWeight: 700">
                                Vetherapy
                            </h3>
                            <p style="color: black">
                            Vetherapy is a San Francisco startup.<br>
                            Focuse on therapies from stem cells.
                            </p>
                            <small style="color: black">
                                branding, interaction
                            </small>
                            <div style="border: 1px solid black; width: 20px"></div>
                        </div>
                    </div>
                    </div>      
            </div>
        </div>
    </section>
    <section class="mt-5 section-help">
    <div class="container">
            <div class="row">
                <div class="d-flex justify-content-start">
                <img src="images/linha.png" alt="Logo"/>
                <h1 class="title-help">
                    All Projects
                <h1>
</div>
        </div>
    </section>    
    <section class="mt-5">
    <div class="container">
        <div class="footer">
            <div class="row">
                <h1>
                    design/ tech/ content/ strategy <br>
                <h1>
        </div>
        <div class="d-flex justify-content-around row">
                <span>
                    Santa Rosa, BR Porto Alegre, BR San Francisco, EUA
                <span>
        </div>  
        </div>  
    </section>    
</body>
<script>
    $('.send-button').click(function(e){
        event.preventDefault()
        const validateName = formulario.name.value;
        const validatePhone = formulario.telephone.value;
        const validateEmail = formulario.email.value;
        if (validateName == '' || validateName.length < 3) {
        alert('O nome não pode ser vazio e deve conter no mínimo 3 caracteres')
        return
        } 
        if (validatePhone == '' || validatePhone.length < 10) {
        alert('O telefone não pode ser vazio')
        return
        }
        if (validateEmail == '') {
        alert('O email não pode ser vazio')
        return
        }
        $.ajax({
            url:'{!!route('formulario-send')!!}',
            method: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                name: document.getElementById('name').value,
                telephone: document.getElementById('telephone').value,
                email: document.getElementById('email').value,
            },
            success: function(response){
                console.log(response)
            }
        })
    })
</script>
</html>