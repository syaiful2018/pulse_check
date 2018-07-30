<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <title>Garuda Indonesia Group</title>

    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url()?>css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url()?>js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
</head>
<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="#" class="navbar-brand">Garuda Indonesia</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a aria-expanded="false" role="button" href="<?php echo base_url()?>admin"> Dashboard</a>
                    </li>
                    <li class="active">
                        <a aria-expanded="false" role="button" href="<?php echo base_url()?>admin/data"> Data</a>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                           <h4><i class="fa fa-map-marker"></i>  Welcome Admin </h4>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/logout">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Upload Data <small>Berisi data penilaian setiap unit.</small></h5>
                        </div>
                        <div class="ibox-content">
                        <?php echo form_open_multipart('admin/proses')?>
                                                       
                                    <div class="form-group">                                     
                                      <input type="hidden" class="form-control" name="judul" autocomplete="off" value="a" placeholder="Judul">
                                    </div> 
                                    <div class="form-group">
                                        <label>File (Max 2MB dan XLS)</label>
                                        <input type="file" name="userfile" >
                                    </div>
                                
                                                                                         
                                    <div class="hr-line-dashed"></div>
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane "></i>   Submit</button>
                                    <?php echo form_close()?>               
                        </div>
                      </div>
                   </div>
                   <div class="col-lg-8">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Daftar Penilaian Terkini </h5>
                            </div>
                            <div class="ibox-content">

                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                              <th class="text-center">Unit</th>
                                              <th class="text-center">Level</th>
                                              <th class="text-center">Basic</th>
                                              <th class="text-center">Compensation</th>
                                              <th class="text-center">Development</th>
                                              <th class="text-center">Leadership</th>
                                              <th class="text-center">Mission & Goals</th>
                                              <th class="text-center">Teamwork</th>
                                              <th class="text-center">Recognition</th>
                                              <th class="text-center">Rata - Rata</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($penilaian as $hasil) : ?>
                                            <tr>
                                              <td><?php echo $hasil->unit?></td>
                                              <td><?php echo $hasil->level?></td>
                                              <td class="text-center"><?php echo $hasil->kriteria1?></td>
                                              <td class="text-center"><?php echo $hasil->kriteria2?></td>
                                              <td class="text-center"><?php echo $hasil->kriteria3?></td>
                                              <td class="text-center"><?php echo $hasil->kriteria4?></td>
                                              <td class="text-center"><?php echo $hasil->kriteria5?></td>
                                              <td class="text-center"><?php echo $hasil->kriteria6?></td>
                                              <td class="text-center"><?php echo $hasil->kriteria7?></td>
                                              <td class="text-center"><?php echo $hasil->rata_rata?></td>
                                              
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>       
                </div>        
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

        </div>
        </div>

 <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="<?php echo base_url();?>js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>js/inspinia.js"></script>
    <script src="<?php echo base_url();?>js/plugins/pace/pace.min.js"></script>

    <!-- Morris -->
    <script src="<?php echo base_url()?>js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/morris/morris.js"></script>
    <script src="<?php echo base_url()?>js/muter.js"></script>

    <!-- EayPIE -->
    <script src="<?php echo base_url();?>js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- svg Donut-->    
    <script src="<?php echo base_url()?>js/jquery.svgDoughnutChart.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url();?>js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url();?>js/demo/sparkline-demo.js"></script>

    <!-- Data picker -->
   <script src="<?php echo base_url();?>js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="<?php echo base_url();?>js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="<?php echo base_url();?>js/plugins/daterangepicker/daterangepicker.js"></script>

    <script type="text/javascript">
        Morris.Bar({
        element: 'score',
        data: [
        {y: '<?php echo $nilai_corporate[0]->kriteria;?>', a: <?php echo $nilai_corporate[0]->nilai; ?>},
        {y: '<?php echo $nilai_corporate[1]->kriteria;?>', a: <?php echo $nilai_corporate[1]->nilai; ?>},
        {y: '<?php echo $nilai_corporate[2]->kriteria;?>', a: <?php echo $nilai_corporate[2]->nilai; ?>},
        {y: '<?php echo $nilai_corporate[3]->kriteria;?>', a: <?php echo $nilai_corporate[3]->nilai; ?>},
        {y: '<?php echo $nilai_corporate[4]->kriteria;?>', a: <?php echo $nilai_corporate[4]->nilai; ?>},
        {y: '<?php echo $nilai_corporate[5]->kriteria;?>', a: <?php echo $nilai_corporate[5]->nilai; ?>},
        {y: '<?php echo $nilai_corporate[6]->kriteria;?>', a: <?php echo $nilai_corporate[6]->nilai; ?>},
       
      ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Score',],
        hideHover: 'auto',
        resize: true,
        gridTextSize:'10px',
        gridTextFamily:'open sans',
        xLabelAngle: 60,
        barColors: function (row, series, type) {
        console.log("--> "+row.label, series, type);
        if(row.label == "<?php echo $nilai_corporate[0]->kriteria;?>") return "#65a56a";
        else if(row.label == "<?php echo $nilai_corporate[1]->kriteria;?>") return "#95c48b";
        else if(row.label == "<?php echo $nilai_corporate[2]->kriteria;?>") return "#bbe098";
        else if(row.label == "<?php echo $nilai_corporate[3]->kriteria;?>") return "#fcd58d";
        else if(row.label == "<?php echo $nilai_corporate[4]->kriteria;?>") return "#FF847C";
        else if(row.label == "<?php echo $nilai_corporate[5]->kriteria;?>") return "#E84A5F";
        else if(row.label == "<?php echo $nilai_corporate[6]->kriteria;?>") return "#d1273e";
        }

        });
    </script>

    <script type="text/javascript">
        Morris.Bar({
        element: 'direk',
        data: [
        {y: '<?php echo $direktur[0]->kode_dir;?>', a: <?php if ($direktur[0]->rata_rata==0){echo 0;} else echo $direktur[0]->rata_rata;?>},
        {y: '<?php echo $direktur[1]->kode_dir;?>', a: <?php if ($direktur[1]->rata_rata==0){echo 0;} else echo $direktur[1]->rata_rata;?>},
        {y: '<?php echo $direktur[2]->kode_dir;?>', a: <?php if ($direktur[2]->rata_rata==0){echo 0;} else echo $direktur[2]->rata_rata;?>},
        {y: '<?php echo $direktur[3]->kode_dir;?>', a: <?php if ($direktur[3]->rata_rata==0){echo 0;} else echo $direktur[3]->rata_rata;?>},
        {y: '<?php echo $direktur[4]->kode_dir;?>', a: <?php if ($direktur[4]->rata_rata==0){echo 0;} else echo $direktur[4]->rata_rata;?>},
        {y: '<?php echo $direktur[5]->kode_dir;?>', a: <?php if ($direktur[5]->rata_rata==0){echo 0;} else echo $direktur[5]->rata_rata;?>},
        {y: '<?php echo $direktur[6]->kode_dir;?>', a: <?php if ($direktur[6]->rata_rata==0){echo 0;} else echo $direktur[6]->rata_rata;?>},
        {y: '<?php echo $direktur[6]->kode_dir;?>', a: <?php if ($direktur[7]->rata_rata==0){echo 0;} else echo $direktur[7]->rata_rata;?>},
       
      ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Nilai',],
        hideHover: 'auto',
        resize: true,
        gridTextSize:'10px',
        gridTextFamily:'open sans',
        barColors: function (row, series, type) {
        console.log("--> "+row.label, series, type);
        if(row.label == "<?php echo $direktur[0]->kode_dir;?>") return "#65a56a";
        else if(row.label == "<?php echo $direktur[1]->kode_dir;?>") return "#95c48b";
        else if(row.label == "<?php echo $direktur[2]->kode_dir;?>") return "#bbe098";
        else if(row.label == "<?php echo $direktur[3]->kode_dir;?>") return "#fcd58d";
        else if(row.label == "<?php echo $direktur[4]->kode_dir;?>") return "#FF847C";
        else if(row.label == "<?php echo $direktur[5]->kode_dir;?>") return "#E84A5F";
        else if(row.label == "<?php echo $direktur[6]->kode_dir;?>") return "#d1273e";
        else if(row.label == "<?php echo $direktur[7]->kode_dir;?>") return "#d1273e";
        }

        });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
       $('input[type="radio"]').click(function() {
           if($(this).attr('id') == 'option1') {
                $('#tampil_option1').show();
                $('#tampil_option2').hide();
                $('#tampil_option3').hide();            
           }
           else if($(this).attr('id') == 'option2') {
                $('#tampil_option2').show();
                $('#tampil_option1').hide();
                $('#tampil_option3').hide();            
           }
           else if($(this).attr('id') == 'option3') {
                $('#tampil_option3').show();
                $('#tampil_option2').hide();
                $('#tampil_option1').hide();            
           }
           else {
                $('#tampil_option1').hide();
                $('#tampil_option2').hide();
                $('#tampil_option3').hide();   
           }
       });
    });
    </script>

        <script>

        <?php 
                  $prosenL = $gender[0]->Jumlah/($gender[0]->Jumlah+$gender[1]->Jumlah)*100; 
                  $prosenP = $gender[1]->Jumlah/($gender[0]->Jumlah+$gender[1]->Jumlah)*100;?>
        $('#gender').doughnutChart({
            positiveColor: "#1ab394",
            negativeColor: "#87d6c6",
            backgroundColor: "white",
            percentage: <?php if ($prosenL>$prosenP) {echo number_format($prosenL,0,".",".");} else echo number_format($prosenP,0,".","."); ?>,
            size: 250,
            doughnutSize: 0.32,
            innerText: "<?php if ($prosenL>$prosenP) {echo number_format($prosenL,0,".",".")."%";} else echo number_format($prosenP,0,".",".")."%"; ?>",
            innerTextOffset: 20,
            Title: "Jenis Kelamin Responden",
            positiveText: "<?php echo $gender[0]->Jumlah." Orang laki-laki" ?>",
            negativeText: "<?php echo $gender[1]->Jumlah." Orang Perempuan" ?>"
        });
        <?php 
                  $prosenB = $lokasi[0]->Jumlah/($lokasi[0]->Jumlah+$lokasi[1]->Jumlah)*100; 
                  $prosenH = $lokasi[1]->Jumlah/($lokasi[0]->Jumlah+$lokasi[1]->Jumlah)*100;?>
        $('#lokasi').doughnutChart({
            positiveColor: "#5adee2",
            negativeColor: "#ff5b5b",
            backgroundColor: "white",
            percentage: <?php if ($prosenH>$prosenB) {echo number_format($prosenH,0,".",".");} else echo number_format($prosenB,0,".","."); ?>,
            size: 250,
            doughnutSize: 0.32,
            innerText: "<?php if ($prosenH>$prosenB) {echo number_format($prosenH,0,".",".")."%";} else echo number_format($prosenB,0,".",".")."%"; ?>",
            innerTextOffset: 20,
            Title: "Lokasi Responden",
            positiveText: "<?php echo $lokasi[1]->Jumlah." Orang Head Office" ?>",
            negativeText: "<?php echo $lokasi[0]->Jumlah." Orang Back Office" ?>"
        });
    </script>

    <script type="text/javascript">
        Morris.Donut({
          element: 'profesi',
          resize: true, 
          colors: ['#87d6c6', '#54cdb4','#1ab394'],
          data: [
            {label: "Darat", value: <?php echo $profesi[0]->Jumlah; ?>},
            {label: "Flight Attendant", value: <?php echo $profesi[1]->Jumlah; ?>},
            {label: "Pilot", value: <?php echo $profesi[2]->Jumlah; ?>}
          ],
          hideHover: 'auto'
        });
    </script>
    <script type="text/javascript">
        Morris.Donut({
          element: 'posisi',
          resize: true, 
          colors: ['#87d6c6', '#54cdb4','#1ab394'],
          data: [
            {label: "Non Struktural", value: <?php echo $posisi[0]->Jumlah; ?>},
            {label: "Pimpinan Unit Kerja", value: <?php echo $posisi[1]->Jumlah; ?>},
            {label: "Struktural", value: <?php echo $posisi[2]->Jumlah; ?>}
          ],
          hideHover: 'auto'
        });
    </script>
    <script type="text/javascript">
        Morris.Bar({
        element: 'usia',
        horizontal: true,
        data: [{ y: '18-30', a: <?php echo $usia[0]->Jumlah; ?>},
            { y: '31-40', a: <?php echo $usia[1]->Jumlah; ?>},
            { y: '41-50', a: <?php echo $usia[2]->Jumlah; ?>},
            { y: '51-58', a: <?php echo $usia[3]->Jumlah; ?>},          
            { y: '>58', a: <?php echo $usia[4]->Jumlah; ?>} ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Series A',],
        hideHover: 'auto',
        resize: true,
        barColors: ['#1ab394'],

        });
    </script>
    <script type="text/javascript">
        Morris.Bar({
        element: 'generasi',
        data: [
        {y: 'Baby Boomers', a: <?php echo $generasi[0]->Jumlah; ?>},
        {y: 'X', a: <?php echo $generasi[1]->Jumlah; ?>},
        {y: 'Y', a: <?php echo $generasi[2]->Jumlah; ?>},
        {y: 'Z', a: <?php echo $generasi[3]->Jumlah; ?>}
       
      ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Series A',],
        hideHover: 'auto',
        resize: true,
        barColors: ['#5adee2'],

        });
    </script>
        <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });
    </script>
    
</body>
</html>
    