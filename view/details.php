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
        /*
 * jQuery Basic Table
 * Author: Jerry Low
 */

table.bt thead,
table.bt tbody th {
  display: none;
}

table.bt tfoot th,
table.bt tfoot td,
table.bt tbody td {
  border: none;
  display: block;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  vertical-align: top;

  /* IE 9 */
  float: left\9;
  width: 100%\9;
}

table.bt tfoot th::before,
table.bt tfoot td::before,
table.bt tbody td::before {
  content: attr(data-th) ": ";
  display: inline-block;
  -webkit-flex-shrink: 0;
  -ms-flex-shrink: 0;
  flex-shrink: 0;
  font-weight: bold;
  width: 6.5em;
}

table.bt tfoot th.bt-hide,
table.bt tfoot td.bt-hide,
table.bt tbody td.bt-hide {
  display: none;
}

table.bt tfoot th .bt-content,
table.bt tfoot td .bt-content,
table.bt tbody td .bt-content {
  vertical-align: top;
}

.bt-wrapper.active {
  max-height: 310px;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
}

table.bt.bt--no-header tfoot td::before,
table.bt.bt--no-header tbody td::before {
  display: none;
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
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $config['base_url']; ?>/index.php/Home/index">Home </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Order List<span class="sr-only">(current)</span></a>
        </li>
      </ul>
      
    </div>
  </nav>

                    <div class="panel panel-primary">
						
						<div class="panel-body">
							<table class="table table-hover" id="table1">
								<thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Buyer</th>
                                        <th>Receipt ID</th>
                                        <th>Items</th>

                                        <th>Email</th>
                                        <th>Note</th>
                                        <th>City</th>
                                        <th>Phone</th>

                                        <th>Entry At</th>
                                        <th>Entry By</th>
                                    </tr>
                                </thead>
								<tbody>
                                    <?php if(isset($orderTable)) foreach ($orderTable as $item){ ?>
									<tr class="t-class">
                                       
                                        <td><?php echo $item['amount']; ?></td>
                                        <td><?php echo $item['buyer']; ?></td>
                                        <td><?php echo $item['receipt_id']; ?></td>
                                        <td><?php echo $item['items']; ?></td>

                                        <td><?php echo $item['buyer_email']; ?></td>
                                        <td><?php echo $item['note']; ?></td>
                                        <td><?php echo $item['city']; ?></td>
                                        <td><?php echo $item['phone']; ?></td>

                                        <td><?php echo $item['entry_at']; ?></td>
                                        <td><?php echo $item['entry_by']; ?></td>

                                        <td></td>
                                        <td></td>
                                       
                                    </tr>   
                                    <?php } ?>     									
								</tbody>
							</table>
						</div>
					</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo $config['base_url']; ?>/assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script src="<?php echo $config['base_url']; ?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo $config['base_url']; ?>/assets/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="<?php echo $config['base_url']; ?>/assets/js/jquery.basictable.min.js"></script>

    
    <script>
            
      $(function() {
        
       $('#table_id').basictable('start');


      });
    </script>
</body>
</html>