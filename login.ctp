<html>
    <head>

        
        <style>

                p{
                    display: none;
                }

                 @media only screen and (max-width: 600px) {
                h3 {
                    display: none;
                }
                p {
                    display: block;
                }
            }
                #abc{
                    color:#fff;
                }
                .heading{
            /*         background-image: url('/leavesystem/img/sky-blue.jpg');*/
                     background-size: 100% 100%;
                     background-color: #FFF;
                     margin-top: -20px;
                }
                .navbar{
                    background-color: #563d7c; 
                }
                body{
                    background-color: #E3ECFB;
                   overflow-x: hidden;
                   overflow-y: auto; 
                    }
                #logo{
                    background-image: url('/leavesystem/img/ganesh1.png');
                    background-size: 100% 100%;
                    height: 100px;
                }
                #name{
                    background-image: url('/leavesystem/img/name.jpg');
                    background-size: 100% 100%;
                    height: 80px;
                }
                #logo1{
                    background-image: url('/leavesystem/img/logo.png');
                    background-size: 100% 100%;
                    height: 100px;
                }
                #mainImg{
                    min-height: 300px;
                    background-size: 100% 100%;
                }
        </style>
  
    </head>
<body>


    
    <div class="row" >
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 heading">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" id="logo">
                
            </div>
            <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10" style="text-align:center;">
                <h3 style="margin-top:40px;"> रोग अन्वेषण विभाग औंध, पुणे</h3>
                <p style="margin-top:40px;"> रोग अन्वेषण विभाग औंध, पुणे</p>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 pull-right" id="logo1">
                
            </div>
        </div>
    </div>

    <div class="row">
        <nav class="navbar navbar-default">
     
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:#fff; margin-left:20px;">रजा व्यवस्थापन प्रणाली</a>
        </div>
           <div id="navbar" class="navbar-collapse collapse">        
                      
                <ul class="nav navbar-nav navbar-right" style="margin-right:15px;">
                    <li><?php echo $this->Html->link(' नोंदणी करा', '/Users/add',['id'=>'abc'])?>
                        </li>
                 </ul>
                   
             </div>                 
        </nav>
    </div>
     <div class="row" style="margin-top:25px;">        
            
               
                    <div id="myCarousel" class="carousel slide col-md-6" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="/leavesystem/img/ahd.png" style="width:100%;  height: 350px" alt="Los Angeles">
                            </div>

                            <div class="item">
                              <img src="/leavesystem/img/map.png" style="width:100%; height: 350px;" alt="Chicago">
                            </div>

                            <div class="item">
                              <img src="/leavesystem/img/ahd.png" style="width:100%;  height: 350px" alt="New York">
                            </div>
                          </div>

                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                          </a>
         </div>

                 
			 
			 <div class="col-md-6" style="background-color:#fff; min-height:350px;">
                     
                        <?= $this->Form->create();?>
                        <fieldset>
                            
                            <div class="row">
                                  <h2><center> Login </center></h2>
                                   <br>
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <?= $this->Form->text('uname',['placeholder '=>'Username','class' => 'form-control','label'=>false,'required'=>'required','maxlength'=>'15']);?>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i>
                                             </span>
                                            <?= $this->Form->input('password',['placeholder '=>'Password','class' => 'form-control','label'=>false,'required'=>'required','maxlength'=>'10']);?>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <?= $this->Form->button('लॉगिन करा',['class'=>'btn btn-md col-md-5 btn-primary' ,'value' =>'लॉगिन करा']);?>
                                       <?= $this->html->link('पासवर्ड विसरलात का ?',['url' => 'Users', 'action' => 'fpass'],['class'=>'btn col-md-5 col-md-offset-2 btn-primary']) ?>
                       
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <?= $this->Form->end();?>
                    </div>              
     </div><br/> 


   <div class="row" style=" background-color: #563d7c; position: fixed;left: 0; bottom: 0; width: 100%; ">
    <marquee style="color:white; height:50px; text-transform: uppercase;" srcollamount="4" ><h4 style="margin-top:15px;"> welcome to animal Husbandry aundh, Pune. </h4></marquee>
    </div>
   </body>
</html>
