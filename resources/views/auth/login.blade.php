@extends('principal.principal')
<section id="intro" class="intro">
    <div class="intro-content">
      <div class="container">
        <div class="row">


          <div class="col-lg-6">
            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
              <h2 class="h-ultra">Medicio medical group</h2>
            </div>
            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
              <h4 class="h-light">Provide <span class="color">best quality healthcare</span> for you</h4>
            </div>
            <div class="well well-trans">
              <div class="wow fadeInRight" data-wow-delay="0.1s">

                <ul class="lead-list">
                  <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                  <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
                  <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
                </ul>

              </div>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="form-wrapper">
              <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                <div class="panel panel-skin">
                  <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Make an appoinment <small>(It's free!)</small></h3>
                  </div>
                  <div class="panel-body">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>

                    <form action="" method="post" role="form" class="contactForm lead">
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>F</label>
                            <input type="text" name="first_name" id="first_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                            <div class="validation"></div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control input-md" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" name="phone" id="phone" class="form-control input-md" data-rule="required" data-msg="The phone number is required">
                            <div class="validation"></div>
                          </div>
                        </div>
                      </div>

                      <input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">

                      <p class="lead-footer">* We'll contact you by phone & email later</p>

                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@section('contenido')
@endsection
