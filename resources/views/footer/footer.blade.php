<div class="bg-light py-4" id="servicos">
    <div class="container">
        <div class="row justify-content-center pb-5" data-aos="fade-up" data-aos-duration="1200">
            <div class="col-md-7 text-center">
                <h2 class="mb-3">Nossos Serviços</h2>
            </div>
        </div>
        <div class="row divServicos">
            <div class="p-2 col-sm-12 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-duration="1200">
                <div class="card p-4 h-transDown shadow">
                    <div class="img text-center m-2 my-4">
                        <img src="{{asset('img/education-cap.jpg')}}" alt="" class="img img-fluid card-img-service">
                    </div>
                    <div class="text-center h5 text-principle">Monografia</div>
                    <div class="description text-center text-dark">
                        <small>
                            <p>Preço do trabalho a partir de: 4000MZN</p>
                            <p>Prazo de conclusão a partir de : 15 dias</p>
                            <p>Verificação antiplagiativo</p>
                        </small>
                    </div>
                    <button class="btn btn-outline-principle rounded-pill h-float" data-bs-toggle="modal"
                        data-bs-target="#pedidoModal">Pedir</button>
                </div>
            </div>
            <div class="p-2 col-sm-12 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-duration="1200">
                <div class="card p-4 h-transDown shadow">
                    <div class="text-center m-2 my-4 img">
                        <img src="{{asset('img/couse-skills.jpg')}}" alt="" class="img img-fluid card-img-service">
                    </div>
                    <div class="text-center h5 text-principle">Trabalho de curso</div>
                    <div class="description text-center">
                        <small>
                            <p>Preço do trabalho a partir de: 100MZN</p>
                            <p>Prazo de conclusão a partir de : 10 dias</p>
                            <p>Verificação antiplagiativo</p>
                        </small>
                    </div>
                    <button class="btn btn-outline-principle rounded-pill h-float" data-bs-toggle="modal"
                        data-bs-target="#pedidoModal">Pedir</button>
                </div>
            </div>
            <div class="p-2 col-sm-12 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-duration="1200">
                <div class="card p-4 h-transDown shadow">
                    <div class="img text-center m-2 my-4">
                        <img src="{{asset('img/exams.jpg')}}" alt="" class="img img-fluid card-img-service">
                    </div>
                    <div class="text-center h5 text-principle">Teste</div>
                    <div class="description text-center">
                        <small>
                            <p>Preço do trabalho a partir de: 75MZN</p>
                            <p>Prazo de conclusão a partir de : 1 dia</p>
                            <p>Verificação antiplagiativo</p>
                        </small>
                    </div>
                    <button class="btn btn-outline-principle rounded-pill h-float" data-bs-toggle="modal"
                        data-bs-target="#pedidoModal">Pedir</button>
                </div>
            </div>
            <div class="p-2 col-sm-12 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-duration="1200">
                <div class="card p-4 h-transDown shadow">
                    <div class="img text-center m-2 my-4">
                        <img src="{{asset('img/education-cap-2.jpg')}}" alt="" class="img img-fluid card-img-service">
                    </div>
                    <div class="text-center text-principle h5">Trabalho de Mestrado</div>
                    <div class="description text-center">
                        <small>
                            <p>Preço do trabalho a partir de: 5000MZN</p>
                            <p>Prazo de conclusão a partir de : 30 dias</p>
                            <p>Verificação antiplagiativo</p>
                        </small>
                    </div>
                    <button class="btn btn-outline-principle rounded-pill h-float" data-bs-toggle="modal"
                        data-bs-target="#pedidoModal">Pedir</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-light py-5" id="contacto">
    <div class="container">
        <div class="row contact_us">
            <div class="row text-center mb-2">
                <h2 class="h2">Contacte-nos</h2> 
                <p>Se você tiver qualquer duvida deixe o seus dados que os nossos especialistas entrarão em contacto</p>
            </div>
            <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1200">
                <div class="col-sm-0 col-lg-6 col-md-6 divImgContact">
                    <img class="img img-fluid" src="{{ asset('img/contact.png') }}" alt="Mo">
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6 row justify-content-center align-items-center">
                    <div class="mt-5 mt-lg-0">
                        <div class="alert alert-success d-none" id="mailSuccess">Mensagem enviada com sucesso</div>
                        <div class="alert alert-danger d-none" id="mailFalha">Falha no envio da mensagem</div>
                        <form id="contactForm">
                            @csrf
    
                            <div class="form-group">
                                <input type="text" name="mail_nome" class="form-control border-none shadow-sm" id="nome" placeholder="Nome"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" class="form-control border-none shadow-sm" name="mail_email" id="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control border-none shadow-sm" name="mail_assunto" id="assunto"
                                    placeholder="Assunto" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control border-none shadow-sm" name="mail_mensagem" rows="5" placeholder="Mensagem"
                                    required></textarea>
                            </div>
                            <div class="text-center form-group mt-3">
                                <button class="btn btn-principle text-white rounded-pill h-float btn-contacte"
                                    type="submit">
                                    <span class="text-white">Enviar</span> <img class="img d-none load"
                                        src="{{ asset('img/ajax-loader.gif') }}" alt=""></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-principle text-white">
    <div class="container">
        <div class="row text-center py-5">
            <div class="col-xs-6 col-lg">
                <div class="row flex-column">
                    <div class="">
                        <i class="bi bi-gear fs-1"></i>
                    </div>
                    <div class="">
                        <div class="text-uppercase">Suporte ao cliente</div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-lg">
                <div class="row flex-column">
                    <div class="">
                        <i class="bi bi-hand-thumbs-up fs-1"></i>
                    </div>
                    <div class="">
                        <div class="text-uppercase">Garantia da qualidade</div>
                    </div>
                </div> 
            </div>

            <div class="col-xs-6 col-lg">
                <div class="row flex-column">
                    <div class="">
                        <i class="fa fa-dollar-sign fs-1 mt-3"></i>
                    </div>
                    <div class="">
                        <div class="text-uppercase">PREÇOS DEMOCRÁTICOS</div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-lg">
                <div class="row flex-column">
                    <div class="">
                        <i class="bi bi-pencil-square fs-1"></i>
                    </div>
                    <div class="">
                        <div class="text-uppercase">EDIÇOES GRATUITAS</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-5 partDown">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 order-md-1 order-lg-1 order-sm-1 order-xs-1 f-contactUsN">
                <div class="row flex-column ms-lg-5 ms-md-5 ms-sm-5 ms-xs-1">
                    <div class="">
                        <h3 class="h4">LMTEACHER</h3>
                    </div>
                    <div class="">
                        <p class="fw-bold text-light">+258-86-798-90-97</p>
                        <p class="text-light">Centro de Ajuda</p>
                        <p class="fw-bold text-light">+258-86-798-90-97</p>
                        <p class="text-light">Suporte ao Cliente</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-xs-9 order-xs-2 col-sm-8 order-sm-2 col-md-8 order-md-2 col-lg-4 order-lg-2">
                <div class="row flex-column offset-lg-1 offset-md-5 offset-sm-5 offset-xs-5">
                    <div>
                        <h3 class="h4">SERVIÇOS</h3>
                    </div>
                    <div>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link  text-white"> Resolução de testes </a></li>
                            <li class="nav-item"><a class="nav-link  text-white"> Redição de trabalhos de curso </a></li>
                            <li class="nav-item"><a class="nav-link  text-white"> Redição de diplomas de licenciatura </a></li>
                            <li class="nav-item"><a class="nav-link  text-white"> Redição de diplomas de mestrado</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-9 order-xs-4 col-sm-8 order-sm-4 col-md-8 order-md-4 col-lg-4 order-lg-3 sobre">
                <div class="row flex-column offset-lg-5 offset-md-5 offset-sm-5 offset-xs-5">
                    <div>
                        <h3 class="h4">SOBRE</h3>
                    </div>
                    <div>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link  text-white "> Sobre nos </a></li>
                            <li class="nav-item"><a class="nav-link  text-white"> Contactos </a></li>
                            <li class="nav-item"><a class="nav-link  text-white"> Emprego </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 order-xs-3 col-sm-4 order-sm-3 col-lg col-md-4 order-md-3 order-lg-4 f-contactUs">
                <div class="row flex-column ms-lg-5 ms-md-5 ms-sm-5 ms-xs-1">
                    <div class="row">
                        <p class="text-white">Maputo, av.24 de julho, 232</p>
                    </div>
                    <div class="flex-row">
                        <i class="bi bi-facebook fs-3 me-3"></i>
                        <i class="bi bi-whatsapp fs-3 me-3"></i>
                        <i class="bi bi-instagram fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-light">
    <div class="container">
        <div class="row py-4">
            <div class="ps-5 d-flex justify-content-start text-principle fs-8">
               &copy LMTGROUP 2021 | Todos direitos reservados
            </div>
        </div>
    </div>
</div>
