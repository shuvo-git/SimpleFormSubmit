<?php require_once(__DIR__.'/../config/config.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
          margin: 0;
          padding: 0;
          border: 0;
          font: inherit;
          font-size: 100%;
          vertical-align: baseline;
        }

        html {
          line-height: 1;
        }

        ol, ul {
          list-style: none;
        }

        table {
          border-collapse: collapse;
          border-spacing: 0;
        }

        caption, th, td {
          text-align: left;
          font-weight: normal;
          vertical-align: middle;
        }

        q, blockquote {
          quotes: none;
        }
        q:before, q:after, blockquote:before, blockquote:after {
          content: "";
          content: none;
        }

        a img {
          border: none;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
          display: block;
        }

        /* Colors */
        /* ---------------------------------------- */
        * {
          -moz-box-sizing: border-box;
          -webkit-box-sizing: border-box;
          box-sizing: border-box;
        }

        body {
          text-align: center;
          font-family: 'Lato', 'sans-serif';
          font-weight: 400;
        }

        a {
          text-decoration: none;
        }

        .info-text {
          text-align: left;
          width: 100%;
        }

        header, form {
          padding: 4em 10%;
        }

        .form-group {
          margin-bottom: 20px;
        }

        h2.heading {
          font-size: 18px;
          text-transform: uppercase;
          font-weight: 300;
          text-align: left;
          color: #506982;
          border-bottom: 1px solid #506982;
          padding-bottom: 3px;
          margin-bottom: 20px;
        }

        .controls {
          text-align: left;
          position: relative;
        }
        .controls input[type="text"],
        .controls input[type="email"],
        .controls input[type="number"],
        .controls input[type="date"],
        .controls input[type="tel"],
        .controls textarea,
        .controls button,
        .controls select {
          padding: 12px;
          font-size: 14px;
          border: 1px solid #c6c6c6;
          width: 100%;
          margin-bottom: 18px;
          color: #888;
          font-family: 'Lato', 'sans-serif';
          font-size: 16px;
          font-weight: 300;
          -moz-border-radius: 2px;
          -webkit-border-radius: 2px;
          border-radius: 2px;
          -moz-transition: all 0.3s;
          -o-transition: all 0.3s;
          -webkit-transition: all 0.3s;
          transition: all 0.3s;
        }
        .controls input[type="text"]:focus, .controls input[type="text"]:hover,
        .controls input[type="email"]:focus,
        .controls input[type="email"]:hover,
        .controls input[type="number"]:focus,
        .controls input[type="number"]:hover,
        .controls input[type="date"]:focus,
        .controls input[type="date"]:hover,
        .controls input[type="tel"]:focus,
        .controls input[type="tel"]:hover,
        .controls textarea:focus,
        .controls textarea:hover,
        .controls button:focus,
        .controls button:hover,
        .controls select:focus,
        .controls select:hover {
          outline: none;
          border-color: #9FB1C1;
        }
        .controls input[type="text"]:focus + label .controls input[type="text"]:hover + label
        .controls input[type="email"]:focus + label
        .controls input[type="email"]:hover + label
        .controls input[type="number"]:focus + label
        .controls input[type="number"]:hover + label
        .controls input[type="date"]:focus + label
        .controls input[type="date"]:hover + label
        .controls input[type="tel"]:focus + label
        .controls input[type="tel"]:hover + label
        .controls textarea:focus + label
        .controls textarea:hover + label
        .controls button:focus + label
        .controls button:hover + label
        .controls select:focus + label
        .controls select:hover + label{
          color: #bdcc00;
          cursor: text;
        }
        .controls .fa-sort {
          position: absolute;
          right: 10px;
          top: 17px;
          color: #999;
        }
        .controls select {
          -moz-appearance: none;
          -webkit-appearance: none;
          cursor: pointer;
        }
        
        .controls label.float {
          position: absolute;
          left: 8px;
          top: 12px;
          width: 60%;
          color: #999;
          font-size: 16px;
          display: inline-block;
          padding: 4px 10px;
          font-weight: 400;
          background-color: rgba(255, 255, 255, 0);
          -moz-transition: color 0.3s, top 0.3s, background-color 0.8s;
          -o-transition: color 0.3s, top 0.3s, background-color 0.8s;
          -webkit-transition: color 0.3s, top 0.3s, background-color 0.8s;
          transition: color 0.3s, top 0.3s, background-color 0.8s;
          background-color: white;
        }
        .controls label.active {
          top: -11px;
          color: #555;
          background-color: white;
          width: auto;
        }

        .controls textarea {
          resize: none;
          height: 200px;
        }

        button {
          cursor: pointer;
          background-color: #1b3d4d;
          border: none;
          color: #fff;
          padding: 12px 0;
          float: right;
        }
        button:hover {
          background-color: #224c60;
        }

        .clear:after {
          content: "";
          display: table;
          clear: both;
        }

        .grid {
          background: white;
        }
        .grid:after {
          /* Or @extend clearfix */
          content: "";
          display: table;
          clear: both;
        }

        [class*='col-'] {
          float: left;
          padding-right: 10px;
        }
        .grid [class*='col-']:last-of-type {
          padding-right: 0;
        }

        .col-2-3 {
          width: 66.66%;
        }

        .col-1-3 {
          width: 33.33%;
        }

        .col-1-2 {
          width: 50%;
        }

        .col-1-4 {
          width: 25%;
        }

        @media (max-width: 760px) {
          .col-1-4-sm, .col-1-3, .col-2-3 {
            width: 100%;
          }

          [class*='col-'] {
            padding-right: 0px;
          }
        }
        .col-1-8 {
          width: 12.5%;
        }

        /** */
        #loading {
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          position: fixed;
          display: block;
          opacity: 0.4;
          background-color: #fff;
          z-index: 99;
          text-align: center;
        }

        #loading-image {
          position: absolute;
          top: 50%;
          left: 50%;
          z-index: 100;
        }

        .my-error-class {
    color:#FF0000;  /* red */
}
.my-valid-class {
    color:#00CC00; /* green */
}
      </style>
    <title><?php echo $content ?></title>
  </head>
  <body>

  
  <!-- As a heading -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Simple Form Submission</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $config['base_url']; ?>/index.php/Details/list">Order List</a>
        </li>
      </ul>
      
    </div>
  </nav>

  <div id="loading">
    <img id="loading-image" src="<?php echo $config['base_url']; ?>/assets/img/loading.gif" alt="Loading..." />
  </div>
  
    

  <form id="formSubId">
    <!--  General -->
    <div class="form-group">
      <h2 class="heading"> Order </h2>

      <div class="grid">
        
        <div class="col-1-3">
          <div class="controls">
          <label  class="float" for="amount-number">Amount</label>  
          <input type="number" id="amount-number" class="floatLabel" name="amount-number">
            
          </div>          
        </div>

        <div class="col-2-3">
          <div class="controls">
            <label  class="float" for="buyer">Buyer</label>
            <input type="text" id="buyer" class="floatLabel" name="buyer">
            
          </div>          
        </div>

      </div>
      <div class="grid">

        <div class="col-1-2">
          <div class="controls">
            <label  class="float" for="receipt_id">Receipt Id</label>
            <input type="text" id="receipt_id" class="floatLabel" name="receipt_id">
            
          </div>          
        </div>

        <div class="col-1-2">
          <div class="controls">
            <label  class="float" for="entry_by">Entry By</label>
            <input type="number" id="entry_by" class="floatLabel" name="entry_by">
            
          </div>  
        </div>

      </div>
      <div class="controls">
        <label  class="float" for="items">Items</label>
        <input type="text" id="items" class="floatLabel" name="items">
        
      </div>
      
    </div>
    <!--  Contact Details -->
    <div class="form-group">
      <h2 class="heading"> Contact  Details </h2>
      <div class="grid">
        
        <div class="col-1-3 col-1-3-sm">
          <div class="controls">
            <label  class="float" for="phone" class="float"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;Phone</label>
            <input type="tel" id="phone" class="floatLabel" name="phone" onfocus="appendCountryCode(this)">
            
          </div>
        </div>

        <div class="col-1-3 col-1-3-sm">
          <div class="controls">
            <label  class="float"  class="float" for="email"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Email</label>
            <input type="text" id="email" class="floatLabel" name="email">
            
          </div>
        </div>

        <div class="col-1-3 col-1-3-sm">
          <div class="controls">
            <label  class="float" for="city"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;City</label>
            <input type="text" id="city" class="floatLabel" name="city">
          </div>         
        </div>

      </div>

      <div class="grid">
        <p class="info-text">Please describe your extra notes here ...</p>
        <br>
        <div class="controls">
          <textarea name="note" class="floatLabel" id="note"></textarea>
        </div>
        <div id="confirmMsg" class="alert alert-primary" role="alert">
          hello
        </div>
        <button id="btnSubmit" type="submit" value="Submit" class="col-1-4">Submit</button>
      </div> 

    </div> <!-- /.form-group -->
  </form>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo $config['base_url']; ?>/assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script src="<?php echo $config['base_url']; ?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo $config['base_url']; ?>/assets/js/additional-methods.min.js"></script>
    
    
    <script>

      function appendCountryCode(elem){
        if($(elem).val()=="")
          $(elem).val("880");
      }
      function floatLabel(inputType)
      {
          $(inputType).each(function()
          {
              var $this = $(this);
              // on focus add cladd active to label
              $this.focus(function(){
                  $this.prev().addClass("active");
              });
              //on blur check field and remove class if needed
              $this.blur(function(){
                  if($this.val() === '' || $this.val() === 'blank')
                  {
                      $this.prev().removeClass().addClass("float");
                  }
              });
          });
      }

      function getFormData()
      {
        event.preventDefault();
        var unindexed_array = $("#formSubId").serializeArray();
        var indexed_array = {};

        $.map(unindexed_array, function(n, i){
          indexed_array[n['name']] = n['value'];
        });

        return indexed_array;
        
        
      }

      /*function addHyphen(element) {
        let ele = document.getElementById(element.id);
          ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

          let finalVal = ele.match(/.{1,3}/g).join('-');
          document.getElementById(element.id).value = finalVal;
      }*/


      function setCookie(cname, cvalue, exdays) 
      {
        var d = new Date();
        //d.setTime(d.getTime() + (exdays*24*60*60*1000));
        d.setTime(d.getTime() + (exdays*60*1000));

        var expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
      }

      function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
      }




      floatLabel(".floatLabel");


      
            
      $(function() {
        $('#loading').hide();
        $("#confirmMsg").hide()
        
        

        $.validator.addMethod("alphabetsnspace", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9 ]*$/.test(value);
        });
        $.validator.addMethod("alphabets", function(value, element) {
            return this.optional(element) || /^[a-zA-Z]*$/.test(value);
        });
        $.validator.addMethod("alphabetnspace", function(value, element) {
            return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
        }, "only text and spaces");
        $.validator.addMethod("wordCount", function(value, element, wordCount) {

          return value.split(' ').length <= wordCount;

        });
        $.validator.addMethod('customphone', function (value, element) {
            return this.optional(element) || /^880\d{10}$/.test(value);
        }, "phone number must be 13 digit with 880 as prefix");
        
        $("#formSubId").validate({
          rules:{
            'amount-number': "required",
            'buyer': {
              required:true,
              alphabetsnspace: true
            },
            'receipt_id':{
              required: true,
              alphabets: true,
            },
            'entry_by':{
              required:true,
              number:true
            },
            'items':'required',
            'phone':{
              required:true,
              customphone: true
            },
            'email':{
              required:true,
              email:true,
            },
            'city':{
              required:true,
              alphabetnspace:true
            },
            'note':{
              wordCount: 30
              
            }
          },
          errorClass: "my-error-class",
          validClass: "my-valid-class",
          messages:{
            'amount-number': {
                required: "required field.",
                digits: "Please enter only digits."
              },
            'buyer': {
              required: "required field.",
              alphabetsnspace:"Only alphanumeric and spaces are valid characters.",
              maxlength: "Please enter no more than 20 characters."
            },
            'receipt_id':{
                required: "required field.",
                alphabets: "only alphabets (A~Z, a-z) are valid characters."
            },
            'entry_by':{
                required: "required field."
            },
            'items':{
                required: "required field."
            },
            'phone':{
                required: "required field."
            },
            'email':{
                required: "required field.",
                email: "Invalid Email"
            },
            'city':{
                required: "required field."
            },
            'note':{
              wordCount:'Please shorten to 30 words or less.'
            }
          },
          //errorElement : 'div',
          //errorLabelContainer: 'errorTxt',
          submitHandler: function()
          {
            

            if (getCookie('cUser')=="" && getCookie('cAgent')=="")
            $.ajax(
            {

                url : "<?php echo $config['base_url']; ?>"+"/index.php/Home/order",
                type : 'POST',
                data : getFormData(),
                beforeSend: function(){
                  $("#loading").show();
                },
                timeout: 3000,
                success : function(data) {              
                  
                  
                  console.log(data);
                  $("#confirmMsg").text(data);

                  setCookie('cUser', getFormData(), 5) ;
                  setCookie('cAgent',navigator.userAgent,5);

                },
                error : function(request,error)
                {
                    console.log("failure: "+JSON.stringify(request));
                    $("#confirmMsg").text("failure: "+JSON.stringify(request));
                },
                complete:function(data){
                  // Hide image container
                  $("#loading").hide();
                  $("#confirmMsg").hide().slideDown().delay(3000).fadeOut();
                }
            });

            else alert("Already Exists");
          }
        });

        


      });
    </script>
</body>
</html>