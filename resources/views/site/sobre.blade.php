
@extends('site.template')

@section('title', 'Sobre')

@section('content')
    
  <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
                <h1 class="title-single">A HISTÓRIA</h1>
            </div>
            </div>
            <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Início</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Sobre
                </li>
                </ol>
            </nav>
            </div>
        </div>
        </div>
    </section>
  <!--/ Intro Single End /-->

  <!--/ About Star /-->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="img/sobre-slide1.jpg" alt="" class="img-fluid">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">Tudo tem um começo!
              <span></span>
              <br> Nascemos para crescer.</h3>
            <p>Necessidade & Pró-atividade</p>
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <img src="img/about-2.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2  d-none d-lg-block">
              <div class="title-vertical d-flex justify-content-start">
                <span>SUSTENTABILIDADE</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">Gestão
                  <span class="color-d">Processos</span> Administração
                  <br> <span class="color-d">Teoria </span> Prática.</h3>
              </div>
              <p class="color-text-a">
                <b>Queremos evoluir, nos adaptar, mudar, incorporar, crescer.</b>
                A RTFLAKE nasceu com o objetivo de ser uma gigante da reciclagem, evitando
                que garrafas PET cheguem aos rios, mares e oceanos.
                  Para isso fechamos fortes parcerias com os mais diversos setores, cooperativas, 
                centros de triagens, <b>sucateiros</b>, geradores de resíduos, apoiamos projetos,
                desde os <b>Catadores</b> até os agentes do terceiro setor.
                A indústria de reciclagem vem se desenvolvendo no Brasil desde o começo dos anos noventa, 
                o que resulta em elevados índices de reciclagem e tecnologia de ponta 
                <b>Requisitada como estratégia para a gestão dos resíduos no destino final</b>, 
                a reciclagem possui a particularidade de ser uma atividade econômica bastante rentável. 
                Estamos acompanhando os índices da indústria de reciclagem dos materiais no Brasil. 
                </p>
              <p class="color-text-a">
                Com base nos resultados obtidos através da consulta bibliográfica e dados estatísticos 
                oriundos de fontes primárias e secundárias, conclui-se que a atividade da reciclagem dos 
                materiais no Brasil se presta a satisfazer exclusivamente às demandas econômicas do setor. 
                Neste sentido, a contribuição ambiental da reciclagem perde relevância visto que o 
                crescimento da atividade está condicionado às demandas da cadeia produtiva industrial.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->

  <!--/ Team Star /-->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Nosso Time</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="img/time01.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Geração de Dados
                      <br> Rodrigo Augusto</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  Não faço de propósito, apenas penso em coisas diferentes.
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Fone: </strong> +55 479 8819 2786</p>
                  <p>
                    <strong>Email: </strong> rodrigo@rtflake.com</p>
                </div>
              </div>
              <!--div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="img/time02.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Diretora Financeira
                      <br> Renata Takada</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  Gastar é comigo mesmo, eu sei muito bem!
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> +55 479 9912-7518</p>
                  <p>
                    <strong>Email: </strong> financeiro@rtflake.com</p>
                </div>
              </div>
              <!--div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="img/time03.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Gerente Comercial
                      <br> Quenas Luiz</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  Eu gosto de comprar Garrafa PET, e sei fazer isso!
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Fone: </strong> +55 479 9103-0027</p>
                  <p>
                    <strong>Email: </strong> comercial@rtflake.com</p>
                </div>
              </div>
              <!--div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Team End /-->


@endsection
